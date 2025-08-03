# Etapa 1: Instalar dependencias con Composer
FROM composer:latest AS deps
WORKDIR /app

# Copiar archivos desde el subdirectorio netservices
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# Etapa 2: PHP con Apache
FROM php:8.2-apache
WORKDIR /var/www/html/

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Activar mod_rewrite y permitir .htaccess
RUN a2enmod rewrite && \
    sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Cambiar DocumentRoot a /var/www/html/public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Definir ServerName para evitar advertencias
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copiar el resto del proyecto
COPY . /var/www/html/

# Copiar dependencias desde etapa anterior
COPY --from=deps /app/vendor /var/www/html/vendor/

# Asignar permisos
RUN chown -R www-data:www-data /var/www/html/

# Puerto expuesto (recomendado)
EXPOSE 80
