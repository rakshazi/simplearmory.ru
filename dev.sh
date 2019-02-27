#!/bin/bash

IMAGE=$(docker build -q .) #Build node.js image
cd SimpleArmory; git reset --hard -q; cd .. #Remove patched data (if any) to allow fixes on existing translations
php patch.php # Translate!
echo "http://localhost:9001/#/eu/galakrond/этке" # Just a link to test
if [ -d "$PWD/SimpleArmory/node_modules/.bin" ]; then # SA deps installed, no need to npm/bower install, just build it
    docker run -it --rm -v $PWD/SimpleArmory:/app -w /app -p 9001:9001 $IMAGE /bin/sh -c "grunt serve"
else
    docker run -it --rm -v $PWD/SimpleArmory:/app -w /app -p 9001:9001 $IMAGE /bin/sh -c "npm install; bower install --allow-root; grunt serve"
fi
