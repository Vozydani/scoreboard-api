FROM php:8.0.2-fpm
RUN apt-get update && apt-get install -y \
    git \
    libzip-dev \
    zip \
    unzip
RUN echo "cgi.fix_pathinfo=0;" > /usr/local/etc/php-fpm.d/php.ini
RUN docker-php-ext-install pcntl

WORKDIR /scoreboard-api
ADD . .