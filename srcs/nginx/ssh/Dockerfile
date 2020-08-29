FROM alpine:3.12.0

#Install packages
RUN apk update && apk add openssh

#SSH
RUN ssh-keygen -A
COPY ./id_rsa.pub /root/.ssh/authorized_keys
RUN passwd -d root

#Start
CMD ["/usr/sbin/sshd","-D"]
