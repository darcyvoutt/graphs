<!-- HTML Markup -->
<h2>Frequency vs. Media Type</h2>

<div id="marketingChart">
  <svg></svg>
</div>

<!-- PHP Data -->
<?php
 $marketingArray = array(
    array(
        'key' => 'Market',
        'values' => array(
            array('x' => 0.20, 'y' => 25, 'size' => 230),            
            array('x' => 0.40, 'y' => 39, 'size' => 350),            
            array('x' => 0.70, 'y' => 5,  'size' => 200),            
            array('x' => 0.90, 'y' => 23, 'size' => 200)
        )
    ),
    array(
        'key' => 'Competitor',
        'values' => array(
            array('x' => 0.20, 'y' => 20, 'size' => 150),            
            array('x' => 0.45, 'y' => 45, 'size' => 200),            
            array('x' => 0.70, 'y' => 70, 'size' => 180),            
            array('x' => 0.30, 'y' => 30, 'size' => 340)         
        )
    ),
    array(
        'key' => 'Your Product',
        'values' => array(
            array('x' => 0.50, 'y' => 30, 'size' => 50, 'label' => 'YourProduct'),
        )
    )
  );

  $marketingData = json_encode($marketingArray);
?>

<!-- Data Dump (Debugging) -->
<h4>Data Dump (Debugging)</h4>

<pre>
  <?php var_export($marketingData); ?>
</pre>

<!-- JavaScript Chart Setup -->
<script type="text/javascript">
  nv.addGraph(function() {
    var yourProductColor = "rgba(242,94,34,0.58)";
    var competitorColor = "rgba(57,198,226,58)";
    var marketColor = "rgba(255,255,255,0.75)";

    var chart = nv.models.scatterChart()
      .color([marketColor, competitorColor, yourProductColor])
      .transitionDuration(350)
      .showDistX(true)
      .showDistY(true)       
      ;

    //Configure how the tooltip looks.
    chart.tooltipContent(function(key) {
        return '<h3>' + key + '</h3>';
    });

    chart.yAxis
        .tickFormat(d3.format('.02f'))
        .axisLabel("Frequency")
        ;

    chart.xAxis
        .axisLabel("Tranditional Media - Digital & Social Media")
        .tickFormat(d3.format('.02f'))
        ;   

    //We want to show shapes other than circles.
    chart.scatter.onlyCircles(false);

    d3.select('#marketingChart svg')
        .datum(<?php echo $marketingData; ?>)
        .call(chart)
        ;

    nv.utils.windowResize(chart.update);

    return chart;
  });
</script>