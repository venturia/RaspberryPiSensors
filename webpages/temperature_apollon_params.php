<?php
$suffix="temperature";
$logfiletemplates=["/home/pi/log_bmp085_%04d-%02d-%02d.out","/home/pi/log_sht15_%04d-%02d-%02d.out","/home/pi/log_termometro_%04d-%02d-%02d.out","/home/pi/log_DS18b20_%04d-%02d-%02d.out","/home/pi/log_DS18b20_%04d-%02d-%02d.out"];
$dateindex=array();
$dateindex["/home/pi/log_bmp085_%04d-%02d-%02d.out"]=0;
$dateindex["/home/pi/log_sht15_%04d-%02d-%02d.out"]=0;
$dateindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=0;
$dateindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=0;
$timeindex=array();
$timeindex["/home/pi/log_bmp085_%04d-%02d-%02d.out"]=1;
$timeindex["/home/pi/log_sht15_%04d-%02d-%02d.out"]=1;
$timeindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=1;
$timeindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=1;
$addressindex=array();
$addressindex["/home/pi/log_bmp085_%04d-%02d-%02d.out"]=3;
$addressindex["/home/pi/log_sht15_%04d-%02d-%02d.out"]=3;
$addressindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=6;
$addressindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=2;
$offset=array();
$offset["BMP085_temp"]=0;
$offset["SHT15_temp"]=0;
$offset["0x4d"]=0;
$offset["28-00000596c262"]=0;
$offset["28-00000596d046"]=0;
$offset["28-80000003a98d"]=0;
$addresses=["BMP085_temp","SHT15_temp","0x4d","28-00000596c262","28-00000596d046","28-80000003a98d"];
$labels=["Casa (C)","Test (C)","Test DS1621 (C)","Test Piano camere (C)","Sottoscala (C)","DS18B20 waterproof (C)"];
$tempindex=array();
$tempindex["/home/pi/log_bmp085_%04d-%02d-%02d.out"]=4;
$tempindex["/home/pi/log_sht15_%04d-%02d-%02d.out"]=4;
$tempindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=11;
$tempindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=3;
$plottitle="'Temperatura'";
?>

