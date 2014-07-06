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
<h2>What are customers asking for?</h2>

<div id="marketProfiles" class="profiles">

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

  <div class="profile">
    <div class="profile-header">

        <h3 class="profile-title"><?php echo $market['Market']; ?></h3>
        <span class="profile-price">
          <b><?php echo $greenSymbols; ?></b><?php echo $whiteSymbols; ?>
        </span>

    </div>

    <div class="profile-content">

    <?php foreach ($market['Values'] as $feature => $value) { ?>    

      <div class="profile-rating">
        <label><?php echo $feature; ?></label>
        <div class="profile-bar">
          <div class="profile-value" data-value="<?php echo $value; ?>"></div>
        </div>
        <div class="profile-rate"><?php echo $value; ?></div>
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