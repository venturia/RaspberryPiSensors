#!/usr/bin/python

import time
import datetime
import sys

from sht1x.Sht1x import Sht1x as SHT1x

dataPin = 11
clkPin = 7
sht1x = SHT1x(dataPin, clkPin, SHT1x.GPIO_BOARD)
    
temperature = sht1x.read_temperature_C()
humidity = sht1x.read_humidity()
dewPoint = sht1x.calculate_dew_point(temperature, humidity)
    
print datetime.datetime.now(), " SHT15_temp {:.2f} C".format(temperature)
print datetime.datetime.now(), " SHT15_rh {:.2f} %".format(humidity)
print datetime.datetime.now(), " SHT15_dp {:.2f} C".format(dewPoint)
