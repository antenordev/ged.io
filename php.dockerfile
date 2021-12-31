FROM php:7.4-apache
RUN a2enmod rewrite
EXPOSE 80
EXPOSE 443
