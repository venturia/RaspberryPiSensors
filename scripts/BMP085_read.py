#!/usr/bin/python

import time
import datetime
import sys
sys.path.append('Adafruit-Raspberry-Pi-Python-Code/Adafruit_BMP085')

from Adafruit_BMP085 import BMP085

# ===========================================================================
# Example Code
# ===========================================================================

# Initialise the BMP085 and use STANDARD mode (default value)
# bmp = BMP085(0x77, debug=True)
bmp = BMP085(0x77)

# To specify a different operating mode, uncomment one of the following:
# bmp = BMP085(0x77, 0)  # ULTRALOWPOWER Mode
# bmp = BMP085(0x77, 1)  # STANDARD Mode
# bmp = BMP085(0x77, 2)  # HIRES Mode
# bmp = BMP085(0x77, 3)  # ULTRAHIRES Mode

temp = bmp.readTemperature()

# Read the current barometric pressure level
pressure = bmp.readPressure()

# To calculate altitude based on an estimated mean sea level pressure
# (1013.25 hPa) call the function as follows, but this won't be very accurate
#altitude = bmp.readAltitude()

# To specify a more accurate altitude, enter the correct mean sea level
# pressure level.  For example, if the current pressure level is 1023.50 hPa
# enter 102350 since we include two decimal places in the integer value
# altitude = bmp.readAltitude(102350)

#print datetime.datetime.now(), " BMP085_temp %.2f C" % temp
#print datetime.datetime.now(), " BMP085_press %.2f hPa" % (pressure / 100.0)

#new python format syntax
print datetime.datetime.now(), " BMP085_temp {:.2f} C".format(temp)
print datetime.datetime.now(), " BMP085_press {:.2f} hPa".format(pressure / 100.0)
