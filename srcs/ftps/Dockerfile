FROM alpine:3.12.0

# Install packages
RUN apk update && apk add vsftpd openssl

# Create a new user
RUN adduser -D rde-oliv; \
	chown root:root /home/rde-oliv; \
	mkdir /home/rde-oliv/files; \
	chown rde-oliv:rde-oliv /home/rde-oliv/files; \
	rm -rf /var/cache/apk/*

# Warning: insecure in production
RUN echo -e "1234\n1234" | passwd rde-oliv

# Config
COPY ./vsftpd.conf /etc/vsftpd/vsftpd.conf

# Create new certificate
RUN openssl req -x509 -nodes -days 365 -newkey rsa:1024 -keyout /etc/ssl/private/vsftpd.pem -out /etc/ssl/private/vsftpd.pem -subj "/C=42/ST=SP/L=SP/O=Global Security/OU=FTP Server/CN=192.168.99.98"

# Start
COPY ./startup.sh /scripts/startup.sh
RUN chmod +x /scripts/startup.sh

EXPOSE 20 21 10000

CMD ["sh", "/scripts/startup.sh"]
