FROM alpine:3.12

RUN apk update; apk add libc6-compat wget; \
    wget --quiet https://dl.influxdata.com/telegraf/releases/telegraf-1.15.2_linux_amd64.tar.gz; \
    tar -xf telegraf-1.15.2_linux_amd64.tar.gz; \
    rm -rf telegraf-1.15.2_linux_amd64.tar.gz

WORKDIR /telegraf-1.15.2

RUN cp -r ./etc/* /etc/; \
	cp -r ./usr/lib/* /usr/lib/; \
    cp -r ./usr/bin/* /usr/bin/; \
	cp -r ./var/log/* /var/log/

COPY ./telegraf.conf /etc/telegraf

ENTRYPOINT ["telegraf"]
