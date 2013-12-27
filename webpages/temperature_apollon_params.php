<?php
$suffix="temperature";
$logfiletemplates=["/home/pi/log_bmp085_%04d-%02d-%02d.out","/home/pi/log_sht15_%04d-%02d-%02d.out"];
$dateindex=array();
$dateindex["/home/pi/log_bmp085_%04d-%02d-%02d.out"]=0;
$dateindex["/home/pi/log_sht15_%04d-%02d-%02d.out"]=0;
$timeindex=array();
$timeindex["/home/pi/log_bmp085_%04d-%02d-%02d.out"]=1;
$timeindex["/home/pi/log_sht15_%04d-%02d-%02d.out"]=1;
$addressindex=array();
$addressindex["/home/pi/log_bmp085_%04d-%02d-%02d.out"]=3;
$addressindex["/home/pi/log_sht15_%04d-%02d-%02d.out"]=3;
$offset=array();
$offset["BMP085_temp"]=0;
$offset["SHT15_temp"]=0;
$addresses=["BMP085_temp","SHT15_temp"];
$labels=["Casa (C)","Test (C)"];
$tempindex=array();
$tempindex["/home/pi/log_bmp085_%04d-%02d-%02d.out"]=4;
$tempindex["/home/pi/log_sht15_%04d-%02d-%02d.out"]=4;
$plottitle="'Temperatura'";
?>

