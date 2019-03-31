<?php 
  $TEMPLATES_DIR = '../templates/';
  $PHP_DIR = '';
?>
  <?php include $TEMPLATES_DIR . 'header.html'; ?>
<body>
　  <?php include $TEMPLATES_DIR . 'navbar2.html'; ?>
    <?php require $PHP_DIR . 'setupPagination2.php'; ?>
  
   <?php include $TEMPLATES_DIR . 'displayCards.html'; ?>

  <!-- PAGINATION CONTROLS --> 
  <?php require $TEMPLATES_DIR . 'paginationControls.html'; ?>

  <!-- FOOTER SECTION -->
  <?php  include $TEMPLATES_DIR . 'footer.html'; ?>

</body>
</html>