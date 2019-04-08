<?php
  if (isset($_GET['searchText'])) {
      $searchText = $_GET['searchText'];
      $sql = "SELECT * FROM kanji WHERE kanji='$searchText' OR english LIKE '%$searchText%' "; 
  } 
  require 'db.php';
  
  $res = $db->query($sql);
  if(mysqli_num_rows($res) == 0){
    echo 'NO KANJI FOUND!';
  }
?>

