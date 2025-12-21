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

# Clear cache Laravel **safe** (pas de DB touchée)
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear

# Permissions sur storage et bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Exposer un port HTTP que Render peut détecter
EXPOSE 10000

# Lancer Laravel en mode serveur intégré pour le déploiement Render Free
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
