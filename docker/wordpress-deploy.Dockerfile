FROM composer as vendor
COPY wordpress/wp-content/themes/linklives /var/www/html/wp-content/themes/linklives

WORKDIR /var/www/html/wp-content/themes/linklives

RUN composer install --ignore-platform-reqs

FROM node as node_builder

COPY wordpress/wp-content/themes/linklives /var/www/html/wp-content/themes/linklives
COPY --from=vendor /var/www/html/wp-content/themes/linklives /var/www/html/wp-content/themes/linklives
#ENV SAGE_DIST_PATH=/var/www/html/wp-content/themes/linklives/dist/
WORKDIR /var/www/html/wp-content/themes/linklives
RUN yarn install && yarn run build:production

FROM wordpress:5.9.3-php7.4-fpm

# Install cron
RUN apt-get update && apt-get -y install cron

# Copy cron.conf file to the /var/www/cron.conf directory
COPY cron.conf /var/www/cron.conf

# Give execution rights on the cron job
RUN chmod 0644 /var/www/cron.conf

# Apply cron job
RUN crontab /var/www/cron.conf

# Create wp-admin dir and set permissions
RUN mkdir /var/www/html/wp-admin || true && chown -R www-data:www-data /var/www/html/wp-admin && chmod -R 0755 /var/www/html/wp-admin

# Copy theme from node_builder stage setting www-data as owner
COPY --from=node_builder --chown=www-data:www-data /var/www/html/wp-content/themes/kbharkiv /var/www/html/wp-content/themes/kbharkiv

# Delete node_modules from server
RUN rm -rf /var/www/html/wp-content/themes/kbharkiv/node_modules

# Ownership and permissions on theme directory
RUN chown -R www-data:www-data /var/www/html/wp-content && chmod -R 0755 /var/www/html/wp-content

# Use the default PHP production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# PHP configuration
RUN echo "short_open_tag = Off" > $PHP_INI_DIR/conf.d/short_open_tag.ini
RUN echo "upload_max_filesize = 128M\npost_max_size = 128M\nmax_execution_time = 120\nmemory_limit=256M" > $PHP_INI_DIR/conf.d/max_upload_size.ini

# Wordpress configuration
ENV WORDPRESS_CONFIG_EXTRA="define('WP_MEMORY_LIMIT','64M'); define('WP_MAX_MEMORY_LIMIT','256M'); define('FS_METHOD', 'direct'); define('DISABLE_WP_CRON', true); define( 'WP_HOME', '{site-url}' ); define( 'WP_SITEURL', '{site-url}' );"

EXPOSE 9000
