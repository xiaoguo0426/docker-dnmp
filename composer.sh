#!/bin/bash
docker run -it --interactive  -v $(pwd):/app -u $(id -u):$(id -g) -v ~/.composer:/home/composer/.composer  -v /home/dnmp/composer:/tmp/vendor/bin   -v ~/.ssh/id_rsa:/home/composer/.ssh/id_rsa:ro   composer/composer $@
