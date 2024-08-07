ARG ALPINE_VERSION=3.20.2

FROM alpine:${ALPINE_VERSION}

RUN apk --no-cache --update add \
    tzdata openssl unzip nginx bash ca-certificates s6 curl ssmtp mailx php83 php83-phar php83-curl \
    php83-fpm php83-json php83-zlib php83-xml php83-dom php83-ctype php83-opcache php83-zip php83-iconv \
    php83-pdo php83-pdo_mysql php83-pdo_sqlite php83-pdo_pgsql php83-mbstring php83-session php83-bcmath \
    php83-gd php83-openssl php83-sockets php83-posix php83-ldap php83-simplexml && \
    rm -rf /var/www/localhost && \
    rm -f /etc/php83/php-fpm.d/www.conf && \
    ln -sf /usr/bin/php83 /usr/bin/php

ADD docker/ /    

USER nginx

ADD https://github.com/kanboard/kanboard/archive/refs/tags/v1.2.38.tar.gz /var/www/app
RUN cd /var/www/app && tar xzvf v1.2.38.tar.gz && rm -f v1.2.38.tar.gz

WORKDIR /usr/local/bin/

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD []


