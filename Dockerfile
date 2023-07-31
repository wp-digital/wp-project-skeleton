#FROM node:16-alpine AS node
#
#RUN apk add --no-cache --virtual .gyp \
#    autoconf \
#    automake \
#    bash \
#    g++ \
#    libc6-compat \
#    libjpeg-turbo-dev \
#    libpng-dev \
#    make \
#    libtool \
#    nasm
#
#WORKDIR /usr/src/html/public/wp-content/themes/<PUT YOUR THEME NAME HERE>/
#
#COPY ./public/wp-content/themes/<PUT YOUR THEME NAME HERE>/ ./
#
#RUN npm i \
#    && npm run build \
#    && apk del .gyp

FROM ghcr.io/wp-digital/docker-php/php-8.2-newrelic-10.7.0.319:latest

ARG NEWRELIC_LICENSE
ARG COMPOSER_TOKEN
ARG METABOX_API_KEY
ARG YOAST_TOKEN

ENV NEWRELIC_LICENSE=$NEWRELIC_LICENSE

RUN if [ -n "${COMPOSER_TOKEN}" ]; then composer config -g github-oauth.github.com ${COMPOSER_TOKEN}; fi
RUN if [ -n "${METABOX_API_KEY}" ]; then composer config -g repositories.metabox\.io composer "https://packages.metabox.io/${METABOX_API_KEY}"; fi
RUN if [ -n "${YOAST_TOKEN}" ]; then composer config -g http-basic.my.yoast.com token "${YOAST_TOKEN}"; fi

WORKDIR /usr/src/html

COPY . ./

RUN composer install -o -n --no-dev

#COPY --from=node /usr/src/html/public/wp-content/themes/<PUT YOUR THEME NAME HERE>/assets/build/ ./public/wp-content/themes/<PUT YOUR THEME NAME HERE>/assets/build/

RUN echo "" > ./.env

RUN chmod +x /usr/local/bin/docker-entrypoint.sh
RUN chmod +x ./bin/run-wp-cron
RUN chown -R www-data:www-data ./
