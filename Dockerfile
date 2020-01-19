FROM php:7.2-apache
RUN apt-get update && apt-get install -y git mariadb-client
COPY . /var/www/html/mastercrm-vtiger
RUN cd /var/www/html/
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
#Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=. --filename=composer
RUN mv composer /usr/local/bin/
COPY run_crm.sh /run_crm.sh
RUN chmod +x "/run_crm.sh"
ENTRYPOINT "/run_crm.sh"