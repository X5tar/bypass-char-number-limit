FROM php:7.2-apache
RUN mkdir /tmp/sandbox{4,5} && chown www-data:www-data /tmp/sandbox{4,5}
COPY html/ /var/www/html/