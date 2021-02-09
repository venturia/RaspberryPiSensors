<?php
$suffix="temperature";
$logfiletemplates=["/home/pi/log_DS18b20_%04d-%02d-%02d.out","/home/pi/log_DS18b20_%04d-%02d-%02d.out","/home/pi/log_DS18b20_%04d-%02d-%02d.out","/home/pi/log_DS18b20_%04d-%02d-%02d.out","/home/pi/log_bme280_%04d-%02d-%02d.out"];
$dateindex=array();
$dateindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=0;
$dateindex["/home/pi/log_bme280_%04d-%02d-%02d.out"]=0;
$timeindex=array();
$timeindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=1;
$timeindex["/home/pi/log_bme280_%04d-%02d-%02d.out"]=1;
$addressindex=array();
$addressindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=2;
$addressindex["/home/pi/log_bme280_%04d-%02d-%02d.out"]=3;
$offset=array();
$offset["28-000005959090"]=0;
$offset["28-0000059553da"]=0;
$offset["28-00000595887c"]=0;
$offset["28-80000003a017"]=0;
$offset["BME280_temp"]=0;
$addresses=["28-000005959090","28-0000059553da","28-00000595887c","28-80000003a017","BME280_temp"];
$labels=["Ingresso (C)","DS18B20 test 1 (C)","DS18B20 test 2 (C)","DS18B20 sigillato (C)","BME280 (C)"];
$tempindex=array();
$tempindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=3;
$tempindex["/home/pi/log_bme280_%04d-%02d-%02d.out"]=4;
$plottitle="'Temperatura'";
?>

