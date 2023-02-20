<?php
    if(isset($_GET['edit_brand'])){
        $edit_brand = $_GET['edit_brand'];
        $get_brand = "Select * from `brands` where brand_id=$edit_brand";
        $resultb = mysqli_query($conn, $get_brand);
        $row = mysqli_fetch_assoc($resultb);
        $brand_title = $row['brand_name'];
    } 

    if(isset($_POST['edit_brand'])){
        $b_title = $_POST['brand_name'];
        $update_query = "update `brands` set brand_name='$b_title' where brand_id=$edit_brand";
        $result = mysqli_query($conn, $update_query);
        if($result){
            echo "<script>alert('Brand updated successfully')</script>";
            echo "<script>window.open('./index.php?view_brands', '_self')</script>";
        }
    }
?>

<div class="container mt-3">
    <h3 class="text-center text-success mb-4">Edit Brand</h3>
    <form action="" method="post" class="text-center">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="brand_name" class="form-label">Brand Name</label>
            <input type="text" name="brand_name" id="brand_name" class="form-control" required="required" value="<?php echo $brand_title; ?>">
        </div>
        <input type="submit" value="Update Brand" class="btn btn-info px-3 mb-3" name="edit_brand">
    </form>
</div>