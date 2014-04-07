<?php 
// Legend Variables
$y1 = "100";
$y2 = "200";
$y3 = "300";
$y4 = "400";
$y5 = "500";

// Legend Variables
$x1 = "1991";
$x2 = "1992";
$x3 = "1993";
$x4 = "1994";
$x5 = "1995";
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
        <circle cx="50%" cy="50%" r="20" />      
        <circle cx="15%" cy="20%" r="20" />    
        <circle cx="40%" cy="40%" r="20" />    
        <circle cx="70%" cy="80%" r="20" />    
        <circle cx="90%" cy="10%" r="20" />    
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