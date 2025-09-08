FROM php:8.1-apache
RUN apt-get update && apt-get install -y \
    libicu-dev \
    zip unzip git \
    && docker-php-ext-install mysqli intl
RUN a2enmod rewrite
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
EXPOSE 80
CMD ["apache2-foreground"]

# Copy custom vhost config
COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf
