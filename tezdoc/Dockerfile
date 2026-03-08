FROM php:8.2-fpm

# Sistem paketlari + LibreOffice + PHP kengaytmalari
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libreoffice \
    libreoffice-writer \
    libreoffice-pdfimport \
    --no-install-recommends \
    && docker-php-ext-install pdo pdo_mysql mbstring bcmath zip gd \
    && rm -rf /var/lib/apt/lists/*

# Composer o'rnatish
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html