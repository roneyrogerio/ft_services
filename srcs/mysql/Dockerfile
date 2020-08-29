FROM alpine:3.12.0

RUN apk update && \
	apk add mysql mysql-client && \
	addgroup mysql mysql && \
	mkdir /scripts && \
	rm -rf /var/cache/apk/*

COPY ./startup.sh /usr/local/bin/startup.sh
RUN chmod +x /usr/local/bin/startup.sh
COPY ./wordpress /docker-entrypoint-initdb.d

EXPOSE 3306

CMD ["startup.sh"]
