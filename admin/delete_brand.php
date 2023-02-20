<?php
if(isset($_GET['delete_brand'])){
    $delete_brand = $_GET['delete_brand'];
    $delete_query = "Delete from `brands` where brand_id=$delete_brand";
    $result = mysqli_query($conn, $delete_query);
    if($result){
        echo "<script>alert('Brand deleted successfully')</script>";
        echo "<script>window.open('./index.php?view_brands', '_self')</script>";
    }
}
?>