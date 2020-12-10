#!/bin/bash

supercronic /etc/crontab & php-fpm -O -F

php-fpm -O -F