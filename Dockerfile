FROM php:5.6-apache

# git
RUN apt update && apt install -y git unzip

# install mysql
RUN docker-php-ext-install mysql mysqli pdo_mysql

# install composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# config
COPY ./conf/001-fuel.conf /etc/apache2/sites-available
COPY ./conf/php.ini /usr/local/etc/php/php.ini
RUN a2dissite 000-default.conf
RUN a2ensite 001-fuel.conf
RUN a2enmod rewrite
