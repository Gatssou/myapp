# 1️⃣ Image de base PHP + FPM
FROM php:8.2-fpm

# 2️⃣ Installer les dépendances système nécessaires + driver PostgreSQL
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git curl libpq-dev libonig-dev \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip

# 3️⃣ Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4️⃣ Copier le projet dans le container
WORKDIR /var/www/html
COPY . .

# 5️⃣ Variables d'environnement temporaires pour le build
ENV CACHE_DRIVER=file
ENV SESSION_DRIVER=file
ENV APP_ENV=production
ENV APP_DEBUG=false

# 6️⃣ Installer les dépendances PHP Laravel
RUN composer install --optimize-autoloader --no-dev

# 7️⃣ Nettoyer le cache Laravel
RUN php artisan config:clear

# 8️⃣ Exposer le port que Render utilisera
EXPOSE 10000

# 9️⃣ Commande pour démarrer le serveur Laravel et appliquer les migrations en production
CMD php artisan migrate --force && \
    php artisan cache:clear && \
    php artisan key:generate --ansi && \
    php artisan serve --host 0.0.0.0 --port 10000
