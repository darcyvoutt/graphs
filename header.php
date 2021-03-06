<!DOCTYPE html>
<?php 
  ini_set('display_errors', 1);
  error_reporting(E_ALL ^ E_NOTICE);
?>
<html>
<head>

  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
  
  <title>Graphs</title>

  <!-- Less -->
  <script type="text/javascript">
    less = {
      env: "development",
      async: false,
      fileAsync: false,
    };
  </script>
  <link rel="stylesheet/less" href="assets/less/style.less" />  
  
  <!-- Scripts -->    
  <script src="assets/js/libraries/less-1.7.0.min.js"></script>
  <script src="assets/js/libraries/jquery-1.11.0.min.js"></script>
  <script src="assets/js/libraries/d3.min.js"></script>  
  <script src="assets/js/libraries/nv.d3.min.js"></script>
  <script src="assets/js/profiles.js"></script>

</head>
  
<body>

<div class="wrap">

<button class="revealData">Reveal Data</button>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.revealData').click(function() {
        $('.dataDump').toggle(300);
      });
    });
  </script>