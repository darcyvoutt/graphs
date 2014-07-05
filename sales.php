<!-- HTML Markup -->
<h1>Sales Volume per Market</h1>

<div id="salesChart">
  <svg></svg>
</div>

<!-- PHP Data -->

<?php
 $salesArray = array(
    array(
        'key' => 'Basic Planners',
        'values'=> array(
            array('x' => 'YourPhone', 'y' => 150),
            array('x' => 'Universe X3', 'y' => 300),
            array('x' => 'ePhone 74s', 'y' => 1500),
            array('x' => 'NextUs', 'y' => 50),
            array('x' => 'Humanoid', 'y' => 500),
        )
    ),
    array(
        'key' => 'No-Namers',
        'values'=> array(
            array('x' => 'YourPhone', 'y' => 300),
            array('x' => 'Universe X3', 'y' => 250),
            array('x' => 'ePhone 74s', 'y' => 400),
            array('x' => 'NextUs', 'y' => 150),
            array('x' => 'Humanoid', 'y' => 900),
        )
    ),
    array(
        'key' => 'Feature Followers',
        'values'=> array(
            array('x' => 'YourPhone', 'y' => 359),
            array('x' => 'Universe X3', 'y' => 900),
            array('x' => 'ePhone 74s', 'y' => 100),
            array('x' => 'NextUs', 'y' => 500),
            array('x' => 'Humanoid', 'y' => 250),
        )
    ),
    array(
        'key' => 'Hipsters & Elites',
        'values'=> array(
            array('x' => 'YourPhone', 'y' => 200),
            array('x' => 'Universe X3', 'y' => 350),
            array('x' => 'ePhone 74s', 'y' => 50),
            array('x' => 'NextUs', 'y' => 800),
            array('x' => 'Humanoid', 'y' => 100),
        )
    ),
  );

  $salesData = json_encode($salesArray);
?>

<!-- Data Dump (Debugging) -->
<h4>Data Dump (Debugging)</h4>

<pre>
  <?php var_export($salesData); ?>
</pre>

<!-- JavaScript Chart Setup -->

<script type="text/javascript">
  nv.addGraph(function() {
    var chart = nv.models.multiBarChart()    
      .color(["#24545F", "#428696", "#6DADBD", "#58CBE7"])
      .transitionDuration(10)
      .showControls(false)
      .groupSpacing(0.55) 
      .showLegend(true)    
      .stacked(true)    
      .delay(350)
      ;

    chart.xAxis       
        .axisLabel("Products")            
        ;

    chart.yAxis
        .tickFormat(d3.format(".3s"))
        .axisLabel('Sales (units)')
        .axisLabelDistance(30)
        ;

    d3.select('#salesChart svg')
        .datum(<?php echo $salesData; ?>)
        .call(chart)            
        ;

    nv.utils.windowResize(chart.update);

    return chart;
  });
</script>