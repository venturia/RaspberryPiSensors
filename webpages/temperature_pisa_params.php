<?php
$suffix="temperature";
$logfiletemplates=["/home/pi/log_termometro_%04d-%02d-%02d.out","/home/pi/log_termometro_%04d-%02d-%02d.out","/home/pi/log_sht15_%04d-%02d-%02d.out"];
$dateindex=array();
$dateindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=0;
$dateindex["/home/pi/log_sht15_%04d-%02d-%02d.out"]=0;
$timeindex=array();
$timeindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=1;
$timeindex["/home/pi/log_sht15_%04d-%02d-%02d.out"]=1;
$addressindex=array();
$addressindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=6;
$addressindex["/home/pi/log_sht15_%04d-%02d-%02d.out"]=3;
$offset=array();
$offset["0x4f"]=0.3;
$offset["0x4b"]=0;
$offset["SHT15_temp"]=0;
$addresses=["0x4f","0x4b","SHT15_temp"];
$labels=["Libreria (C)","Test DS1621 (C)","Test SHT15 (C)"];
$tempindex=array();
$tempindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=11;
$tempindex["/home/pi/log_sht15_%04d-%02d-%02d.out"]=4;
$plottitle="'Temperatura'";
?>

