#!/bin/bash

WEBDIR=/var/www

# copy the web pages in the web server subdirectory "temperature"

cp -v webpages/*.php ${WEBDIR}/temperature/.

# define the logical links of index.php and temperature_params.php

rm ${WEBDIR}/temperature/index.php
ln -s index_${1}.php ${WEBDIR}/temperature/index.php
rm ${WEBDIR}/temperature/temperature_params.php
ln -s temperature_${1}_params.php ${WEBDIR}/temperature/temperature_params.php

