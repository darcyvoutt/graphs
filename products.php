<!-- PHP Data -->
<?php
  // Data Arrau
  $products = array(
    array(
      'Name' => 'Your Phone',
      'Price' => 600,
      'Values' => array(          
          'Design' => 4,
          'Features' => 4,
          'Performance' => 4,
          'Usability' => 4
          )
    ), 
    array(
      'Name' => 'Universe X3',
      'Price' => 550,
      'Values' => array(          
          'Design' => 2,
          'Features' => 7,
          'Performance' => 6,
          'Usability' => 4
          )
    ),
    array(
      'Name' => 'ePhones 74s',
      'Price' => 125,
      'Values' => array(          
          'Design' => 2,
          'Features' => 3,
          'Performance' => 4,
          'Usability' => 7
          )
    ),
    array(
      'Name' => 'NextUs',
      'Price' => 750,
      'Values' => array(          
          'Design' => 8,
          'Features' => 5,
          'Performance' => 3,
          'Usability' => 9
          )
    ),
    array(
      'Name' => 'Humanoid',
      'Price' => 350,
      'Values' => array(          
          'Design' => 2,
          'Features' => 4,
          'Performance' => 8,
          'Usability' => 4
          )
    ),
  ); 
?>

<!-- HTML Markup -->
<h2>What are the products people are people selling?</h2>

<div id="productProfiles" class="profiles">

  <!-- Start PHP -->
  <?php foreach ($products as $product) { ?>

  <div class="profile">
    <div class="profile-header">

        <h3 class="profile-title"><?php echo $product['Name']; ?></h3>
        <span class="profile-price"><?php echo '$' . $product['Price']; ?></span>

    </div>

    <div class="profile-content">

    <?php foreach ($product['Values'] as $feature => $value) { ?>    

      <div class="profile-feature">
        <label><?php echo $feature; ?></label>
        <div class="profile-bar">
          <div class="profile-value" data-value="<?php echo $value; ?>"></div>
        </div>
        <div class="profile-number"><?php echo $value; ?></div>
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
  <pre><?php var_export($products); ?></pre>
</div>