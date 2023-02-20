<?php 

   $conn = mysqli_connect('localhost', 'root', 'root','online_store');

   if(!$conn){
        die(mysqli_error($conn));
   }
?>