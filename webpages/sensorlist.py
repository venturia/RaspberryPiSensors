#!/usr/bin/python

import cgi
import cgitb
import StringIO

cgitb.enable()
form=cgi.FieldStorage()
sensorliststring = StringIO.StringIO()

id = form.getvalue("id")

print "Content-type: text/html\n\n"

sensornamelist=["DS1621 sgabuzzino","Temperatura sgabuzzino","Corrente"]
valuelist=["logtemplate=log_termometro_&sensor=0x4d&label=DS1621 sgabuzzino&unit=C&offset=3","logtemplate=log_DS18b20_&sensor=28-000005958097&label=temperatura sgabuzzino&unit=C&offset=1","logtemplate=log_sct13_&sensor=SCT13_curreff&label=Corrente&unit=A&offset=1"]
checkedlist=["","",""]
if id == "0":
  checkedlist[0]="checked"
  checkedlist[1]="checked"
else:
  checkedlist[2]="checked"

for i in range(len(sensornamelist)):
   tmpstring= "<input type='checkbox' id='sensor%d' "+checkedlist[i]+" value='"+valuelist[i]+"'>"+sensornamelist[i]+"</input>"
   print >>sensorliststring, tmpstring % i

print sensorliststring.getvalue()
   

