#!/usr/bin/python
import glob
import gviz_api
import datetime
import cgi
import cgitb

def logfilelist(logtemplatelist,starttime,endtime):

   filelists=[]
   for logtemplate in logtemplatelist:
      filelist=[]
      time=starttime
      oneday=datetime.timedelta(days=1)
      while time.date()<=endtime.date():
         filelist.extend(glob.glob("/home/pi/"+logtemplate+time.strftime("%Y-%m-%d")+".out"))
         time = time+oneday
      filelists.append(filelist)

   return filelists

def sensordatalist(filelists,starttime,endtime,sensorlist,offsetlist):

    datalist=[]
    for filelist,sensor,offset in zip(filelists,sensorlist,offsetlist):
       for filename in filelist:
          file=open(filename)
          line=file.readline()
          while len(line):
             splitline = line.split()
             timestampstring=splitline[0]+" "+splitline[1]
             timestamp = datetime.datetime.strptime(timestampstring[:19],"%Y-%m-%d %H:%M:%S")
             if timestamp>=starttime and timestamp<=endtime:
                if sensor in splitline:
                   datum = {"Timestamp":timestamp,sensor:float(splitline[splitline.index(sensor)+int(offset)])}
                   datalist.append(datum)
             line=file.readline()
          file.close()

    return datalist        

cgitb.enable()

form=cgi.FieldStorage()

tqxstring = form.getvalue("tqx")

logtemplatelist=form.getlist("logtemplate")
sensorlist=form.getlist("sensor")
offsetlist=form.getlist("offset")
labellist=form.getlist("label")
unitlist=form.getlist("unit")
starttime = datetime.datetime.strptime(form.getvalue("starttime"),"%Y-%m-%d %H:%M:%S")
endtime = datetime.datetime.strptime(form.getvalue("endtime"),"%Y-%m-%d %H:%M:%S")


filelist=logfilelist(logtemplatelist,starttime,endtime)

datalist=sensordatalist(filelist,starttime,endtime,sensorlist,offsetlist)

description = {"Timestamp":("datetime","Data")}
columnsorder=("Timestamp",)
for sensor,label,unit in zip(sensorlist,labellist,unitlist):
    description[sensor]=("number",label+" ("+unit+")")
    columnsorder+=(sensor,)

data_table=gviz_api.DataTable(description)
data_table.LoadData(datalist)

print "Content-type: text/plain"
print
#print logtemplatelist,starttime,endtime
#print filelist
#print datalist
#print description,columnsorder
print data_table.ToResponse(columns_order=columnsorder,order_by="Timestamp",tqx=tqxstring)

