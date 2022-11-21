FROM debian:stable-slim

LABEL maintainer="jhx (jhx0x00@gmail.com)"

RUN \
    echo "[OK] Upgrading packages" && \
    apt update && \
    apt upgrade -y && \
    echo "[OK] Installing Apache/PHP" && \
    apt install -y \
    apache2 \
    libapache2-mod-php \
    php \
    php-curl && \
    echo "[OK] Cleaning webroot" && \
    rm -rf /var/www/html/* && \
    echo "[DONE] Container ready!"

COPY website/index.php website/style.css website/ip.php /var/www/html/
COPY conf/000-default.conf /etc/apache2/sites-enabled/
COPY conf/security.conf /etc/apache2/conf-available/
COPY conf/php.ini /etc/php/7.4/apache2/

EXPOSE 80

CMD apache2ctl -D FOREGROUND