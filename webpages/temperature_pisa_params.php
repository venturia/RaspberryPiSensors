<?php
$suffix="temperature";
$logfiletemplates=["/home/pi/log_termometro_%04d-%02d-%02d.out","/home/pi/log_termometro_%04d-%02d-%02d.out"];
$dateindex=0;
$timeindex=1;
$addressindex=6;
$offset=array();
$offset["0x4f"]=0;
$offset["0x4b"]=0;
$addresses=["0x4f","0x4b"];
$labels=["Libreria (C)","Test (C)"];
$tempindex=11;
$plottitle="'Temperatura'";
?>

