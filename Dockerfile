# Usando a imagem base do PHP com Apache
FROM php:8.3-apache
#FROM dotsafe-app

# Instalando extensões PHP necessárias para o PostgreSQL
RUN apt-get update\
    && apt-get install -y libpq-dev libzip-dev zlib1g-dev nano ssh openssh-server vim\
    && docker-php-ext-install pdo pdo_pgsql zip\
    && apt-get install curl\
    && curl -sS https://getcomposer.org/installer -o composer-setup.php\
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer\
    && composer create-project laravel/laravel dotsafe22


#RUN cd /var/www/html
#RUN mkdir -p /var/www/dotsafe2
#RUN php composer create-project laravel/laravel dotsafe

# Copiando o arquivo de configuração do Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Ativando mod_rewrite do Apache
RUN a2enmod rewrite

# Reiniciando o Apache
RUN service apache2 restart
