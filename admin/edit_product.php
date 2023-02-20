<?php 
    if(isset($_GET['edit_product'])){
        $edit_id = $_GET['edit_product'];
        $get_data = "Select * from `products` where product_id=$edit_id";
        $result = mysqli_query($conn, $get_data);
        $row = mysqli_fetch_assoc($result);
        $product_title = $row['product_name'];
        $product_description = $row['product_description'];
        $product_keywords = $row['product_keywords'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        $product_image = $row['product_image'];
        $product_price = $row['product_price'];

        // Fetching category name
        $select_category = "Select * from `catagories` where category_id=$category_id";
        $result_category = mysqli_query($conn, $select_category);
        $row_category = mysqli_fetch_assoc($result_category);
        $category_title = $row_category['category_name'];

        // Fetching category name
        $select_brand = "Select * from `brands` where brand_id=$brand_id";
        $result_brand = mysqli_query($conn, $select_brand);
        $row_brand = mysqli_fetch_assoc($result_brand);
        $brand_title = $row_brand['brand_name'];
    }
?>
<div class="container mt-5">
    <h1 class="text-center">Edit product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" id="product_name" value="<?php echo $product_title; ?>" name="product_title" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_desc" class="form-label">Product Description</label>
            <input type="text" id="product_desc" value="<?php echo $product_description; ?>" name="product_desc" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_key" class="form-label">Product Keywords</label>
            <input type="text" id="product_key" value="<?php echo $product_keywords; ?>" name="product_key" class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_category" class="form-label">Category</label>
            <select name="product_category" class="form-select">
                <option value="<?php echo $category_title; ?>"><?php echo $category_title; ?></option>
                <?php
                    $select_categories = "Select * from `catagories`";
                    $result_categories = mysqli_query($conn, $select_categories);
                    while($row_categories = mysqli_fetch_assoc($result_categories)){
                        $cat_title = $row_categories['category_name'];
                        $cat_id = $result_categories['category_id'];
                        echo "<option value='$cat_id'>$cat_title</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_brand" class="form-label">Brand</label>
            <select name="product_brand" class="form-select">
                <option value="<?php echo $brand_title; ?>"><?php echo $brand_title; ?></option>
                <?php
                    $select_brands = "Select * from `catagories`";
                    $result_brands = mysqli_query($conn, $select_brands);
                    while($row_brands = mysqli_fetch_assoc($result_brands)){
                        $br_title = $row_brands['brand_name'];
                        $br_id = $result_brands['brand_id'];
                        echo "<option value='$br_id'>$br_title</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image" class="form-label">Product image</label>
            <div class="d-flex">
                <input type="file" id="product_image" name="product_image" class="form-control w-90 m-auto" required="required">
                <img src="./product_images/<?php echo $product_image; ?>" alt="" class="pod-img">
            </div>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" id="product_price" value="<?php $product_price; ?>" name="product_price" class="form-control" required="required">
        </div>
        <div class="text-center">
            <input type="submit" value="Update Product" name="edit_product" class="btn btn-info px-3 mb-3">
        </div>
    </form>
</div>

<!-- updating the product -->
<?php 
    if(isset($_POST['edit_product'])){
        $product_title = $_POST['product_name'];
        $product_description = $_POST['product_description'];
        $product_keywords = $_POST['product_keywords'];
        $product_category = $_POST['category_id'];
        $product_brand = $_POST['brand_id'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image']['name'];
        $temp_image = $_POST['product_image']['tmp_name'];
        
        // Checking if all required fields are filled
        if($product_title=='' or $product_description=='' or $product_keywords=='' or $product_category=='' or $product_brand=='' or
           $product_price=='' or $product_image=='' ){
            echo "<script>alert('Please fill all the required fields')</script>";

        }else{
            move_uploaded_file($temp_image, "./product_images/$product_image");

            // Query to update products
            $update_product = "update `products` set product_name='$product_title',product_description='$product_description',
                               category_id='$product_category',brand_id='$product_brand',product_image='$product_image',
                               product_price='$product_price',date=NOW() where product_id=$edit_id";
            $result_update = mysqli_query($conn, $update_product);
            if($result_update){
                echo "<script>alert('Product updated successfully')</script>";
                echo "<script>window.open('./view_products.php', '_self')</script>";
            }
        }
    }
?>