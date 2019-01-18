FROM nginx:stable as base

WORKDIR /var/www

################################################################################

FROM base as devel

COPY devel/nginx/certs /etc/nginx/ssl
COPY devel/nginx/nginx.conf /etc/nginx/nginx.conf
COPY devel/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf