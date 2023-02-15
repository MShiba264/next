FROM nginx:1.20.2

COPY conf/nginx.conf /etc/nginx/
COPY conf/backend.conf /etc/nginx/conf.d/
COPY conf/frontend.conf /etc/nginx/conf.d/
COPY conf/upstream.conf /etc/nginx/conf.d/

RUN usermod -u 1000 www-data

CMD ["nginx"]

EXPOSE 80 443
