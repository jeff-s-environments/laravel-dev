FROM php:8.2-fpm-alpine

# Setup postgres
RUN set -ex \
    && apk --no-cache add \
    postgresql-dev

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# Install extensions
RUN docker-php-ext-install mbstring tokenizer pdo_pgsql