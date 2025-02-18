FROM php:8.4-cli
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

COPY --chown=1000:1000 . /app

USER 1000

WORKDIR /app

