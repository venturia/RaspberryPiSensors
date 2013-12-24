#!/bin/bash
temperature=`cat /sys/class/thermal/thermal_zone0/temp | awk '{print $1/1000.0}'`
echo `date +"%Y-%m-%d %T"` "cpu" $temperature


