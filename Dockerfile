FROM node:8-alpine

ENV BUILD_PACKAGES="build-base autoconf automake git nasm zlib-dev"
RUN apk --no-cache add $BUILD_PACKAGES zlib && \
    npm install -g grunt-cli bower
