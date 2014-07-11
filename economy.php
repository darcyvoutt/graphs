<!-- HTML Markup -->
<h2>Economy</h2>

<button id="update">Refresh Page</button><br>  

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
    var chart = nv.models.lineChart()
      .margin({top: 5, right: 10, bottom: 38, left: 10})        
      .color(["rgba(255,255,255,0.5)", "rgba(242,94,34,0.58)"])    
      .useInteractiveGuideline(false)   
      .transitionDuration(350)   
      .showLegend(true)
      .showYAxis(false) 
      .showXAxis(true)  
      .forceY([0.4,1.6])       
      ;

    chart.xAxis
        .tickFormat(d3.format('d'))
        .axisLabel("Rounds")
        ;

    chart.yAxis
        .tickFormat(d3.format('0.1f'))
        ;

    var data = economyData();

    d3.select('#economyChart svg')
        .datum(data)
        .call(chart)
        ;

    nv.utils.windowResize(chart.update);

    return chart;
  });

  // Data Calc
  function economyData() {  

    // Rounds
    var numRounds = 10;

    // Stability of economy
    var stable = 0.2;
    var unstable = 0.6;
    var stability = stable;

    // Type of economy
    var boom = 0.025;
    var flat = 0;
    var poor = -0.025;
    var economyTrend = poor;

    // Range    
    var start = 1;
    var max = start + stability;
    var min = start - stability;

    // Arrays
    var baseLine = [];
    var economy = [];

    // Loop
    for (var i = 0; i < numRounds + 1; i++) {    
      
      baseLine.push({x: i, y: 1});

      if (i == 0) {

        economyValue = 1;
      
      } else {
      
        var curve = Math.min(Math.max( start + ((Math.random() - 0.5) * stability), min), max);        
        
        economyValue = Math.round( ((1 + (economyTrend * i)) * curve) * 100) / 100;

      }

      economy.push({x: i, y: economyValue});
      
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
    ];
  }

  function update() {
      sel = svg.selectAll(".nv-line")
      .datum(data);

      sel
        .exit()
        .remove();

      sel
        .enter()
        .append('path')
          .attr('class','.nv-line');

      sel
        .transition().duration(1000);

  };

  d3.select("#update").on("click", data);  
  

  // Print the data to Data Dump
  document.getElementById("dataDump").innerHTML = JSON.stringify(economyData());
</script>