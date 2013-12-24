<?php
include 'chart_functions.php';
?>

<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

<?php
$phpfilename="temp_inside.php";
$plotwidth=700;
$plotheight=400;
?>

<?php
require('temperature_params.php');
load_chart_data_from_file($suffix,$logfiletemplates,$dateindex,$timeindex,$addressindex,$tempindex,$offset,$addresses,$labels,$plottitle,$plotwidth,$plotheight,$npastdays[$suffix]);
?>

    </script>
  </head>

  <body>

    <form action="<?php echo $phpfilename?>" method="get">

    <?php print_chart_div("temperature",$plotwidth,$plotheight,$npastdays['temperature']); ?>

   </form>
  </body>
</html>

