FROM php:7.4-apache
COPY src/ /var/www/html

RUN chown -R www-data:www-data /var/www

RUN apt-get update -y && apt-get install -y sendmail libpng-dev

RUN apt-get update && \
    apt-get install -y \
        zlib1g-dev

RUN docker-php-ext-install gd

WORKDIR /var/www/html
EXPOSE 80