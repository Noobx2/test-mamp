FROM php:8.2.5-fpm-alpine3.17

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

CMD ["php-fpm"]
