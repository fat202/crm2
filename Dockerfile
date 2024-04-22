FROM php:7.4.3-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN apt-get update -y && apt-get install -y libwebp-dev libjpeg62-turbo-dev libpng-dev libxpm-dev libfreetype6-dev


RUN apt-get install -y libzip-dev
RUN docker-php-ext-install zip


RUN docker-php-ext-install gd

RUN apt-get update && apt-get upgrade -y

COPY ./docker/php.ini /usr/local/etc/php/php.ini

RUN a2enmod rewrite

RUN mkdir /var/www/sessions

RUN chown -R www-data:www-data /var/www/sessions
