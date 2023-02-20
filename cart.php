<!-- Connection -->
<?php
   include('./includes/connect.php');
   include('./functions/common_function.php');
   @session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online store - cart details</title>
    <link rel="stylesheet" href="./styles/style.css">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./images/logo.png" alt="" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="display_products.php">Products</a>
                        </li>
                        <?php
                            if(isset($_SESSION['username'])){
                                echo "  <li class='nav-item'>
                                            <a class='nav-link' href='./users/profile.php'>My Account</a>
                                        </li>";
                            }else{
                                echo "  <li class='nav-item'>
                                            <a class='nav-link' href='./users/user_registration.php'>Register</a>
                                        </li>";
                            }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- cart function-->
        <?php 
            cart(); 
        ?>
        <!-- Section 2-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <?php 
                    session_start();
                    $user = $_SESSION['username'];
                    if(!isset($user)){
                        echo   "<li class='nav-item'>
                                    <a class='nav-link' href='#'>Welcome Guest</a>
                                </li>";
                    }else{
                        echo   "<li class='nav-item'>
                                    <a class='nav-link' href='#'>Welcome $user</a>
                                </li>";
                    }

                    if(!isset($user)){
                        echo   "<li class='nav-item'>
                                   <a class='nav-link' href='./users/user_login.php'>Login</a>
                                </li>";
                    }else{
                        echo   "<li class='nav-item'>
                                   <a class='nav-link' href='./users/logout.php'>Logout</a>
                            </li>";
                    }
                ?>
            </ul>
        </nav>
        <!-- Section 3-->
        <div class="bg-light">
            <h3 class="text-center">Shenga Store</h3>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur odit dolores alias.</p>
        </div>
        <!-- Section 4 -->
        <div class="container">
            <div class="row">
                <form action="" method="post">
                <table class="table table-boardered">
                    <tbody>
                        <?php  
                            $ip = getIPAddress();
                            $total_price = 0;
                            $cart_query = "Select * from `cart_details` where ip_address='$ip'";
                            $result = mysqli_query($conn, $cart_query);
                            $result_count = mysqli_num_rows($result);
                            if($result_count>0){
                                echo   "<thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Product Image</th>
                                                <th>Price</th>
                                                <th>Update</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>";
                                while($row=mysqli_fetch_array($result)){
                                    $product_id = $row['product_id'];
                                    $select_products = "Select * from `products` where product_id='$product_id'";
                                    $result_products = mysqli_query($conn, $select_products);
                                    while($row_product_price=mysqli_fetch_array($result_products)){
                                        $product_price = array($row_product_price['product_price']);
                                        $price_table = $row_product_price['product_price'];
                                        $product_title = $row_product_price['product_name'];
                                        $product_image = $row_product_price['product_image'];
                                        $product_values = array_sum($product_price);
                                        $total_price += $product_values; 
                        ?>
                        <tr>
                            <td><?php echo $product_title; ?></td>
                            <td><img src="./admin/product_images/<?php echo $product_image; ?>" alt="" class="cart_img"></td>
                            <?php

                                $select_item = "Select * from `cart_details` where product_id=$product_id";
                                $result_item = mysqli_query($conn, $select_item);
                                $rowd = mysqli_fetch_assoc($result_item);
                                $quantity = $rowd['quantity'];
                                if(isset($_POST['update_item'])){
                                    $update_value = $_POST['update_quantity'];
                                    $update_id = $_POST['update_quantity_id'];
                                    $update_query = "update `cart_details` set quantity=$update_value where product_id=$update_id";
                                    $result_item = mysqli_query($conn, $update_query);
                                    $total_price = $total_price * $quantity;
                                }
                            ?>
                            <td><?php echo $subtotal = $price_table * $quantity; ?></td>
                            <!--<td><input type="checkbox" name="removeitem" value="<?php //echo $product_id ?>"></td> -->
                            <td>
                            <form action="" method="post">
                                <input type="hidden" value="<?php echo $product_id; ?>" class="px-3 py-2 border-0 mx-3" name="update_quantity_id">
                                <input type="number" value="<?php echo $quantity; ?>" name="update_quantity" min="1">
                                <input type="submit" value="Update" name="update_item">
                            </form>
                            </td>
                            
                            <td><a href='./cart.php?delete_item=<?php echo $product_id; ?>'><i class='fa-solid fa-trash'></i></a></td>
                            <!--<td><input type="submit" value="Remove" class="px-3 py-2 border-0 mx-3" name="remove_cart"></td> -->
                        </tr>
                        <?php
                                    }
                                }
                            }else{
                                echo "<h2 class='text-center text-danger'>The cart is empty</h2>";
                            }
                        ?>
                    </tbody>
                </table>
                <!-- Subtotal -->
                <div class="d-flex mb-5">
                    <?php 
                        $ip = getIPAddress();
                        $cart_query = "Select * from `cart_details` where ip_address='$ip'";
                        $result = mysqli_query($conn, $cart_query);
                        $result_count = mysqli_num_rows($result);
                        if($result_count>0){
                            echo "<h4 class='px-3'>Total:<strong class='text-success'>R $total_price</strong></h4>
                                  <input type='submit' value='Continue Shopping' class='px-3 py-2 border-0 mx-3' name='continue_shopping'>
                                  <button class='px-3 py-2 border-0 bg-secondary'><a href='./users/checkout.php'>Checkout</a></button>";
                        }else{
                            echo "<input type='submit' value='Continue Shopping' class='px-3 py-2 border-0 mx-3' name='continue_shopping'>";
                        }
                        if(isset($_POST['continue_shopping'])){
                            echo "<script>window.open('index.php', '_self')</script>";
                        }
                    ?>
                    
                </div>
                </form>
                <!-- Removing an item from the cart -->
                <?php 
                    if(isset($_GET['delete_item'])){
                        include('delete_item.php');
                    }
                    
                ?>
            </div>
        </div>
        <!-- Adding footer -->
        <?php include('./includes/footer.php'); ?>
    </div>
    <!-- Bootstrap JS link --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>  
</body>
</html>