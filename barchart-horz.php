<?php 
// Legend Variables
$legend1 = "Year 1";
$legend2 = "Year 2";
$legend3 = "Year 3";
$legend4 = "Year 4";
$legend5 = "Year 5";

// Value Variables
$value1 = "90%";
$value2 = "67%";
$value3 = "59%";
$value4 = "45%";
$value5 = "46%";
?>

<div class="graphWidget">

  <h2>Horzintal Bar Chart | Horizontal</h2>

  <div class="barChart">

    <ul class="barChart-legend">
      <li class="barChart-legend-item"><?php echo $legend1 ?></li>
      <li class="barChart-legend-item"><?php echo $legend2 ?></li>
      <li class="barChart-legend-item"><?php echo $legend3 ?></li>
      <li class="barChart-legend-item"><?php echo $legend4 ?></li>
      <li class="barChart-legend-item"><?php echo $legend5 ?></li>
    </ul>

    <div class="barChart-graph">

      <div class="barChart-bar">
        <svg><line class="horzBars" x1="0%" y1="0%" x2="<?php echo $value1 ?>" y2="0%" /></svg>
        <span class="barChart-tooltip"><?php echo $value1 ?></span>
      </div>

      <div class="barChart-bar">
        <svg><line class="horzBars" x1="0%" y1="0%" x2="<?php echo $value2 ?>" y2="0%" /></svg>
        <span class="barChart-tooltip"><?php echo $value2 ?></span>
      </div>
      
      <div class="barChart-bar">
        <svg><line class="horzBars" x1="0%" y1="0%" x2="<?php echo $value3 ?>" y2="0%" /></svg>
        <span class="barChart-tooltip"><?php echo $value3 ?></span>
      </div>
      
      <div class="barChart-bar">
        <svg><line class="horzBars" x1="0%" y1="0%" x2="<?php echo $value4 ?>" y2="0%" /></svg>
        <span class="barChart-tooltip"><?php echo $value4 ?></span>
      </div>
      
      <div class="barChart-bar">
        <svg><line class="horzBars" x1="0%" y1="0%" x2="<?php echo $value5 ?>" y2="0%" /></svg>
        <span class="barChart-tooltip"><?php echo $value5 ?></span>
      </div>

    </div>    

  </div>

</div>  