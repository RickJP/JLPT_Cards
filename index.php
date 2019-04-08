<?php
  //header('Content-Type: text/html; charset=utf-8');
  $TEMPLATES_DIR = 'templates/';
  $PHP_DIR = 'php/';
?>

  <?php include $TEMPLATES_DIR . 'header.html'; ?>
<body>
  <?php include $TEMPLATES_DIR . 'navbar.html'; ?>

  <?php require $PHP_DIR . 'sqlPaginate.php'; ?>
      
  <?php include $TEMPLATES_DIR . 'displayCards.html'; ?>

  <?php require $TEMPLATES_DIR . 'paginationControls.html'; ?>

  <?php  include $TEMPLATES_DIR . 'footer.html'; ?>
         
</body>
</html>









    