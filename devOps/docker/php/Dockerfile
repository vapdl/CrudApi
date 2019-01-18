FROM php:7.2-fpm as base

# override default WORKDIR
WORKDIR /var/www

################################################################################

FROM base as devel

RUN pecl install xdebug-2.6.1 \
    && docker-php-ext-enable xdebug

# set php.ini
COPY php-devel/php.ini $PHP_INI_DIR/php.ini

# set fpm pool config
COPY php-devel/php-fpm.d/www.conf $PHP_INI_DIR/../php-fpm.d/www.conf

# packages needed from old image
# TODO: Check if this is needed.
RUN apt-get update && apt-get install -y \
	libcurl4-gnutls-dev \
	libmcrypt-dev  \
    libxml2-dev \
	libjpeg-dev \
	libpng-dev \
	libfreetype6-dev \
	libicu-dev \
	mysql-client \
	&& docker-php-ext-install pdo_mysql \
	&& docker-php-ext-install pdo mbstring

ARG user=deploybot
ARG uid=1000

RUN useradd -m -u ${uid} -d /home/${user} ${user}  \
 && chown -R ${user} /home/${user}
