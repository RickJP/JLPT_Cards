<?php
  if (isset($_GET['pageno'])) {
      $pageno = $_GET['pageno'];
  } else {
      $pageno = 1;
  }
  $no_of_records_per_page = 12;
  $offset = ($pageno-1) * $no_of_records_per_page;
  
  // Include database configuration file
  require 'db.php';
  
  // Get the total number of pages and divide into records per page
  $total_pages_sql = "SELECT COUNT(*) FROM kanji";
  $result = mysqli_query($db,$total_pages_sql);
  $total_rows = mysqli_fetch_array($result)[0];
  $total_pages = ceil($total_rows / $no_of_records_per_page);
  $sql = "SELECT * FROM kanji LIMIT $offset, $no_of_records_per_page"; 
  $res = $db->query($sql);

?>