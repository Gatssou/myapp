# 1️⃣ Image de base PHP + FPM
FROM php:8.2-fpm

# 2️⃣ Installer les dépendances système + driver PostgreSQL
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git curl libpq-dev libonig-dev \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip

# 3️⃣ Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4️⃣ Copier le projet
WORKDIR /var/www/html
COPY . .

# 5️⃣ Variables temporaires pour le build
ENV CACHE_DRIVER=file
ENV SESSION_DRIVER=file
ENV APP_ENV=production
ENV APP_DEBUG=false

# 6️⃣ Installer les dépendances Laravel
RUN composer install --optimize-autoloader --no-dev

# 7️⃣ Exposer le port pour Render
EXPOSE 10000

# 8️⃣ Commande pour démarrage
CMD php artisan config:clear && \
    php artisan config:cache && \
    php artisan migrate --force && \
    php artisan cache:clear && \
    php artisan key:generate --ansi && \
    php artisan serve --host 0.0.0.0 --port 10000
