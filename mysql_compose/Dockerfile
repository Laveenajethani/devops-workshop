FROM centos
MAINTAINER laveena.j.21@gmail.com
run yum install httpd -y
copy app  /var/www/html/app
expose 80
ENTRYPOINT httpd -DFOREGROUND
