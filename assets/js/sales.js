// Chart Properties
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
      .datum(exampleData())
      .call(chart)            
      ;

  nv.utils.windowResize(chart.update);

  return chart;
});

// Data Array
function exampleData() {
  return [
    {
      "key": "Basic Planners",
      "values": [{"x": "YourPhone","y": 150}, 
                 {"x": "Universe X3","y": 300},
                 {"x": "ePhone 74s","y": 1500}, 
                 {"x": "NextUs","y": 50}, 
                 {"x": "Humanoid","y": 500
                }]
    }, {
      "key": "No-Namers",
      "values": [{"x": "YourPhone","y": 300}, 
                 {"x": "Universe X3","y": 250}, 
                 {"x": "ePhone 74s","y": 400}, 
                 {"x": "NextUs","y": 150}, 
                 {"x": "Humanoid","y": 900}]

    }, {
      "key": "Feature Followers",
      "values": [{"x": "YourPhone","y": 350}, 
                 {"x": "Universe X3","y": 900}, 
                 {"x": "ePhone 74s","y": 100}, 
                 {"x": "NextUs","y": 500}, 
                 {"x": "Humanoid","y": 250}]

    }, {
      "key": "Hipsters & Elites",
      "values": [{"x": "YourPhone","y": 200}, 
                 {"x": "Universe X3","y": 350}, 
                 {"x": "ePhone 74s","y": 50}, 
                 {"x": "NextUs","y": 800}, 
                 {"x": "Humanoid","y": 100}]
    }
  ]
}


// function yAxisTicks(selection) {
//   selection.selectAll('.nv-y .tick text')
//     .attr('transform', 'translate(38,12)');
// }

// function yAxisMinMax(selection) {
//   selection.selectAll('.nv-y .nv-axisMaxMin text')
//     .attr('display','none');
// }

// function legendsWrap(selection) {
//   selection.selectAll('.nv-legendWrap')
//     .attr('transform', 'translate(35,-39)');
// }

// .call(yAxisTicks)
// .call(yAxisMinMax)
// .call(legendsWrap)