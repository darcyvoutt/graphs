<?php 
// Legend Variables
$y1 = "20";
$y2 = "40";
$y3 = "60";
$y4 = "80";
$y5 = "100";

// Legend Variables
$x1 = "1991";
$x2 = "1992";
$x3 = "1993";
$x4 = "1994";
$x5 = "1995";

// Circle Values
$cx1 = "40%"; $cy1 = "40%";
$cx2 = "60%"; $cy2 = "60%";
$cx3 = "70%"; $cy3 = "70%";
$cx4 = "80%"; $cy4 = "80%";
$cx5 = "90%"; $cy5 = "90%";
?>

<div class="graphWidget">
  
  <h2>Bubble Chart</h2>  
  
  <div class="bubbleChart">

    <ol class="bubbleChart-yaxis">
      <li class="bubbleChart-yaxis-item"><?php echo $y5 ?></li>
      <li class="bubbleChart-yaxis-item"><?php echo $y4 ?></li>
      <li class="bubbleChart-yaxis-item"><?php echo $y3 ?></li>
      <li class="bubbleChart-yaxis-item"><?php echo $y2 ?></li>
      <li class="bubbleChart-yaxis-item"><?php echo $y1 ?></li>
    </ol>
    
    <div class="bubbleChart-graph">
      <svg>
        <circle class="bubbles" cx="<?php echo $cx1 ?>" cy="<?php echo $cy1 ?>" r="20" />      
        <circle class="bubbles" cx="<?php echo $cx2 ?>" cy="<?php echo $cy2 ?>" r="20" />    
        <circle class="bubbles" cx="<?php echo $cx3 ?>" cy="<?php echo $cy3 ?>" r="20" />    
        <circle class="bubbles" cx="<?php echo $cx4 ?>" cy="<?php echo $cy4 ?>" r="20" />    
        <circle class="bubbles" cx="<?php echo $cx5 ?>" cy="<?php echo $cy5 ?>" r="20" />    
      </svg>
      <?php include('graphlines.php'); ?>

      <ol class="bubbleChart-xaxis">
        <li class="bubbleChart-xaxis-item"><?php echo $x1 ?></li>
        <li class="bubbleChart-xaxis-item"><?php echo $x2 ?></li>
        <li class="bubbleChart-xaxis-item"><?php echo $x3 ?></li>
        <li class="bubbleChart-xaxis-item"><?php echo $x4 ?></li>
      </ol>
    </div>

  </div>  
  
</div>