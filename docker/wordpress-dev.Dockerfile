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

FROM wordpress:5.9.3-php7.4-fpm as wordpress

# Create wp-admin dir and set permissions
RUN mkdir /var/www/html/wp-admin || true && chown -R www-data:www-data /var/www/html/wp-admin && chmod -R 0755 /var/www/html/wp-admin

# Copy theme from node_builder stage setting www-data as owner
COPY --from=node_builder --chown=www-data:www-data /var/www/html/wp-content/themes/linklives /var/www/html/wp-content/themes/linklives

# Additional PHP configuration
RUN echo "short_open_tag = Off" > $PHP_INI_DIR/conf.d/short_open_tag.ini
RUN echo "upload_max_filesize = 128M\npost_max_size = 128M\nmax_execution_time = 120\nmemory_limit=128M" > $PHP_INI_DIR/conf.d/max_upload_size.ini

EXPOSE 9000