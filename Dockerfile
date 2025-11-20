# Dockerfile
FROM php:8.2-apache

# Copy your PHP app into the image
COPY php-app/ /var/www/html/

# (Optional) Enable Apache modules or install extensions here if needed
# RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
# RUN a2enmod rewrite
