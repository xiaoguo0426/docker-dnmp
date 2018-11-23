#!/bin/bash
docker run -it --rm  -v $(pwd):/usr/src/myapp -w /usr/src/myapp --name php-cli php:7.2-cli php $@
