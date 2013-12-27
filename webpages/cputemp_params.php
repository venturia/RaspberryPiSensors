<?php
$suffix="cputemp";
$logfiletemplates=["/home/pi/log_cputemperature_%04d-%02d-%02d.out"];
$dateindex=array();
$dateindex["/home/pi/log_cputemperature_%04d-%02d-%02d.out"]=0;
$timeindex=array();
$timeindex["/home/pi/log_cputemperature_%04d-%02d-%02d.out"]=1;
$addressindex=array();
$addressindex["/home/pi/log_cputemperature_%04d-%02d-%02d.out"]=2;
$addresses=["cpu"];
$offset=array();
$offset["cpu"]=0;
$labels=["CPU (C)"];
$tempindex=array();
$tempindex["/home/pi/log_cputemperature_%04d-%02d-%02d.out"]=3;
$plottitle="'Temperatura'";
?>

