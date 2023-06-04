FROM php:8.1-apache

RUN cd /etc/apache2/mods-enabled \
    && ln -s ../mods-available/rewrite.load

COPY ./docker/php/ /usr/local/etc/php/
COPY ./docker/apache/ /etc/apache2/sites-enabled/

RUN apt-get update \
    && apt-get install -y git zip unzip libzip-dev vim \
    libpng-dev libpq-dev libfreetype6-dev libjpeg-dev libonig-dev \
    && docker-php-ext-install pdo pdo_mysql mysqli zip

RUN docker-php-ext-configure gd \
    --with-freetype=/usr/include/ \
    --with-jpeg=/usr/include \
    && docker-php-ext-install -j$(nproc) gd

RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN rm -rf node_modules
RUN apt-get install -y nodejs
RUN npm install npm -g n --save-dev cross-env
RUN n 16.17.0
RUN npm cache clear --force
RUN npm install webpack --save
RUN npm install node-sass --nodedir=/usr/bin/node

WORKDIR /var/www/html
