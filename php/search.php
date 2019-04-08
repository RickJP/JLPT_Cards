<?php 
  $TEMPLATES_DIR = '../templates/';
  $PHP_DIR = '';
?>
  <?php include $TEMPLATES_DIR . 'header.html'; ?>
<body>
　  <?php include $TEMPLATES_DIR . 'navbar.html'; ?>
    <?php require $PHP_DIR . 'sqlSearch.php'; ?>
  
   <?php include $TEMPLATES_DIR . 'displayCards.html'; ?>

  <!-- FOOTER SECTION -->
  <?php  include $TEMPLATES_DIR . 'footer.html'; ?>

</body>
</html>