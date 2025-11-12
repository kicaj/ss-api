FROM php:8-apache

WORKDIR /var/www/html

RUN apt-get -y update
RUN apt-get install -y libicu-dev libzip-dev

# PHP extensions
RUN docker-php-ext-install intl pdo_mysql zip

# Additional tools
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Apache settings
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN a2enmod rewrite