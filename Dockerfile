# Dockerfile

# Use an official PHP image with necessary extensions
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the Laravel application files
COPY . .

# Install Laravel dependencies
RUN composer install --prefer-dist --no-scripts --no-autoloader && \
    composer dump-autoload && \
    chown -R www-data:www-data /var/www

# Set permissions for storage and cache
RUN chown -R www-data:www-data storage && \
    chmod -R 775 storage

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Start PHP-FPM server
CMD ["php-fpm"]
