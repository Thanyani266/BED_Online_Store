<?php
    // Including connection file
    //include('./includes/connect.php');

    // Getting products
    function getproducts(){
        global $conn;
        // Condition to check isset or not
        if(!isset($_GET['category'])){
            if(!isset($_GET['brand'])){
                $select_query = "Select * from `products` order by rand() limit 8";
                $result_query = mysqli_query($conn, $select_query);
                
                while($row = mysqli_fetch_assoc($result_query)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_name'];
                    $product_description = $row['product_description'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];
                    $product_image = $row['product_image'];
                    $product_price = $row['product_price'];
                    $select_stock = "Select * from `stock_table` where stock_id=$product_id";
                    $result_stock = mysqli_query($conn, $select_stock);
                    while($row_stock = mysqli_fetch_assoc($result_stock)){
                        $units = $row_stock['stock_qty'];
                        
                        if($units == 0){
                            echo "<div class='col-md-3 mb-2'>
                                   <div class='card'>
                                    <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>$product_title</h5>
                                        <p class='card-text text-danger'>Out of stock</p>
                                        <p class='card-text'>R $product_price</p>
                                        <a href='' class='btn btn-warning'>Add to cart</a>
                                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                                    </div>
                                  </div>
                                </div>";
                        }else{
                            echo "<div class='col-md-3 mb-2'>
                                   <div class='card'>
                                    <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>$product_title</h5>
                                        <p class='card-text text-success'>Only $units units left</p>
                                        <p class='card-text'>R $product_price</p>
                                        <a href='index.php?add_to_cart=$product_id' class='btn btn-warning'>Add to cart</a>
                                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                                    </div>
                                  </div>
                                </div>";
                        }

                    }
                }
            }
        }
    }

    // Getting all products
    function getallproducts(){
        global $conn;
        // Condition to check isset or not
        if(!isset($_GET['category'])){
            if(!isset($_GET['brand'])){
                $select_query = "Select * from `products` order by rand()";
                $result_query = mysqli_query($conn, $select_query);
                while($row = mysqli_fetch_assoc($result_query)){
                    ;
                    $product_id = $row['product_id'];
                    $product_title = $row['product_name'];
                    $product_description = $row['product_description'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];
                    $product_image = $row['product_image'];
                    $product_price = $row['product_price'];
                    $select_stock = "Select * from `stock_table` where stock_id=$product_id";
                    $result_stock = mysqli_query($conn, $select_stock);
                    while($row_stock = mysqli_fetch_assoc($result_stock)){
                        $units = $row_stock['stock_qty'];
                        if($units==0){
                            echo "<div class='col-md-3 mb-2 mn'>
                                <div class='card'>
                                    <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>$product_title</h5>
                                        <p class='card-text text-danger'>Out of stock</p>
                                        <p class='card-text'>R $product_price</p>
                                        <a href='' class='btn btn-warning'>Add to cart</a>
                                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                                    </div>
                                </div>
                            </div>";
                        }else{
                            echo "<div class='col-md-3 mb-2 mn'>
                                <div class='card'>
                                    <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>$product_title</h5>
                                        <p class='card-text text-success'>Only $units units left</p>
                                        <p class='card-text'>R $product_price</p>
                                        <a href='index.php?add_to_cart=$product_id' class='btn btn-warning'>Add to cart</a>
                                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                                    </div>
                                </div>
                            </div>";
                        }
                    }
                }
            }
        }
    }

    // Getting products from the same category
    function getbycat(){
        global $conn;
        // Condition to check isset or not
        if(isset($_GET['category'])){
            $category_id = $_GET['category'];
            $select_query = "Select * from `products` where category_id=$category_id";
            $result_query = mysqli_query($conn, $select_query);
            $num_of_rows = mysqli_num_rows($result_query);
            if($num_of_rows==0){
                echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
            }
            
            while($row = mysqli_fetch_assoc($result_query)){
                $product_id = $row['product_id'];
                $product_title = $row['product_name'];
                $product_description = $row['product_description'];
                $category_id = $row['category_id'];
                $brand_id = $row['brand_id'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                $select_stock = "Select * from `stock_table`  where stock_id=$product_id";
                $result_stock = mysqli_query($conn, $select_stock);
                while($row_stock = mysqli_fetch_assoc($result_stock)){
                    $units = $row_stock['stock_qty'];
                    if($units==0){
                        echo "<div class='col-md-3 mb-2'>
                            <div class='card'>
                                <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text text-danger'>Out of stock</p>
                                    <p class='card-text'>R $product_price</p>
                                    <a href='' class='btn btn-warning'>Add to cart</a>
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                                </div>
                            </div>
                        </div>";
                    }else{
                        echo "<div class='col-md-3 mb-2'>
                            <div class='card'>
                                <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text text-success'>Only $units units left</p>
                                    <p class='card-text'>R $product_price</p>
                                    <a href='index.php?add_to_cart=$product_id' class='btn btn-warning'>Add to cart</a>
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                                </div>
                            </div>
                        </div>";
                    }
                }
            }
        }
        
    }

    // Getting products from the same brand
    function getbybrand(){
        global $conn;
        // Condition to check isset or not
        if(isset($_GET['brand'])){
            $brand_id = $_GET['brand'];
            $select_query = "Select * from `products` where brand_id=$brand_id";
            $result_query = mysqli_query($conn, $select_query);
            $num_of_rows = mysqli_num_rows($result_query);
            if($num_of_rows==0){
                echo "<h2 class='text-center text-danger'>This brand is not available for service</h2>";
            }
            
            while($row = mysqli_fetch_assoc($result_query)){
                ;
                $product_id = $row['product_id'];
                $product_title = $row['product_name'];
                $product_description = $row['product_description'];
                $category_id = $row['category_id'];
                $brand_id = $row['brand_id'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                $select_stock = "Select * from `stock_table` where stock_id=$product_id";
                $result_stock = mysqli_query($conn, $select_stock);
                while($row_stock = mysqli_fetch_assoc($result_stock)){
                    $units = $row_stock['stock_qty'];
                    if($units ==0 ){
                        echo "<div class='col-md-3 mb-2'>
                            <div class='card'>
                                <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text text-danger'>Out of stock</p>
                                    <p class='card-text'>R $product_price</p>
                                    <a href='' class='btn btn-warning'>Add to cart</a>
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                                </div>
                            </div>
                        </div>";
                    }else{
                        echo "<div class='col-md-3 mb-2'>
                            <div class='card'>
                                <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text text-success'>Only $units units left</p>
                                    <p class='card-text'>R $product_price</p>
                                    <a href='index.php?add_to_cart=$product_id' class='btn btn-warning'>Add to cart</a>
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                                </div>
                            </div>
                        </div>";
                    }
                }
            }
        }
        
    }

    // Displaying brands in sidenav
    function getbrands(){
        global $conn;
        $select_brands = "Select * from `brands`";
        $result_brands = mysqli_query($conn, $select_brands); 
                        //$row_data = mysqli_fetch_assoc($result_brands);
                        //echo $row_data['brand_name'];
        while($row_data = mysqli_fetch_assoc($result_brands)){
            $brand_title = $row_data['brand_name'];
            $brand_id = $row_data['brand_id'];
            echo "  <li class='nav-item'>
                        <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
                    </li>";
        }
    }

    // Displaying categories in sidenav
    function getcategories(){
        global $conn;
        $select_categories = "Select * from `categories`";
        $result_categories = mysqli_query($conn, $select_categories); 
        //$row_data = mysqli_fetch_assoc($result_brands);
        //echo $row_data['brand_name'];
        while($row_data = mysqli_fetch_assoc($result_categories)){
            $category_title = $row_data['category_name'];
            $category_id = $row_data['category_id'];
            echo "  <li class='nav-item'>
                        <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
                    </li>";
        }
    }

    // Searching products 
    function searchproduct(){
        global $conn;
        if(isset($_GET['search_data_product'])){
            $search_data = $_GET['search_data'];
            $search_query = "Select * from `products` where product_keywords like '%$search_data%'";
            $result_query = mysqli_query($conn, $search_query);
            $num_of_rows = mysqli_num_rows($result_query);
            if($num_of_rows==0){
                echo "<h2 class='text-center text-danger'>No results match. No products found on this category</h2>";
            }
            while($row = mysqli_fetch_assoc($result_query)){
                $product_id = $row['product_id'];
                $product_title = $row['product_name'];
                $product_description = $row['product_description'];
                $category_id = $row['category_id'];
                $brand_id = $row['brand_id'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                $select_stock = "Select * from `stock_table` where stock_id=$product_id";
                $result_stock = mysqli_query($conn, $select_stock);
                while($row_stock = mysqli_fetch_assoc($result_stock)){
                    $units = $row_stock['stock_qty'];
                    if($units ==0 ){
                        echo "<div class='col-md-3 mb-2'>
                            <div class='card'>
                                <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text text-danger'>Out of stock</p>
                                    <p class='card-text'>R $product_price</p>
                                    <a href='' class='btn btn-primary'>Add to cart</a>
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                                </div>
                            </div>
                        </div>";
                    }else{
                        echo "<div class='col-md-3 mb-2'>
                            <div class='card'>
                                <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text text-success'>Only $units units left</p>
                                    <p class='card-text'>R $product_price</p>
                                    <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                                </div>
                            </div>
                        </div>";
                    }
                }
            }
        }
    }

    // View details
    function view_details(){
        global $conn;
        // Condition to check isset or not
        if(isset($_GET['product_id'])){
            if(!isset($_GET['category'])){
                if(!isset($_GET['brand'])){
                    $product_id = $_GET['product_id'];
                    $select_query = "Select * from `products` where product_id=$product_id";
                    $result_query = mysqli_query($conn, $select_query);
                    while($row = mysqli_fetch_assoc($result_query)){
                        $product_id = $row['product_id'];
                        $product_title = $row['product_name'];
                        $product_description = $row['product_description'];
                        $category_id = $row['category_id'];
                        $brand_id = $row['brand_id'];
                        $product_image = $row['product_image'];
                        $product_price = $row['product_price'];
                        $select_stock = "Select * from `stock_table` where stock_id=$product_id";
                        $result_stock = mysqli_query($conn, $select_stock);
                        while($row_stock = mysqli_fetch_assoc($result_stock)){
                            $units = $row_stock['stock_qty'];
                            if($units ==0 ){
                                echo " <div class='col-md-6 mb-2'>
                                        <div class='card border-0'>
                                        <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                                        <div class='card-body text-center'>
                                            <p class='card-text text-danger'>Out of stock</p>
                                            <a href='' class='btn btn-warning'>Add to cart</a>
                                            <a href='index.php' class='btn btn-secondary'>Go Back</a>
                                        </div>
                                       </div>
                                     </div>
                                   <div class='col-md-6'>
                                    <h3 class='card-text'>R $product_price</h3>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text'>$product_description</p>
                                   </div>";
                            }else{
                                echo "<div class='col-md-6 mb-2'>
                                           <div class='card border-0'>
                                          <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                                          <div class='card-body text-center'>
                                          <p class='card-text text-success'>Only $units units left</p>
                                            <a href='index.php?add_to_cart=$product_id' class='btn btn-warning'>Add to cart</a>
                                    <a href='index.php' class='btn btn-secondary'>Go Back</a>
                                        </div>
                                     </div>
                                        </div>
                                       <div class='col-md-6'>
                                    <h3 class='card-text'>R $product_price</h3>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text'>$product_description</p>
                                </div>";
                            }
                        }
                    }
                }
            }
        }
    }

    // Getting the IP Address
    function getIPAddress() {  
        //whether ip is from the share internet  
        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
            $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
        //whether ip is from the proxy  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
        }  
        //whether ip is from the remote address  
        else{  
            $ip = $_SERVER['REMOTE_ADDR'];  
        }  
        return $ip;  
    } 
    
    // cart details
    function cart(){
        if(isset($_GET['add_to_cart'])){
            global $conn;
            $ip = getIPAddress();
            $get_product_id = $_GET['add_to_cart'];
            $select_query = "Select * from `cart_details` where ip_address='$ip' and product_id=$get_product_id";
            $result_query = mysqli_query($conn, $select_query);
            $num_of_rows = mysqli_num_rows($result_query);
                if($num_of_rows>0){
                    echo "<script>alert('This item is already present inside the cart')</script>";
                    echo "<script>window.open('index.php', '_self')</script>";
                }else{
                    $insert_query = "insert into `cart_details` (product_id, ip_address, quantity) values ($get_product_id, '$ip',1)";
                    $result_query = mysqli_query($conn, $insert_query);
                    echo "<script>alert('Item is added to cart')</script>";
                    echo "<script>window.open('index.php', '_self')</script>";
                }
            
        }
    }

    // adding number to cart
    function cart_item(){
        if(isset($_GET['add_to_cart'])){
            global $conn;
            $ip = getIPAddress();
            $select_query = "Select * from `cart_details` where ip_address='$ip'";
            $result_query = mysqli_query($conn, $select_query);
            $count_cart_items = mysqli_num_rows($result_query);
        }else{
            global $conn;
            $ip = getIPAddress();
            $select_query = "Select * from `cart_details` where ip_address='$ip'";
            $result_query = mysqli_query($conn, $select_query);
            $count_cart_items = mysqli_num_rows($result_query);
                
        }
        echo $count_cart_items;
    }

    // Getting total price
    function total_cart_price(){
        global $conn;
        $ip = getIPAddress();
        $total_price = 0;
        $cart_query = "Select * from `cart_details` where ip_address='$ip'";
        $result = mysqli_query($conn, $cart_query);
        while($row=mysqli_fetch_array($result)){
            $product_id = $row['product_id'];
            $select_products = "Select * from `products` where product_id='$product_id'";
            $result_products = mysqli_query($conn, $select_products);
            while($row_product_price=mysqli_fetch_array($result_products)){
                $product_price = array($row_product_price['product_price']);
                $product_values = array_sum($product_price);
                $total_price += $product_values;
            }
        }
        echo $total_price;
    }

    // Get user's order details
    function profile_details(){
        global $conn;
        $username = $_SESSION['username'];
        $get_details = "Select * from `user_table` where username='$username'";
        $result_query = mysqli_query($conn, $get_details);
        while($row_query=mysqli_fetch_array($result_query)){
            $user_id =$row_query['user_id'];
            if(!isset($_GET['edit_account'])){
                if(!isset($_GET['my_orders'])){
                    if(!isset($_GET['delete_account'])){
                        $get_orders = "Select * from `user_orders` where user_id=$user_id and order_status='pending'";
                        $orders_query = mysqli_query($conn, $get_orders);
                        $row_count = mysqli_num_rows($orders_query);
                        if($row_count>0){
                            echo "<h3 class='text-center text-success mt-5 mb-2'>You have <span class='text-danger'>$row_count</span> pending orders</h3>
                                  <p class='text-center'><a href='profile.php?my_orders' class='text-dark'>Order Details</a></p>";
                        }else{
                            echo "<h3 class='text-center text-success mt-5 mb-2'>You have zero pending orders</h3>
                                  <p class='text-center'><a href='../index.php' class='text-dark'>Explore products</a></p>";
                        }
                    }
                }
            }
        }
    }
?>