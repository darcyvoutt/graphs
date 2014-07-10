<!-- HTML Markup -->
<h2>Economy</h2>

<label>Rounds: 20</label>
<button class="page-refresh">Refresh Page</button><br>  
<button class="chart-refresh">Refresh Data</button><br>  

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
      .margin({top: 5, right: 10, bottom: 38, left: 5})        
      .y(function(d) { return d[1]/100 })
      .x(function(d) { return d[0] })
      .color(["rgba(255,255,255,0.5)", "rgba(242,94,34,0.58)"])
      .useInteractiveGuideline(false)
      .showControls(false)        
      .showLegend(true)
      .tooltips(false)        
      ;

    chart.xAxis
        .tickFormat(d3.format(',.1'))
        .axisLabel("Rounds")
        ;

    chart.yAxis
        .tickFormat(d3.format(',.1'));

    d3.select('#economyChart svg')
        .datum(economyData())
        .transition().duration(800)
        .call(chart);

    nv.utils.windowResize(chart.update);

    return chart;
  });

  // Data Calc
  function economyData() {  

    // Rounds
    var numRounds = 8;

    // Degrees of difficulty
    var easy = 0.2;
    var medium = 0.4;
    var hard = 0.6;

    // Setups
    var difficulty = hard;
    var start = 1;

    // Range
    var max = start + difficulty;
    var min = start - difficulty;        

    // Last Years
    var lastYear1 = (Math.random() * 100) / 100;

    // Curve Generation
    var trend = 0.04 - (difficulty / 10);    

    // Loops
    var baseLine = [];
    var economy = [];
    for (i = 0; i < numRounds + 3; i++) {

      var curve = Math.min(Math.max( lastYear1 + ((Math.random() - 0.5) * difficulty), min), max);        

      // Flat Line
      baseLine[i] = new Array(2);
      baseLine[i][0] = i;
      baseLine[i][1] = 1;

      // Economy Generation
      economy[i] = new Array(2);
      economy[i][0] = i;
      economy[i][1] = Math.round( ((1 + (trend * i)) * curve) * 100) / 100;
    }

    return [
      {
        key: 'Base Line',
        values: baseLine   
      },
      {
        key: 'Economy',
        values: economy   
      }
    ]
  
  }

  $(document).ready(function() {
    $('.page-refresh').on('click', function() {
      chart.update().reload();
    });
  });


  
  // Print the data to Data Dump
  document.getElementById("dataDump").innerHTML = JSON.stringify(economyData());
</script>