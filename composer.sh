#!/bin/bash
docker run --rm -it   -v $(pwd):/usr/src/app   -v ~/.composer:/home/composer/.composer   -v ~/.ssh/id_rsa:/home/composer/.ssh/id_rsa:ro   graze/composer
source ~/.bashrc
