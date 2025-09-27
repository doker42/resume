#FROM ubuntu:latest
#LABEL authors="doker"
#
#ENTRYPOINT ["top", "-b"]

#FROM php:8.2-fpm
#
#RUN apt-get update && apt-get install -y \
#    git  \
#    curl  \
#    zip  \
#    unzip  \
#    libonig-dev  \
#    libxml2-dev  \
#    libpq-dev  \
#    libzip-dev \
#    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl
#
#COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

FROM php:8.2-fpm

# Установим системные пакеты и зависимости
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    libzip-dev \
    libicu-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    pkg-config \
    libssl-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl intl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Установим расширение Redis (phpredis)
RUN pecl install redis \
    && docker-php-ext-enable redis

# Копируем Composer из официального образа
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
