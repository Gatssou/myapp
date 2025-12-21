# Base image PHP 8.2 FPM
FROM php:8.2-fpm

# Installer dépendances système et PHP
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev libpq-dev libonig-dev \
    nodejs npm \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier package.json et package-lock.json pour Node
COPY package*.json ./

# Installer les dépendances Node
RUN npm install

# Copier le reste du projet
COPY . .

# Build Vite
RUN npm run build

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# Clear cache Laravel
RUN php artisan config:clear \
    && php artisan cache:clear \
    && php artisan route:clear \
    && php artisan view:clear

# Appliquer les migrations PostgreSQL
RUN php artisan migrate --force

# Permissions sur storage et cache
RUN chmod -R 775 storage bootstrap/cache

# Exposer le port PHP-FPM attendu par Render
EXPOSE 9000

# Lancer PHP-FPM en foreground
CMD ["php-fpm"]
