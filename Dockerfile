#Dockerfile para la creación de apache2 + php + mysql

FROM ubuntu:latest
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update -y  && apt-get upgrade -y && apt-get install -y apache2 php php-dev php-mysql \
     libapache2-mod-php php-curl php-common php-mbstring composer

CMD ["apachectl","-D","FOREGROUND"]
RUN a2enmod rewrite && echo '<?php phpinfo(); ?>' > /var/www/html/info.php
EXPOSE 80 443

COPY ./config/* /etc/php/7.4/apache2/
COPY ./src/*.php /var/www/html/app/
ADD ./src/php/* /var/www/html/app/php/
