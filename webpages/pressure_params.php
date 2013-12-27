<?php
$suffix="pressure";
$logfiletemplates=["/home/pi/log_bmp085_%04d-%02d-%02d.out","/home/pi/log_airport_%04d-%02d-%02d.out"];
$addresses=["BMP085_press","Airport_press"];
$dateindex=array();
$dateindex["/home/pi/log_bmp085_%04d-%02d-%02d.out"]=0;
$dateindex["/home/pi/log_airport_%04d-%02d-%02d.out"]=0;
$timeindex=array();
$timeindex["/home/pi/log_bmp085_%04d-%02d-%02d.out"]=1;
$timeindex["/home/pi/log_airport_%04d-%02d-%02d.out"]=1;
$addressindex=array();
$addressindex["/home/pi/log_bmp085_%04d-%02d-%02d.out"]=3;
$addressindex["/home/pi/log_airport_%04d-%02d-%02d.out"]=3;
$offset=array();
$offset["BMP085_press"]=0;
$offset["Airport_press"]=-50.4;;
$labels=["Casa (hPa)","Aeroporto (hPa)"];
$tempindex=array();
$tempindex["/home/pi/log_bmp085_%04d-%02d-%02d.out"]=4;
$tempindex["/home/pi/log_airport_%04d-%02d-%02d.out"]=4;
$plottitle="'Pressione'";
?>

