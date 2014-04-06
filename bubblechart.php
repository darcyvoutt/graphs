<?php 
// Legend Variables
$y1 = "100";
$y2 = "200";
$y3 = "300";
$y4 = "400";
$y5 = "500";
?>

<div class="graphWidget">
  
  <h2>Bubble Chart</h2>  
  
  <div class="bubbleChart">

    <ul class="bubbleChart-yaxis">
      <li class="bubbleChart-yaxis-item"><?php echo $y1 ?></li>
      <li class="bubbleChart-yaxis-item"><?php echo $y2 ?></li>
      <li class="bubbleChart-yaxis-item"><?php echo $y3 ?></li>
      <li class="bubbleChart-yaxis-item"><?php echo $y4 ?></li>
      <li class="bubbleChart-yaxis-item"><?php echo $y5 ?></li>
    </ul>
    
    <div class="bubbleChart-graph">
      <svg>
        <circle cx="50%" cy="50%" r="20" />      
        <circle cx="15%" cy="20%" r="20" />    
        <circle cx="40%" cy="40%" r="20" />    
        <circle cx="70%" cy="80%" r="20" />    
        <circle cx="90%" cy="10%" r="20" />    
      </svg>
      <?php include('graphlines.php'); ?>

      <ul class="bubbleChart-xaxis">
        <li class="bubbleChart-xaxis-item"><?php echo $y1 ?></li>
        <li class="bubbleChart-xaxis-item"><?php echo $y2 ?></li>
        <li class="bubbleChart-xaxis-item"><?php echo $y3 ?></li>
        <li class="bubbleChart-xaxis-item"><?php echo $y4 ?></li>
        <li class="bubbleChart-xaxis-item"><?php echo $y5 ?></li>
      </ul>
    </div>

  </div>  
  
</div>