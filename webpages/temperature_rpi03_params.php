<?php
$suffix="temperature";
$logfiletemplates=["/home/pi/log_termometro_%04d-%02d-%02d.out","/home/pi/log_termometro_%04d-%02d-%02d.out","/home/pi/log_DS18b20_%04d-%02d-%02d.out"];
$dateindex=array();
$dateindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=0;
$dateindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=0;
$timeindex=array();
$timeindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=1;
$timeindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=1;
$addressindex=array();
$addressindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=6;
$addressindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=2;
$offset=array();
$offset["0x4d"]=0;
$offset["0x4b"]=0;
$offset["28-000005380077"]=0;
$addresses=["0x4d","0x4b","28-000005380077"];
$labels=["Test new DS1621 (C)","Test DS1621 (C)","DS18b20 Acquario (C)"];
$tempindex=array();
$tempindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=11;
$tempindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=3;
$plottitle="'Temperatura'";
?>

