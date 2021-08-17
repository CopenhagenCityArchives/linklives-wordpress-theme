FROM wordpress:5.5.0-php7.3-apache

# Install cron
RUN apt-get update && apt-get -y install cron

# Copy cron.conf file to the /var/www/cron.conf directory
COPY cron.conf /var/www/cron.conf

# Give execution rights on the cron job
RUN chmod 0644 /var/www/cron.conf

# Apply cron job
RUN crontab /var/www/cron.conf


# Copy theme build to temporary directory
COPY wordpress/wp-content/themes/linklives /usr/src/wordpress/wp-content/themes/linklives
COPY wordpress/wp-content/languages /usr/src/wordpress/wp-content/languages

# Ownership and permissions on theme directory
RUN chown -R www-data:www-data /usr/src/wordpress/wp-content && chmod -R 0755 /usr/src/wordpress/wp-content

# PHP configuration
RUN echo "short_open_tag = Off" > $PHP_INI_DIR/conf.d/short_open_tag.ini
RUN echo "upload_max_filesize = 128M\npost_max_size = 128M\nmax_execution_time = 120\nmemory_limit=256M" > $PHP_INI_DIR/conf.d/max_upload_size.ini

# Wordpress configuration
ENV WORDPRESS_CONFIG_EXTRA="define('FS_METHOD', 'direct'); define('DISABLE_WP_CRON', true); define( 'WP_HOME', '{site-url}' ); define( 'WP_SITEURL', '{site-url}' );"

EXPOSE 80
