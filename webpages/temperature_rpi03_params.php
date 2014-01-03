<?php
$suffix="temperature";
$logfiletemplates=["/home/pi/log_termometro_%04d-%02d-%02d.out"];
$dateindex=array();
$dateindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=0;
$timeindex=array();
$timeindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=1;
$addressindex=array();
$addressindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=6;
$offset=array();
$offset["0x4d"]=0;
$addresses=["0x4d"];
$labels=["Test new DS1621 (C)"];
$tempindex=array();
$tempindex["/home/pi/log_termometro_%04d-%02d-%02d.out"]=11;
$plottitle="'Temperatura'";
?>

