<?php
  $TEMPLATES_DIR = 'templates/';
  $PHP_DIR = 'PHP/';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Image Gallery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <?php include $TEMPLATES_DIR . 'navbar.html'; ?>
    <?php require_once $PHP_DIR . 'setupPagination.php'; ?>

    <div class="row">  
      <?php if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
      ?>
        <?php require $TEMPLATES_DIR . 'displayCards.html'; ?>

      <?php } } 
          mysqli_close($db);
      ?>
    </div>    

  <!-- PAGINATION CONTROLS --> 
  <?php require $TEMPLATES_DIR . 'paginationControls.html'; ?>

  <!-- FOOTER SECTION -->
  <?php  include $TEMPLATES_DIR . 'footer.html'; ?>
 
  <!-- Compiled and minified JavaScript -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- <script src="script.js"></script> -->
    <script> $('.dropdown-trigger').dropdown(); </script>
</body>
</html>









    