# 1️⃣ Image de base PHP + FPM
FROM php:8.2-fpm

# 2️⃣ Installer les dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_mysql zip

# 3️⃣ Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4️⃣ Copier le projet dans le container
WORKDIR /var/www/html
COPY . .

# 5️⃣ Installer les dépendances PHP Laravel
RUN composer install --optimize-autoloader --no-dev

# 6️⃣ Générer la clé Laravel (APP_KEY)
RUN php artisan key:generate

# 7️⃣ Exposer le port que Render utilisera
EXPOSE 10000

# 8️⃣ Commande pour démarrer le serveur Laravel
CMD php artisan serve --host 0.0.0.0 --port 10000
