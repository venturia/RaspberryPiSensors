<?php
$suffix="humidity";
$logfiletemplates=["/home/pi/log_bme280_%04d-%02d-%02d.out"];
$addresses=["BME280_rh"];
$dateindex=array();
$dateindex["/home/pi/log_bme280_%04d-%02d-%02d.out"]=0;
$timeindex=array();
$timeindex["/home/pi/log_bme280_%04d-%02d-%02d.out"]=1;
$addressindex=array();
$addressindex["/home/pi/log_bme280_%04d-%02d-%02d.out"]=3;
$offset=array();
$offset["BME280_rh"]=0;
$labels=["Ingresso (%)"];
$tempindex=array();
$tempindex["/home/pi/log_bme280_%04d-%02d-%02d.out"]=4;
$plottitle="'Umidita` relativa'";
?>

