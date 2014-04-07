<?php 
// Legend Variables
$y1 = "100";
$y2 = "200";
$y3 = "300";
$y4 = "400";
$y5 = "500";

// Value Variables
$max = 100;
$value1 = $max - 90 . "%";
$value2 = $max - 67 . "%";
$value3 = $max - 42 . "%";
$value4 = $max - 88 . "%";

// Legend Variables
$x1 = "1991";
$x2 = "1992";
$x3 = "1993";
$x4 = "1994";
?>

<div class="graphWidget">

  <h2>Horzintal Bar Chart | Vertical</h2>

  <div class="barChart-vert">

    <ol class="barChart-vert-yaxis">
      <li class="barChart-vert-yaxis-item"><?php echo $y5 ?></li>
      <li class="barChart-vert-yaxis-item"><?php echo $y4 ?></li>
      <li class="barChart-vert-yaxis-item"><?php echo $y3 ?></li>
      <li class="barChart-vert-yaxis-item"><?php echo $y2 ?></li>
      <li class="barChart-vert-yaxis-item"><?php echo $y1 ?></li>
    </ol>

    <div class="barChart-vert-graph">

      <svg>
        <line x1="20%" y1="<?php echo $value1 ?>" x2="20%" y2="100%" />
        <line x1="40%" y1="<?php echo $value2 ?>" x2="40%" y2="100%" />
        <line x1="60%" y1="<?php echo $value3 ?>" x2="60%" y2="100%" />
        <line x1="80%" y1="<?php echo $value4 ?>" x2="80%" y2="100%" />
      </svg>

      <?php include('graphlines.php'); ?> 

      <ol class="barChart-vert-xaxis">
        <li class="barChart-vert-xaxis-item"><?php echo $x1 ?></li>
        <li class="barChart-vert-xaxis-item"><?php echo $x2 ?></li>
        <li class="barChart-vert-xaxis-item"><?php echo $x3 ?></li>
        <li class="barChart-vert-xaxis-item"><?php echo $x4 ?></li>
      </ol>
      
    </div>

  </div>

</div>  