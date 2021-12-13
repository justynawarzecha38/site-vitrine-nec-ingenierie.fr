#!/bin/bash

PHP_EXEC=/opt/plesk/php/7.3/bin/php

echo "Vidage du cache "
$PHP_EXEC artisan cache:clear
$PHP_EXEC artisan config:clear
$PHP_EXEC artisan view:cache

echo "Fin de l'update cache"
