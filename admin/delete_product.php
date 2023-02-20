<?php
   if(isset($_GET['delete_product'])){
     $delete_id = $_GET['delete_product'];
     $delete_query = "delete from `products` where product_id=$delete_id";
     $result_delete = mysqli_query($conn, $delete_query);
     if($result_delete){
        echo "<script>alert('Product deleted successfully')</script>";
        echo "<script>window.open('index.php', '_self')</script>";
     } 
   }
?>