<!-- HTML Markup -->
<h2>Economy</h2>

<button id="update">Generate Economy</button><br>  

<div class="rounds">
  <label>Rounds</label>
  <input type="number" id="rounds" value="10" />
</div>

<div class="trend">
  <input type="radio" name="trend" id="growth" value="0.025" checked />
  <label for="growth">Growth</label>

  <input type="radio" name="trend" id="decline" value="-0.025" />
  <label for="decline">Decline</label>

  <input type="radio" name="trend" id="flat" value="0" />
  <label for="flat">Flat</label>
</div>

<div class="stability">
  <input type="radio" name="stability" id="stable" value="0.2" checked />
  <label for="stable">Stable</label>

  <input type="radio" name="stability" id="unstable" value="0.6" />
  <label for="unstable">Unstable</label>
</div>


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
var chart;
var chartData;

// Start NVD3
  nv.addGraph(function() {
    chart = nv.models.lineChart()
      .margin({top: 5, right: 10, bottom: 38, left: 10})        
      .color(["rgba(255,255,255,0.5)", "rgba(242,94,34,0.58)"])    
      .useInteractiveGuideline(false)   
      .transitionDuration(350)   
      .forceY([0.4,1.6])
      .showLegend(true)
      .showYAxis(false) 
      .showXAxis(true)             
      ;

    chart.xAxis
        .tickFormat(d3.format('d'))
        .axisLabel("Rounds")
        ;

    chart.yAxis
        .tickFormat(d3.format('0.1f'))
        ;

    var data = economyData();

    chartData = d3.select('#economyChart svg').datum(data);
    
    chartData.transition().duration(500).call(chart);

    nv.utils.windowResize(chart.update);

    return chart;
  });

  function update() {
    var data = economyData();

    // Update the SVG with the new data and call chart
    chartData.datum(data).transition().duration(500).call(chart);
    nv.utils.windowResize(chart.update);
  };

  // Click of the button to update
  d3.select("#update").on("click", update);

  // Data Calc
  function economyData() {  

    // Rounds
    var numRounds = parseFloat( $('#rounds').val() );

    // Trend of economy
    var trend = parseFloat( $('input:radio[name=trend]:checked').val() );

    // Stability of economy
    var stability = parseFloat( $('input:radio[name=stability]:checked').val() );

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
        economyValue = Math.round( ((1 + (trend * i)) * curve) * 100) / 100;

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

  // Print the data to Data Dump
  document.getElementById("dataDump").innerHTML = JSON.stringify(economyData());
</script>