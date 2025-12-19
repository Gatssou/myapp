# 1️⃣ Image de base PHP + FPM
FROM php:8.2-fpm

# 2️⃣ Installer les dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    curl \
    libpq-dev \
    libonig-dev \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip

# 3️⃣ Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4️⃣ Copier le projet dans le container
WORKDIR /var/www/html
COPY . .

# 5️⃣ Copier le fichier .env si nécessaire
# Si tu ne veux pas copier ton vrai .env, utilise .env.example
RUN cp .env.example .env

# 6️⃣ Définir des variables temporaires pour le build
ENV CACHE_DRIVER=file
ENV SESSION_DRIVER=file
ENV APP_ENV=production
ENV APP_DEBUG=false

# 7️⃣ Installer les dépendances PHP Laravel
RUN composer install --optimize-autoloader --no-dev

# 8️⃣ Nettoyer le cache et générer la clé Laravel
RUN php artisan config:clear
RUN php artisan cache:clear
RUN php artisan key:generate --ansi

# 9️⃣ Exposer le port que Render utilisera
EXPOSE 10000

# 🔟 Commande pour démarrer le serveur Laravel
CMD php artisan serve --host 0.0.0.0 --port 10000
