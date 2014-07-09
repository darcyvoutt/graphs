<!-- HTML Markup -->
<h2>Economy</h2>

<label>Rounds: 20</label>
<button class="chart-refresh">Refresh Page</button><br>  

<div id="economyChart">  
  <svg></svg>
</div>

<!-- Data Dump (Debugging) -->
<div class="dataDump">
  <h4>Data Dump (Debugging)</h4>
  <pre id="dataDump"></pre>
</div>

<!-- JavaScript Chart Setup -->
<script type="text/javascript">
  nv.addGraph(function() {
    var chart = nv.models.cumulativeLineChart()
      .margin({top: 5, right: 5, bottom: 5, left: 5})        
      .y(function(d) { return d[1]/100 })
      .x(function(d) { return d[0] })
      .color(["rgba(242,94,34,0.58)"])
      .useInteractiveGuideline(false)
      .showControls(false)        
      .showLegend(false)
      .tooltips(false)        
      ;

    chart.xAxis
        .tickFormat(d3.format(',.1%'));

    chart.yAxis
        .tickFormat(d3.format(',.1%'));

    d3.select('#economyChart svg')
        .datum(economyData())
        .transition().duration(800)
        .call(chart);

    nv.utils.windowResize(chart.update);

    return chart;
  });

  // Data Calc
  function economyData() {  

    var numRounds = 20;

    var values =[];
    for (i = 0; i < numRounds + 1; i++) {
      values[i] = new Array(2);
      values[i][0] = i;
      values[i][1] = Math.round( Math.random() * 100) / 100;
    }

    return [
      {
        key: 'Economy',
        values: values   
      }
    ]
  
  }

  $(document).ready(function() {
    $('.chart-refresh').on('click', function() {
      location.reload();
    });
  });
  
  // Print the data to Data Dump
  document.getElementById("dataDump").innerHTML = JSON.stringify(economyData());
</script>