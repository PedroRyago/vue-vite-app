FROM php:7.4-apache

# Instala as extensões do PHP necessárias (incluindo o driver PDO para MySQL)
RUN docker-php-ext-install pdo pdo_mysql

# Copia o código fonte do backend para o diretório de trabalho do contêiner
COPY . /var/www/html

# Habilita o módulo de reescrita do Apache
RUN a2enmod rewrite

EXPOSE 8080

