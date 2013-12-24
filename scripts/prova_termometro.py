#! /usr/bin/python

# set return values to temperatures
# connect the termostat bit to an input port
# change log file every day

import smbus
import sys
import getopt
import time 
import datetime
bus = smbus.SMBus(1)  # bus 1 rev2

address = 0x4b # I2C address of DS1621


# Handle the command line arguments
def decodetemp(address,command):
   datablock = bus.read_i2c_block_data(address,command)
   temp = datablock[0]+0.5*datablock[1]/128
   return temp

def printtemp(address):
   bus.write_byte(address,0xee) # start temperature conversion 
   config = bus.read_byte_data(address,0xac)
   while (config >> 7 == 0):
      time.sleep(0.5)
      config = bus.read_byte_data(address,0xac)

   temp = decodetemp(address,0xaa)
   datatemp = bus.read_byte_data(address,0xaa)
   counter = bus.read_byte_data(address,0xa8)
   slope = bus.read_byte_data(address,0xa9)
   temp2 = datatemp-0.25+1.*(slope-counter)/slope
   print datetime.datetime.now(), " Indirizzo I2C ", hex(address), " Temperatura ",temp, temp2, " C"
   
def printconfig(address):
   config = bus.read_byte_data(address,0xac)
   tl = decodetemp(address,0xa2)
   th = decodetemp(address,0xa1)
   print datetime.datetime.now(), "Indirizzo I2C ", hex(address), "config ",hex(config), "Thigh ", th, "Tlow ", tl

def settlimit(address,cmd,mask,tlimit):
   itlimit =int(tlimit*256)
   tblock = [itlimit >> 8, itlimit % (( itlimit >> 8) << 8) ]
#   tblock = range(2)
#   tblock[0] = itlimit >> 8
#   tblock[1] = itlimit %( tblock[0] << 8)	
#   print hex(tblock[0]), hex(tblock[1])
   bus.write_i2c_block_data(address,cmd,tblock)
   config = bus.read_byte_data(address,0xac)
   newconfig = config & mask
   bus.write_byte_data(address,0xac,newconfig)
   rtlimit = decodetemp(address,cmd)
   rconfig = bus.read_byte_data(address,0xac)
   print datetime.datetime.now(), "Indirizzo I2C ", hex(address), "New Tlimit ", tlimit, hex(itlimit), rtlimit, " config ", hex(rconfig), hex(config)

def setthigh(address,th):
   settlimit(address,0xa1,0xbf,th)	

def settlow(address,tl):
   settlimit(address,0xa2,0xdf,tl)

def main(argv):
   try:
      opts, args = getopt.getopt(argv,"a:c",["address=","thigh=","tlow="])
   except getopt.GetoptError:
      print 'prova_termometro.py -a <i2caddress> [-c] [--thigh=value] [--thigh=value]'
      sys.exit(2)

   wantconfig=0
   wantsetthigh=0
   thigh=15
   wantsettlow=0
   tlow=10
   
   for opt, arg in opts:
       if opt =='-c':
          wantconfig=1
       if opt =='--thigh':
          wantsetthigh=1
          thigh=float(arg)
       if opt =='--tlow':
          wantsettlow=1
          tlow=float(arg)

   for opt, arg in opts:
       if opt in ('-a',"--address"):
	   address = int(arg,16)
           printtemp(address)
           if wantconfig==1:
             printconfig(address)
	   if wantsetthigh==1:
             setthigh(address,thigh)
	   if wantsettlow==1:
             settlow(address,tlow)
  
if __name__ == "__main__":
   main(sys.argv[1:])
