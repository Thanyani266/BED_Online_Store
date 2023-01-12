<?php
  
  include('connection.php');

  $stmt = $conn->prepare("SELECT * FROM customers");
  $stmt->execute();

  $customers = $stmt->get_result();
  
?>

    