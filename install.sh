#!/bin/bash

WEBDIR=/var/www/html
CGIDIR=/usr/lib/cgi-bin

read -p "web server file directory [$WEBDIR]" chosenwebdir

if [ ${#chosenwebdir} != 0 ]; then
  WEBDIR=$chosenwebdir
fi

echo "Web page file directory $WEBDIR"
echo "Web script file directory $CGIDIR"

# copy the web pages in the web server subdirectory "temperature"

if [ ! -d "${WEBDIR}/temperature" ]
then
  echo "creating ${WEBDIR}/temperature directory"
  mkdir ${WEBDIR}/temperature
fi
if [ ! -d "${CGIDIR}/temperature" ]
then
  echo "creating ${CGIDIR}/temperature directory"
  mkdir ${CGIDIR}/temperature
fi

echo "copying php scripts"
cp -v webpages/*.php ${WEBDIR}/temperature/.
echo "copying html files"
cp -v webpages/*.html ${WEBDIR}/temperature/.
echo "copying py files"
cp -v webpages/*.py ${CGIDIR}/temperature/.
chmod -v +x ${CGIDIR}/temperature/*.py

# define the logical links of index.php, index.html and temperature_params.php pressure_params.php humidity_params.php

if [ -e "${WEBDIR}/temperature/index_${1}.php" ]
then
  echo "creating logical link index.php to index_${1}.php"
  if [ -e "${WEBDIR}/temperature/index.php" ]
  then
    rm -v ${WEBDIR}/temperature/index.php
  fi
  if [ -e "${WEBDIR}/temperature/index.html" ]
  then
    rm -v ${WEBDIR}/temperature/index.html
  fi
  ln -v -s index_${1}.php ${WEBDIR}/temperature/index.php
elif [ -e "${CGIDIR}/temperature/sensorlistdata_${1}.py" ]
then
  echo "creating logical link index.html to display_sensordata.html"
  if [ -e "${WEBDIR}/temperature/index.php" ]
  then
    rm -v ${WEBDIR}/temperature/index.php
  fi
  if [ -e "${WEBDIR}/temperature/index.html" ]
  then
    rm -v ${WEBDIR}/temperature/index.html
  fi
  ln -v -s display_sensordata.html ${WEBDIR}/temperature/index.html
fi

if [ -e "${WEBDIR}/temperature/framed_${1}.html" ]
then
  echo "creating logical link framed.html to framed_${1}.html"
  if [ -e "${WEBDIR}/temperature/framed.html" ]
  then
    rm -v ${WEBDIR}/temperature/framed.html
  fi
  ln -v -s framed_${1}.html ${WEBDIR}/temperature/framed.html
fi

if [ -e "${WEBDIR}/temperature/temperature_${1}_params.php" ]
then
  echo "creating logical link temperature_params.php to temperature_${1}_params.php"
  if [ -e "${WEBDIR}/temperature/temperature_params.php" ] 
  then
    rm -v ${WEBDIR}/temperature/temperature_params.php
  fi 
  ln -v -s temperature_${1}_params.php ${WEBDIR}/temperature/temperature_params.php
fi

if [ -e "${WEBDIR}/temperature/pressure_${1}_params.php" ]
then
  echo "creating logical link pressure_params.php to pressure_${1}_params.php"
  if [ -e "${WEBDIR}/temperature/pressure_params.php" ] 
  then
    rm -v ${WEBDIR}/temperature/pressure_params.php
  fi 
  ln -v -s pressure_${1}_params.php ${WEBDIR}/temperature/pressure_params.php
fi

if [ -e "${WEBDIR}/temperature/humidity_${1}_params.php" ]
then
  echo "creating logical link humidity_params.php to humidity_${1}_params.php"
  if [ -e "${WEBDIR}/temperature/humidity_params.php" ] 
  then
    rm -v ${WEBDIR}/temperature/humidity_params.php
  fi 
  ln -v -s humidity_${1}_params.php ${WEBDIR}/temperature/humidity_params.php
fi

if [ -e "${CGIDIR}/temperature/sensorlistdata_${1}.py" ]
then
  echo "creating logical link sensorlistdata.py to sensorlistdata_${1}.py"
  if [ -e "${CGIDIR}/temperature/sensorlistdata.py" ] 
  then
    rm -v ${CGIDIR}/temperature/sensorlistdata.py
  fi 
  ln -v -s sensorlistdata_${1}.py ${CGIDIR}/temperature/sensorlistdata.py
fi
