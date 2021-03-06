<?php
include 'chart_functions.php';
?>

<html>
  <meta name = "viewport" content = "width = device-width">
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

//         document.write("Hello");

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
//      google.setOnLoadCallback(drawChart);

<?php
$phpfilename="index.php";
$plotwidth=700;
$plotheight=400;
?>

<?php
require('temperature_params.php');
load_chart_data_from_file($suffix,$logfiletemplates,$dateindex,$timeindex,$addressindex,$tempindex,$offset,$addresses,$labels,$plottitle,$plotwidth,$plotheight,$npastdays[$suffix]);

require('pressure_params.php');
load_chart_data_from_file($suffix,$logfiletemplates,$dateindex,$timeindex,$addressindex,$tempindex,$offset,$addresses,$labels,$plottitle,$plotwidth,$plotheight,$npastdays[$suffix]);

require('humidity_params.php');
load_chart_data_from_file($suffix,$logfiletemplates,$dateindex,$timeindex,$addressindex,$tempindex,$offset,$addresses,$labels,$plottitle,$plotwidth,$plotheight,$npastdays[$suffix]);

require('current_params.php');
load_chart_data_from_file($suffix,$logfiletemplates,$dateindex,$timeindex,$addressindex,$tempindex,$offset,$addresses,$labels,$plottitle,$plotwidth,$plotheight,$npastdays[$suffix]);

?>

    </script>
  </head>

  <body>

    <form action="<?php echo $phpfilename?>" method="get">

    <?php print_chart_div("temperature",$plotwidth,$plotheight,$npastdays['temperature']); ?>
    <?php print_chart_div("pressure",$plotwidth,$plotheight,$npastdays['pressure']); ?> 
    <?php print_chart_div("humidity",$plotwidth,$plotheight,$npastdays['humidity']); ?>
    <?php print_chart_div("current",$plotwidth,$plotheight,$npastdays['current']); ?>

   </form>
  </body>
</html>

