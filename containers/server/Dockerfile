FROM php:7.2-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN usermod -u 1000 www-data

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Enable Apache mod_rewrite
RUN a2enmod headers

# Enable Apache mod_rewrite
RUN a2enmod expires

RUN chmod 777 -R /var/www/