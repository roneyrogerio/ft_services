#!/bin/sh

# Start minikube
minikube start --driver=virtualbox

# Enable dashboard
minikube addons enable dashboard

# Install metallb
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/metallb.yaml
kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)"

# Docker images build
eval $(minikube docker-env)
docker build srcs/nginx -t nginx:rde-oliv
ssh-keygen -f srcs/nginx/ssh/id_rsa -t rsa -N ''
ssh-add srcs/nginx/ssh/id_rsa
docker build srcs/nginx/ssh -t ssh:rde-oliv
docker build srcs/ftps -t ftps:rde-oliv
docker build srcs/mysql -t mysql:rde-oliv
docker build srcs/wordpress -t wordpress:rde-oliv
docker build srcs/phpmyadmin -t phpmyadmin:rde-oliv
docker build srcs/php -t php:rde-oliv
docker build srcs/grafana -t grafana:rde-oliv
docker build srcs/influxdb -t influxdb:rde-oliv
docker build srcs/telegraf -t telegraf:rde-oliv

# Configure minikube
kubectl apply -f srcs --recursive
