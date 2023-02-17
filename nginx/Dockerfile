FROM nginx:1.20.2

COPY conf/next.conf /etc/nginx/conf.d/
COPY conf/upstream.conf /etc/nginx/conf.d/

RUN usermod -u 1000 www-data

CMD ["nginx", "-g", "daemon off;"]

EXPOSE 80 443
