#!/usr/bin/python

import cgi
import cgitb
import StringIO
import sensorlistdata

cgitb.enable()
form=cgi.FieldStorage()
sensorliststring = StringIO.StringIO()

nareas = int(form.getvalue("nareas"))

print "Content-type: text/xml\n\n"

print>>sensorliststring , "<AREAS>"
for id in range(nareas):
  checkedlist=[]
  for i in range(len(sensorlistdata.checkedbitlist)):
   checkedlist.append("")
   if 2**int(id) & sensorlistdata.checkedbitlist[i] == 2**int(id):
      checkedlist[i]="checked='checked'"
   else:
      checkedlist[i]=""
  print >>sensorliststring, "<AREA%d>" % id

  for i in range(len(sensorlistdata.sensornamelist)):
   tmpstring= "<input type='checkbox' id='sensor%d' "+checkedlist[i]+" value='"+sensorlistdata.valuelist[i]+"'>"+sensorlistdata.sensornamelist[i]+"</input>"
   print >>sensorliststring, tmpstring % i

  print >>sensorliststring, "</AREA%d>" % id 

print>>sensorliststring , "</AREAS>"
outstr = sensorliststring.getvalue()
print outstr.replace("&","&amp;")
   

