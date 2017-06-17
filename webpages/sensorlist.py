#!/usr/bin/python

import cgi
import cgitb
import StringIO
import sensorlistdata

cgitb.enable()
form=cgi.FieldStorage()
sensorliststring = StringIO.StringIO()

id = form.getvalue("id")

print "Content-type: text/html\n\n"

checkedlist=[]
for i in range(len(sensorlistdata.checkedbitlist)):
   checkedlist.append("")
   if 2**int(id) & sensorlistdata.checkedbitlist[i] == 2**int(id):
      checkedlist[i]="checked"
   else:
      checkedlist[i]=""

for i in range(len(sensorlistdata.sensornamelist)):
   tmpstring= "<input type='checkbox' id='sensor%d' "+checkedlist[i]+" value='"+sensorlistdata.valuelist[i]+"'>"+sensorlistdata.sensornamelist[i]+"</input>"
   print >>sensorliststring, tmpstring % i

print sensorliststring.getvalue()
   

