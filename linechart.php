<div class="graphWidget">

  <h2>Line Graph</h2>

  <div class="lineChart">

    <svg>  
      <!-- Lines -->
      <line x1="0%" y1="100%" x2="20%" y2="80%" />
      <line x1="20%" y1="80%" x2="40%" y2="50%" />
      <line x1="40%" y1="50%" x2="60%" y2="30%" />
      <line x1="60%" y1="30%" x2="80%" y2="45%" />
      <line x1="80%" y1="45%" x2="100%" y2="10%" />

      <!-- Points -->
      <circle cx="0%" cy="100%" r="5" />        
      <circle cx="20%" cy="80%" r="5" />
      <circle cx="40%" cy="50%" r="5" />
      <circle cx="60%" cy="30%" r="5" />
      <circle cx="80%" cy="45%" r="5" />
      <circle cx="100%" cy="10%" r="5" />        

      <!-- Trend Line -->
      <g class="lineChart-trend">
        <line x1="0%" y1="85%" x2="100%" y2="20%" />
      </g>
    </svg>

    <?php include('graphlines.php'); ?>  

  </div>

</div>