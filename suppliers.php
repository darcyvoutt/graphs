<!-- PHP Data -->
<?php
  // Data Arrau
  $suppliers = array(
    array(
      'Name' => 'ACME',
      'Price' => 50,
      'Rating' => 1,
      'CapacityMin' => 1000,
      'CapacityMax' => 3000,
      'Defects' => 3
    ), 
    array(
      'Name' => 'WidgetCo',
      'Price' => 100,
      'Rating' => 2,
      'CapacityMin' => 500,
      'CapacityMax' => 1500,
      'Defects' => 2
    ),
    array(
      'Name' => 'Electronica',
      'Price' => 175,
      'Rating' => 3,
      'CapacityMin' => 1000,
      'CapacityMax' => 2000,
      'Defects' => 2
    ),
    array(
      'Name' => 'Le Factorie',
      'Price' => 250,
      'Rating' => 5,
      'CapacityMin' => 1000,
      'CapacityMax' => 1200,
      'Defects' => 1
    )
  ); 
?>

<!-- HTML Markup -->
<h2>Who are making these products?</h2>

<div id="productProfiles" class="profiles">

  <!-- Start PHP -->
  <?php foreach ($suppliers as $supplier) {

    // Calculate the number of star ratings
    $maxStars = 5;
    $rateStar = "&#9733;";  
    $numStars = $supplier['Rating'];
    $totalStars = $maxStars - $numStars;
    $actualStars = str_repeat($rateStar, $numStars);
    $remainingStars = str_repeat($rateStar, $totalStars); 

    // Supplier Rating Variable
    $rating = $supplier['Defects'];
  ?>

  <div class="profile">
    <div class="profile-header">

        <h3 class="profile-title"><?php echo $supplier['Name']; ?></h3>
        <span class="profile-price"><?php echo '$' . $supplier['Price']; ?></span>
    </div>

    <div class="profile-content">

      <div class="profile-feature">
        <label>Rating</label>
        <div class="profile-rating">
          <b><?php echo $actualStars; ?></b><?php echo $remainingStars; ?>
        </div>
      </div>

      <div class="profile-feature">
        <label>Unit Capacity</label>
        <div class="profile-text">
          <?php echo $supplier['CapacityMin']; ?> - <?php echo $supplier['CapacityMax']; ?>
        </div>
      </div>

      <div class="profile-feature">
        <label>Defects</label>
        <div class="profile-text
          <?php 
            if ( $rating == 3 ) { echo 'is-high'; } 
            elseif ( $rating == 2 ) { echo 'is-medium'; } 
            else { echo 'is-low'; } 
          ?>
        ">
          <?php 
            // Determine the '.is-' class and label for defects                
            if ( $rating == 3 ) { echo 'High'; } 
            elseif ( $rating == 2 ) { echo 'Medium'; } 
            else { echo 'Low'; } 
          ?>
        </div>
      </div>

    </div>
  </div>

  <!-- End PHP -->
  <?php } ?>

</div>

<!-- Data Dump (Debugging) -->
<div class="dataDump">
  <h4>Data Dump (Debugging)</h4>
  <pre><?php var_export($suppliers); ?></pre>
</div>