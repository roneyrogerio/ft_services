#!/bin/sh
vsftpd /etc/vsftpd/vsftpd.conf &
while kill -0 $! 2> /dev/null; do sleep 1; done;
