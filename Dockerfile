FROM php:8.2-fpm

# Dépendances système + Node
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev libpq-dev libonig-dev \
    nodejs npm \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copier package.json AVANT (important)
COPY package*.json ./
RUN npm install

# Copier le reste du projet
COPY . .

# Build Vite (CRUCIAL)
RUN npm run build

# Installer PHP deps
RUN composer install --no-dev --optimize-autoloader

# Clear cache Laravel et préparer app
RUN php artisan config:clear \
    && php artisan cache:clear \
    && php artisan route:clear \
    && php artisan view:clear

# Appliquer migrations
RUN php artisan migrate --force

# Permissions
RUN chmod -R 775 storage bootstrap/cache

# Exposer le port par défaut de PHP-FPM
EXPOSE 9000

# Lancer PHP-FPM en foreground (Render gère le proxy HTTP)
CMD ["php-fpm"]
