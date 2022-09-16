FROM php:8.1-fpm-alpine

RUN apk update \
    && apk add --update-cache --no-cache \
        autoconf \
        gcc \
        g++ \
        make

RUN pecl install ds \
    && docker-php-ext-enable ds
