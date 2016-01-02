<?php
$suffix="temperature";
$logfiletemplates=["/home/pi/log_DS18b20_%04d-%02d-%02d.out","/home/pi/log_DS18b20_%04d-%02d-%02d.out"];
$dateindex=array();
$dateindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=0;
$timeindex=array();
$timeindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=1;
$addressindex=array();
$addressindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=2;
$offset=array();
$offset["28-000005380077"]=0;
$offset["28-000005959090"]=0;
$addresses=["28-000005380077","28-000005959090"];
$labels=["DS18b20 waterproof (C)","Ingresso (C)"];
$tempindex=array();
$tempindex["/home/pi/log_DS18b20_%04d-%02d-%02d.out"]=3;
$plottitle="'Temperatura'";
?>

