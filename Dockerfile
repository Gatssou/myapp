FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev libpq-dev libonig-dev \
    nodejs npm \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY package*.json ./
RUN npm install

COPY . .

RUN npm run build
RUN composer install --no-dev --optimize-autoloader

# Clear cache Laravel **safe** sans toucher à la DB
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear

RUN chmod -R 775 storage bootstrap/cache

EXPOSE 9000

CMD ["php-fpm"]
