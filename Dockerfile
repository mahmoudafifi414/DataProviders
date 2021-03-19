FROM php:8.0.1-fpm-alpine
RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \
&& pecl install xdebug-3.0.3 \
&& docker-php-ext-enable xdebug \
&& apk del pcre-dev ${PHPIZE_DEPS}

WORKDIR /var/www

ADD . /var/www
