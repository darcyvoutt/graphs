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

  var tickMarks = ["YourPhone","Universe X3", "ePhone 74s", "NextUs", "Humanoid"];

  chart.xAxis      
      // .tickFormat(d3.format(',f'))
      .tickValues(tickMarks)
      .axisLabel("Products")
      ;

  chart.yAxis
      .tickFormat(d3.format(',1f'))
      ;

  d3.select('#salesChart svg')
      .datum(exampleData())
      .call(chart)
      ;

  nv.utils.windowResize(chart.update);

  return chart;
});

//Generate some nice data.
function exampleData() {
  return [
    {
      "key": "Basic Planners",
      "values": [{
          "x": 0,
          "y": 150
      }, {
          "x": 1,
          "y": 300
      }, {
          "x": 2,
          "y": 1500
      }, {
          "x": 3,
          "y": 50
      }, {
          "x": 4,
          "y": 500
      }]
    }, {
      "key": "No-Namers",
      "values": [{
          "x": 0,
          "y": 300
      }, {
          "x": 1,
          "y": 250
      }, {
          "x": 2,
          "y": 400
      }, {
          "x": 3,
          "y": 150
      }, {
          "x": 4,
          "y": 900
      }]
    }, {
      "key": "Feature Followers",
      "values": [{
          "x": 0,
          "y": 350
      }, {
          "x": 1,
          "y": 900
      }, {
          "x": 2,
          "y": 100
      }, {
          "x": 3,
          "y": 500
      }, {
          "x": 4,
          "y": 250
      }]
    }, {
      "key": "Hipsters & Elites",
      "values": [{
          "x": 0,
          "y": 200
      }, {
          "x": 1,
          "y": 350
      }, {
          "x": 2,
          "y": 50
      }, {
          "x": 3,
          "y": 800
      }, {
          "x": 4,
          "y": 100
      }]
    }
  ]
}