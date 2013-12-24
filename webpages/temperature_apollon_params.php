<?php
$suffix="temperature";
$logfiletemplates=["/home/pi/log_bmp085_%04d-%02d-%02d.out","/home/pi/log_sht15_%04d-%02d-%02d.out"];
$dateindex=0;
$timeindex=1;
$addressindex=3;
$offset=array();
$offset["BMP085_temp"]=0;
$offset["SHT15_temp"]=0;
$addresses=["BMP085_temp","SHT15_temp"];
$labels=["Casa (C)","Test (C)"];
$tempindex=4;
$plottitle="'Temperatura'";
?>

