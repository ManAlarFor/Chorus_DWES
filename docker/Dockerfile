#Dockerfile

#
# CUANDO DE EJECUTA EL DOCKER-COMPOSE UP POR PRIMERA VEZ O SI SE MODIFICA, SE TIENE QUE USAR --build
#

# Usamos y configuramos una imagen base para php 8.3 con apache 
FROM php:8.3-apache

#
RUN apt-get update
RUN apt-get install zip unzip
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
#

#Habilitar las extensiones

RUN docker-php-ext-enable mysqli
RUN docker-php-ext-enable pdo_mysql

#Reiniciamos el servicio APACHE
RUN a2enmod rewrite

#Configuramos el directorio de trabajo
WORKDIR /var/www/HTML

#Expone el puert 80 para apache
EXPOSE 80

#Lector de apache en background
CMD ["apache2-foreground"]