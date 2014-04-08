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
    var value = 90;
    var vertBars = 100 - value;

    // Call Outs
    changeValues(vertBars, 'y1', 'line[class="vertBars"]');
    changeValues(value, 'x2', 'line[class="horzBars"]');
  </script>
  
</body>
</html>