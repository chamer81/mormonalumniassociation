#
# mormonalumniassociation.org docker
#

FROM debian:8

RUN apt-get update; \
    apt-get install -y \
    nginx \
    php5-fpm \
    php5-cli

RUN rm /etc/nginx/sites-enabled/default
COPY mormonalumniassociation.org /var/www/mormonalumniassociation.org
COPY mormonalumniassociation.org.conf /etc/nginx/sites-enabled/mormonalumniassociation.org.conf

COPY startscript.sh /usr/local/bin/startscript.sh

# Expose the port for nginx to listen on
EXPOSE 80

CMD ["startscript.sh"]

