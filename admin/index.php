<?php
   include('../includes/connect.php');
   include('../functions/common_function.php');
   session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/style.css">
    <style>
        .pod-img {
            width: 100px;
            object-fit: contain;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <!-- Section 1 -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="" class="logo1">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
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

                    
                ?> 
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- Section 2 -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!-- Section 3 -->
        <div class="row">
            <div class="col-md-12 bg-body-tertiary p-1 d-flex align-items-center">
                <!--<div class="p-3">
                    <a href="#"><img src="../images/sugar20.webp" alt="" class="admin-img"></a>
                    <p class="text-center">Admin name</p>
                </div> -->
                <div class="button text-center mx-auto">
                    <button><a href="index.php?insert_products" class="nav-link my-1">Insert Products</a></button>
                    <button><a href="index.php?view_products" class="nav-link my-1">View Products</a></button>
                    <button><a href="index.php?insert_categories" class="nav-link my-1">Insert Categories</a></button>
                    <button><a href="index.php?view_categories" class="nav-link my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brands" class="nav-link my-1">Insert Brands</a></button>
                    <button><a href="index.php?view_brands" class="nav-link my-1">View Brands</a></button>
                    <button><a href="index.php?list_orders" class="nav-link my-1">All Orders</a></button>
                    <button><a href="index.php?list_payments" class="nav-link my-1">All Payments</a></button>
                    <button><a href="index.php?list_users" class="nav-link my-1">List Users</a></button>
                    <button>
                        <?php 
                        if(!isset($user)){
                            echo   "
                                   <a class='nav-link my-1' href='./admin_login.php'>Login</a>
                                ";
                        }else{
                            echo   "
                                   <a class='nav-link my-1' href='./admin_logout.php'>Logout</a>
                                ";
                        
                    } ?></button>
                </div>
            </div>
        </div>
        <!-- Section 4 -->
        <div class="container my-3">
            <?php
                 
                if(isset($_GET['insert_categories'])){
                    if(isset($user)){
                        include('insert_categories.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
                if(isset($_GET['insert_brands'])){
                    if(isset($user)){
                        include('insert_brands.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
                if(isset($_GET['insert_products'])){
                    if(isset($user)){
                        include('insert_products.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
                if(isset($_GET['view_products'])){
                    if(isset($user)){
                        include('view_products.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
                if(isset($_GET['edit_product'])){
                    if(isset($user)){
                        include('edit_product.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
                if(isset($_GET['delete_product'])){
                    if(isset($user)){
                        include('delete_product.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
                if(isset($_GET['view_categories'])){
                    if(isset($user)){
                        include('view_categories.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
                if(isset($_GET['view_brands'])){
                    if(isset($user)){
                        include('view_brands.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
                if(isset($_GET['edit_category'])){
                    if(isset($user)){
                        include('edit_category.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
                if(isset($_GET['edit_brand'])){
                    if(isset($user)){
                        include('edit_brand.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
                if(isset($_GET['delete_category'])){
                    if(isset($user)){
                        include('delete_category.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
                if(isset($_GET['delete_brand'])){
                    if(isset($user)){
                        include('delete_brand.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
                if(isset($_GET['list_orders'])){
                    if(isset($user)){
                        include('list_orders.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
                if(isset($_GET['list_payments'])){
                    if(isset($user)){
                        include('list_payments.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
                if(isset($_GET['list_users'])){
                    if(isset($user)){
                        include('list_users.php');
                    }else{
                        echo "<script>window.open('./admin_login.php')</script>";
                    }
                }
            ?>
        </div>
    </div>

    <!-- Adding footer -->
    <?php include('./includes/footer.php'); ?>

    <!-- Bootstrap JS link --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
    crossorigin="anonymous"></script>
</body>
</html>