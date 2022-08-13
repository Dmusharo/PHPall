FROM php:8.0-fpm

RUN apt-get updatedocker

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apt-get install libzip-dev zip libicu-dev libpq-dev -y

RUN docker-php-ext-install zip && docker-php-ext-configure intl && docker-php-ext-install intl && docker-php-ext-install bcmath

COPY www.conf /usr/local/etc/php-fpm.d/www.conf

WORKDIR /var/www

CMD ["php-fpm", "--allow-to-run-as-root"]