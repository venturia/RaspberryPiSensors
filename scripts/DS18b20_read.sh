#!/bin/bash

timestamp=`date +"%Y-%m-%d %T"`
if [ -d "/sys/bus/w1/devices" ]; then
 for term in /sys/bus/w1/devices/28-*
 do
#   echo $term
   termid=${term/\/sys\/bus\/w1\/devices\//} 
   if [ -f "$term/w1_slave" ]; then
     result=`cat $term/w1_slave`
#     echo $result
     if [[ "$result" == *"YES"* ]]; then
#       echo "good reading"
       temp=`echo ${result/*t=/} | awk '{print $1/1000.}'`
       echo $timestamp $termid $temp "C"
     fi
   fi
 done
fi


