<!-- PHP Data -->
<?php
  // Data Arrau
  $markets = array(
    array(
      'Market' => 'Basic Planners',
      'Price' => 4,
      'Values' => array(          
          'Design' => 2,
          'Features' => 3,
          'Performance' => 3,
          'Usability' => 9
          )
    ), 
    array(
      'Market' => 'No-Namers',
      'Price' => 3,
      'Values' => array(          
          'Design' => 4,
          'Features' => 6,
          'Performance' => 9,
          'Usability' => 5
          )
    ),
    array(
      'Market' => 'Feature Followers',
      'Price' => 2,
      'Values' => array(          
          'Design' => 5,
          'Features' => 9,
          'Performance' => 6,
          'Usability' => 2
          )
    ),
    array(
      'Market' => 'Hipsters & Elites',
      'Price' => 1,
      'Values' => array(          
          'Design' => 9,
          'Features' => 4,
          'Performance' => 5,
          'Usability' => 9
          )
    ),
  ); 
?>

<!-- HTML Markup -->
<h2>Market Needs</h2>

<div id="marketProfiles">

  <!-- Start PHP -->
  <?php foreach ($markets as $market) {

    // Symbols Calc
    $maxSymbols = 5;
    $priceSymbol = "$";  
    $numSymbols = $market['Price'];
    $totalSymbols = $maxSymbols - $numSymbols;

    $greenSymbols = str_repeat($priceSymbol, $numSymbols);
    $whiteSymbols = str_repeat($priceSymbol, $totalSymbols); 

  ?>

  <div class="marketNeed">
    <div class="marketNeed-header">

        <h3 class="marketNeed-title"><?php echo $market['Market']; ?></h3>
        <span class="marketNeed-price" data-value="<?php echo $greenSymbols; ?>"><?php echo $whiteSymbols; ?></span>

    </div>

    <div class="marketNeed-content">

    <?php foreach ($market['Values'] as $feature => $value) { ?>    

      <div class="marketNeed-rating">
        <label><?php echo $feature; ?></label>
        <div class="marketNeed-bar">
          <div class="marketNeed-value" data-value="<?php echo $value; ?>"></div>
        </div>
        <div class="marketNeed-rate"><?php echo $value; ?></div>
      </div>

    <?php } ?>     

    </div>
  </div>

  <!-- End PHP -->
  <?php } ?>

</div>

<!-- Data Dump (Debugging) -->
<div class="dataDump">
  <h4>Data Dump (Debugging)</h4>
  <pre><?php var_export($markets); ?></pre>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('.marketNeed-value').each(function() {
       var dataWidth = $(this).data('value');
       $(this).css("width", (dataWidth * 10) + "%");
    });
  });
</script>