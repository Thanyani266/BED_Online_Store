<?php
   if(isset($_GET['delete_item'])){
     $delete_id = $_GET['delete_item'];
     $delete_query = "delete from `cart_details` where product_id=$delete_id";
     $result_delete = mysqli_query($conn, $delete_query);
     if($result_delete){
        echo "<script>window.open('cart.php', '_self')</script>";
     } 
   }
?>