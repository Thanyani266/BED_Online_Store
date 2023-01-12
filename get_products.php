<?php
  
  include('connection.php');

  $stmt = $conn->prepare("SELECT * FROM food_products");
  $stmt->execute();

  $products = $stmt->get_result();
  
?>