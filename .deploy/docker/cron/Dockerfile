FROM php:7.4-fpm

WORKDIR /app

RUN apt-get update && apt-get install -y

RUN apt install npm -y
RUN npm install --global gulp-cli

RUN apt-get install -y zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev

ENV SUPERCRONIC_URL=https://github.com/aptible/supercronic/releases/download/v0.1.11/supercronic-linux-amd64 \
    SUPERCRONIC=supercronic-linux-amd64 \
    SUPERCRONIC_SHA1SUM=a2e2d47078a8dafc5949491e5ea7267cc721d67c

RUN curl -fsSLO "$SUPERCRONIC_URL" \
 && echo "${SUPERCRONIC_SHA1SUM}  ${SUPERCRONIC}" | sha1sum -c - \
 && chmod +x "$SUPERCRONIC" \
 && mv "$SUPERCRONIC" "/usr/local/bin/${SUPERCRONIC}" \
 && ln -s "/usr/local/bin/${SUPERCRONIC}" /usr/local/bin/supercronic

COPY .cron /etc/crontab

RUN apt-get install -y libxml2-dev

# pdo_mysql
RUN apt-get install -y \
      libpq-dev && \
    docker-php-ext-install -j$(nproc) \
      pdo_mysql

COPY .deploy/docker/cron/entrypoint.sh /entrypoint-component.sh

EXPOSE 9000

CMD ["/entrypoint-component.sh"]