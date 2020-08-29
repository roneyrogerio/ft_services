FROM alpine:3.12.0

# Install packages
RUN apk update; \
	apk add nginx openssl; \
	rm -rf /var/cache/apk/*

# Copy nginx virtual host
COPY ./default.conf /etc/nginx/conf.d

# https://github.com/gliderlabs/docker-alpine/issues/185#issuecomment-246595114
RUN mkdir -p /run/nginx

# Create new certificate
RUN mkdir /etc/ssl/nginx && openssl req -x509 -nodes -days 365 -newkey \
rsa:2048 -keyout /etc/ssl/nginx/private.key -out /etc/ssl/nginx/public.crt \
-subj "/C=42/ST=SP/L=SP/O=Global Security/OU=FT Server/CN=localhost"

EXPOSE 80 443

# Start
CMD ["nginx", "-g", "daemon off;"]
