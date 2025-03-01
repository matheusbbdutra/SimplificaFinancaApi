FROM php:8.4-fpm

RUN apt-get update && apt-get install -y git libzip-dev unzip p7zip-full

RUN apt-get update && apt-get install -y git libpq-dev librabbitmq-dev librabbitmq4


RUN docker-php-ext-install pdo_mysql pdo_pgsql


RUN pecl install amqp && docker-php-ext-enable amqp

RUN docker-php-ext-install bcmath \
    && docker-php-ext-install sockets


RUN apt-get update && apt-get install -y cron


# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www
