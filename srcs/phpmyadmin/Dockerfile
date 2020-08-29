FROM alpine:3.12.0

# Install packages
RUN apk update; \
	apk add nginx; \
	rm -rf /var/cache/apk/*

# Ngins config file
COPY ./nginx.conf /etc/nginx/nginx.conf

# https://github.com/gliderlabs/docker-alpine/issues/185#issuecomment-246595114
RUN mkdir -p /run/nginx

# New www user and folder
RUN adduser -D -g 'www' www; \
	mkdir /www; \
	chown -R www:www /var/lib/nginx; \
	chown -R www:www /www;

# phpMyAdmin
RUN mkdir app; \
	wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.zip -O phpmyadmin.zip; \
	unzip phpmyadmin.zip -d /app/; \
	rm phpmyadmin.zip; \
	mv /app/phpMyAdmin-5.0.2-all-languages /app/phpmyadmin
COPY ./phpmyadmin.config.inc.php /app/phpmyadmin/config.inc.php

EXPOSE 5000

CMD ["nginx", "-g", "daemon off;"]
