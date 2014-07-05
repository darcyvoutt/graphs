<!-- HTML Markup -->
<h2>Frequency vs. Media Type</h2>

<div id="marketingChart">
  <svg></svg>
</div>

<!-- PHP Data -->
<?php
 $marketingArray = array(
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
    var chart = nv.models.scatterChart()
                  .showDistX(true)
                  .showDistY(true)
                  .color(d3.scale.category10().range());

    chart.xAxis.tickFormat(d3.format('.02f'));
    chart.yAxis.tickFormat(d3.format('.02f'));

    d3.select('#marketingChart svg')
        .datum(data(4,40))
        .transition().duration(500)
        .call(chart);

    nv.utils.windowResize(chart.update);

    return chart;
  });  
</script>