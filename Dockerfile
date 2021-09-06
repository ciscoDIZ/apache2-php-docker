#Dockerfile para la creación de apache2 + php + otracosa

FROM ubuntu:latest
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update -y  && apt-get upgrade -y && apt-get install -y apache2 php php-dev php-mysql \
     libapache2-mod-php php-curl php-common php-mbstring composer
CMD ["apachectl","-D","FOREGROUND"]
RUN a2enmod rewrite

COPY ./src/* /var/www/html/app/
COPY ./info/* /var/www/html/
COPY ./config/* /etc/php/7.4/apache2/
EXPOSE 80
EXPOSE 443
