FROM alpine:3.12

ENV PATH=/grafana-7.1.3/bin:$PATH

RUN apk update && apk add libc6-compat wget; \
    wget --quiet https://dl.grafana.com/oss/release/grafana-7.1.3.linux-amd64.tar.gz; \
    tar -xf grafana-7.1.3.linux-amd64.tar.gz; \
    rm -rf grafana-7.1.3.linux-amd64.tar.gz; \
    mkdir -p /var/lib/grafana/dashboards

WORKDIR /grafana-7.1.3

COPY conf/dashboard-json /var/lib/grafana/dashboards/dashboard.json
COPY conf/influxdb conf/provisioning/datasources/influxdb.yaml
COPY conf/dashboard conf/provisioning/dashboards/dashboard.yaml

EXPOSE 3000

ENTRYPOINT ["grafana-server"]
