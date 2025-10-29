# Usa una imagen de PHP
FROM php:8.2.29-apache

# Carpeta de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copiar configuraciones
COPY /docker/xdebug.conf /tmp/xdebug.conf
COPY /docker/php/php.ini /usr/local/etc/php/php.ini

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Configurar Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Instalar las dependencias necesarias para xdebug
RUN apt-get install -y \
    autoconf \
    g++ \
    make

# Instalar Xdebug
RUN pecl install xdebug && \
    docker-php-ext-enable xdebug && \
    cat /tmp/xdebug.conf >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli && \
    a2enmod rewrite


# Expone los puertos
EXPOSE 80 9003
