<?php
   include('../includes/connect.php');
   
   if(isset($_POST['insert_product'])){
      $product_title = $_POST['product_title'];
      $description = $_POST['description'];
      $product_keywords = $_POST['product_keywords'];
      $product_category = $_POST['product_category'];
      $product_brand = $_POST['product_brands'];
      $product_price = $_POST['product_price'];
      $qty = $_POST['stock_qty'];
      $product_status = "true";

      // Accessing an image
      $product_image = $_FILES['product_image']['name'];

      // Accessing an image temp name
      $temp_image = $_FILES['product_image']['tmp_name'];

      // Checking empty condition
      if($product_title=="" or $description=="" or $product_keywords=="" or $product_category=="" or $product_brand=="" or $product_price=="" or $product_image==""){
        echo "<script>alert('Please fill all the available fields')</script>";
        exit();
      }else{
        move_uploaded_file($temp_image, "./product_images/$product_image");

        // insert query
        $insert_products = "insert into `products` (product_name, product_description, product_keywords, category_id, brand_id,
                                product_image, product_price, date, status) values ('$product_title', '$description', '$product_keywords',
                                '$product_category', '$product_brand', '$product_image', '$product_price', NOW(), '$product_status')";
        $result_query = mysqli_query($conn, $insert_products);
        if($result_query){
            echo "<script>alert('Successfully inserted the product')</script>";
        }
        
        $insert_stock = "insert into `stock_table` (product_name, stock_qty) values ('$product_title', $qty)";  
        $result_stock = mysqli_query($conn, $insert_stock);
        if($result_stock){
            echo "<script>alert('Successfully inserted the stock')</script>";
        }
        
      }
    }
?>

        <h2 class="text-center text-success">Insert Products</h2>
        <!-- Form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Product name -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product name</label>
                <input type="text" name="product_title" id="product_title" class="form-control mb-4" 
                        placeholder="Enter product name" autocomplete="off" require="required">
            </div>
            <!-- Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product description</label>
                <input type="text" name="description" id="description" class="form-control mb-4" 
                        placeholder="Enter product description" autocomplete="off" require="required">
            </div>
            <!-- Keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control mb-4" 
                        placeholder="Enter product keywords" autocomplete="off" require="required">
            </div>
            <!-- Categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select mb-4">
                    <option value="">Select category</option>
                    <?php
                        $select_query = "Select * from `categories`";
                        $result_query = mysqli_query($conn, $select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $category_title = $row['category_name'];
                            $category_id = $row['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select mb-4">
                    <option value="">Select Brand</option>
                    <?php
                        $select_query = "Select * from `brands`";
                        $result_query = mysqli_query($conn, $select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $brand_title = $row['brand_name'];
                            $brand_id = $row['brand_id'];
                            echo "<option value='$brand_id'>$brand_title</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- Image -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image" class="form-label">Product image</label>
                <input type="file" name="product_image" id="product_image" class="form-control mb-4" 
                        placeholder="Enter product image" require="required">
            </div>
            <!-- Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control mb-4" 
                        placeholder="Enter product price" autocomplete="off" require="required">
            </div>
            <!-- Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="stock_qty" class="form-label">Units</label>
                <input type="text" name="stock_qty" id="stock_qty" class="form-control mb-4" 
                        placeholder="Enter units" autocomplete="off" require="required">
            </div> 
            <!-- Submit button -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-secondary mt-3 mb-3 px-3" value="Insert Product">
            </div>
        </form>
    </div>