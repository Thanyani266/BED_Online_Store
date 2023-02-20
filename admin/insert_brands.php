<?php 

    include('../includes/connect.php');

    if(isset($_POST['insert_brand'])){
        $brand_name = $_POST['brand_title'];

        // Select data from database
        $select_query = "Select * from `brands` where brand_name='$category_name'";
        $result_select = mysqli_query($conn, $select_query);
        $number = mysqli_num_rows($result_select);

        if($number>0){
            echo  "<script>alert('This brand is present in the database')</script>";
        }else{
            $insert_query = "insert into `brands` (brand_name) values ('$brand_name')";
            $result = mysqli_query($conn, $insert_query);

            if($result){
                echo "<script>alert('Brand has been inserted successfully')</script>";
            }
        }
    }

?>

<h2 class="text-center text-success">Insert Brands</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-body-tertiary" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="Brands" 
                aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="btn btn-secondary border-0 p-2 my-3" name="insert_brand" value="Insert Brand"> 
    </div>
</form>