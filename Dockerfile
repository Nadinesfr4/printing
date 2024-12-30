# Gunakan image PHP dengan FPM (FastCGI Process Manager)
FROM php:8.1-fpm

# Update dan install dependencies yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    curl \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath gd

# Install Composer (dependency manager untuk PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set folder kerja (di mana Laravel akan dijalankan)
WORKDIR /var/www

# Salin semua file Laravel dari project ke container
COPY . .

# Install dependencies Laravel
RUN composer install --optimize-autoloader --no-dev

# Beritahu Docker agar membuka port 80
EXPOSE 80

# Perintah untuk menjalankan Laravel
CMD php artisan serve --host=0.0.0.0 --port=80