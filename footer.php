  </div> <!-- End .wrap -->

  <script type="text/javascript">  
    var changeValues = function(value, point, chart) {
      $(document).ready(function() {            
        $( "button" ).click(function() {
          $( chart ).attr( point, value + "%" );
        });
      });
    };

    // Variables
    var value = 50;
    var vertBars = 100 - value;

    // Bar Charts
    changeValues(vertBars, 'y1', 'line[class="vertBars"]');
    changeValues(value, 'x2', 'line[class="horzBars"]');

    // Bubble Chart
    changeValues(value, 'cy', 'circle[class="bubbles"]');

    // Line Chart
    changeValues(value, 'cy', 'circle[class="lineChart"]');
  </script>
  
</body>
</html>