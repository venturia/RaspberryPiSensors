nareas = 4
sensornamelist=["Temperatura casa","Temperatura piano camere","Temperatura sottoscala",
                "Pressione casa",
                "Velocita ADSL",
                "Temperatura CPU"]
valuelist=["logtemplate=log_bmp085_&sensor=BMP085_temp&label=casa&unit=C&offset=1",
           "logtemplate=log_DS18b20_&sensor=28-00000596c262&label=Piano camere&unit=C&offset=1",
           "logtemplate=log_DS18b20_&sensor=28-00000596d046&label=Sottoscala&unit=C&offset=1",
           "logtemplate=log_bmp085_&sensor=BMP085_press&label=Casa&unit=hPa&offset=1",
           "logtemplate=log_speedtest_&sensor=Download:&label=Velocita ADSL&unit=Mbps&offset=1",
           "logtemplate=log_cputemperature_&sensor=cpu&label=Temperatura CPU&unit=C&offset=1"]
checkedbitlist=[1,1,1,2,4,8]


