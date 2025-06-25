# Use official PHP image with Apache
FROM php:8.2-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git unzip zip curl libzip-dev libonig-dev libxml2-dev npm \
    && docker-php-ext-install pdo_mysql mbstring zip xml

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Replace default site config with a Laravel-friendly one
COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Install Composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader
RUN cp .env.example .env && php artisan key:generate
RUN npm install
RUN npm run build

# Set permissions for storage and cache
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port 80 (Apache default)
EXPOSE 80

# Migrate and start Apache
CMD php artisan migrate --force && apache2-foreground
