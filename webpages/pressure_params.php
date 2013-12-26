<?php
$suffix="pressure";
$logfiletemplates=["/home/pi/log_bmp085_%04d-%02d-%02d.out","/home/pi/log_airport_%04d-%02d-%02d.out"];
$addresses=["BMP085_press","Airport_press"];
$dateindex=0;
$timeindex=1;
$addressindex=3;
$offset=array();
$offset["BMP085_press"]=0;
$offset["Airport_press"]=-50.4;;
$labels=["Casa (hPa)","Aeroporto (hPa)"];
$tempindex=4;
$plottitle="'Pressione'";
?>

