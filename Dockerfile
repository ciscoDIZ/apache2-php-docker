#Dockerfile para la creación de apache2 + php + otracosa

FROM ciscoadiz/apache2-php:latest
RUN apt-get update && apt-get install libapache2-mod-passenger