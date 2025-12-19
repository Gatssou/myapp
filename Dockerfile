# 1️⃣ Image de base PHP + FPM
FROM php:8.2-fpm

# 2️⃣ Installer les dépendances système + driver PostgreSQL + Node.js
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git curl libpq-dev libonig-dev nodejs npm \
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

# 6️⃣ Installer les dépendances PHP
RUN composer install --optimize-autoloader --no-dev

# 7️⃣ Installer les dépendances JS et builder Vite
RUN npm install
RUN npm run build

# Créer un .env temporaire pour le build


# 8️⃣ Clear cache Laravel et permissions
RUN php artisan config:clear \
    && php artisan cache:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && chmod -R 775 storage bootstrap/cache

# 9️⃣ Exposer le port pour Render
EXPOSE 10000

# 🔟 Commande pour démarrage (ne pas regénérer la clé)
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=10000
