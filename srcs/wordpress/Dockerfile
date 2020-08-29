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

# wordpress
RUN mkdir app; \
	wget https://br.wordpress.org/wordpress-5.4.1-pt_BR.zip -O wordpress.zip; \
	unzip wordpress.zip -d /app/; \
	rm wordpress.zip
COPY ./wordpress.conf.php /app/wordpress/wp-config.php

EXPOSE 5050

CMD ["nginx", "-g", "daemon off;"]
