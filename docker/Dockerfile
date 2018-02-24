FROM php:7.1-apache-jessie

RUN a2enmod rewrite

RUN apt-get update && apt-get install -y libmcrypt-dev mysql-client \
    && docker-php-ext-install pdo_mysql

WORKDIR /var/www/html
