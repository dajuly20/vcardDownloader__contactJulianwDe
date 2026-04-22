FROM php:8.2-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Install required PHP extensions for PHPMailer SMTP (openssl already included)
RUN docker-php-ext-install sockets

# Copy site files
COPY . /var/www/html/

# Apache needs to follow .htaccess
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
