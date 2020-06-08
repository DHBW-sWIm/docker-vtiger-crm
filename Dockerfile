FROM php:7.2-apache

RUN apt-get update \
    && apt-get install -y git mariadb-client

RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite

#Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=. --filename=composer \ 
    && mv composer /usr/local/bin/

WORKDIR /var/www/html
COPY . .

RUN chmod +x "./run_crm.sh"
ENTRYPOINT "./run_crm.sh"