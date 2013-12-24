<?php
  function print_chart_div($suffix,$plotwidth,$plotheight,$npastdays)  {

    echo '<div id="chart',${suffix},'_div" style="width:',$plotwidth,' height:',$plotheight,'"></div>';
    echo 'Numero di giorni <input type="number" value="',$npastdays,'" name="ndays',$suffix,'" size="3" min="0" max="99">';
    echo '<input type="submit" value="Invia"> ';

}
?>

<?php
  function load_chart_data_from_file($suffix,$logfiletemplates,$dateindex,$timeindex,$addressindex,$tempindex,$offset,$addresses,$labels,$plottitle,$plotwidth,$plotheight,&$npastdays) {

      echo 'google.setOnLoadCallback(drawChart',$suffix,');';

      echo 'function drawChart',$suffix,'() {';

      echo "var data",$suffix," = new google.visualization.DataTable();";
      echo "data",$suffix,".addColumn('datetime', 'time');";
      foreach($labels as $label) {echo "data$suffix.addColumn('number', '$label');";}
      echo "data",$suffix,".addRows([";

$npastdays=3;
if ($_GET["ndays${suffix}"] != "") {
   $npastdays=$_GET["ndays${suffix}"];
} 
$now=mktime();
for($i=$npastdays;$i>=0;$i--) {
   $then = $now - $i*86400;
   $daystring=getdate($then);
   foreach($logfiletemplates as $logfiletemplate) {
      $inputfile=sprintf($logfiletemplate,$daystring['year'],$daystring['mon'],$daystring['mday']);
      $readings = file($inputfile);
      foreach($readings as $line) {
         $temp_array=explode(" ",$line);
         $date=explode("-",$temp_array[$dateindex]);
         $year=$date[0];
         $month=$date[1]-1;
         $day=$date[2];
         $time=explode(":",$temp_array[$timeindex]);
         $address=$temp_array[$addressindex];
         if(array_search($address,$addresses,true)!==false) {
           echo "[new Date($year,$month,$day,$time[0],$time[1],0)";
           foreach($addresses as $theaddress) {
             if($address==$theaddress) { echo ",$temp_array[$tempindex]+$offset[$theaddress]"; }
             else { echo ",null"; }
           }
           echo "],";
         }
      }
   }
}
 echo "]);";

      echo "var options",$suffix," = {'title':",$plottitle,",";
      echo "         'width':",$plotwidth,",";
      echo "         'height':",$plotheight,",";
      echo "         'hAxis':{'format':'HH.mm dd/MM'},";
      echo "         'lineWidth':0,";
      echo "         'pointSize':0.01};";

      echo "var chart",$suffix," = new google.visualization.ScatterChart(document.getElementById('chart",$suffix,"_div'));";
      echo "chart",$suffix,".draw(data",$suffix,", options",$suffix,");";
      echo "}";

}
?>

