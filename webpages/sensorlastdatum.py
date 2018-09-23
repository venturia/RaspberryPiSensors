#!/usr/bin/python
import os.path
import gviz_api
import datetime
import cgi
import cgitb

def lastlogfile(logtemplate):

   file="nofile"
   time=datetime.datetime.now()
   oneday=datetime.timedelta(days=1)
   yesterday = time-oneday

   while time.date()>=yesterday.date():
     filecandidate = "/home/pi/"+logtemplate+time.strftime("%Y-%m-%d")+".out"
     if os.path.isfile(filecandidate):
       file = filecandidate
       return file
     else:
       time = time-oneday
   return file

def lastsensordatum(filename,sensor,offset):

    datum=-999
    file=open(filename)
    line=file.readline()
    while len(line):
       splitline = line.split()
       if sensor in splitline:
          datum = float(splitline[splitline.index(sensor)+int(offset)])
       line=file.readline()
    file.close()

    return datum        

cgitb.enable()

form=cgi.FieldStorage()

logtemplate=form.getvalue("logtemplate")
sensor=form.getvalue("sensor")
offset=form.getvalue("offset")

lastfile=lastlogfile(logtemplate)

lastdatum=lastsensordatum(lastfile,sensor,offset)

print "Content-type: text/html\n\n"
print lastdatum
#print lastfile
