FROM node:8-alpine

ENV BUILD_PACKAGES="build-base autoconf automake git nasm zlib-dev"
RUN apk --no-cache add $BUILD_PACKAGES zlib && \
    npm install -g grunt-cli bower
COPY ./SimpleArmory /app
WORKDIR /app
RUN npm install && bower install --allow-root && \
    apk del $BUILD_PACKAGES

CMD ["grunt", "serve"]
