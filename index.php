<?php include('header.php'); ?>

  <button class="revealData">Reveal Data</button>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.revealData').click(function() {
        $('.dataDump').toggle(300);
      });
    });
  </script>

  <!-- Product Profiles -->
  <?php include('products.php'); ?>

  <!-- Market Profiles -->
  <?php include('markets.php'); ?>

  <!-- Sales -->
  <?php include('sales.php'); ?>

  <!-- Marketing -->
  <?php include('marketing.php'); ?>  

<?php include('footer.php'); ?>