#!/bin/bash

IMAGE=$(docker build -q .)
php patch.php
echo "http://localhost:9001/#/eu/galakrond/этке"
if [ -d "$PWD/SimpleArmory/node_modules/.bin" ]; then # SA deps installed, no need to npm/bower install, just build it
    docker run -it --rm -v $PWD/SimpleArmory:/app -w /app -p 9001:9001 $IMAGE /bin/sh -c "grunt serve"
else
    docker run -it --rm -v $PWD/SimpleArmory:/app -w /app -p 9001:9001 $IMAGE /bin/sh -c "npm install; bower install --allow-root; grunt serve"
fi
