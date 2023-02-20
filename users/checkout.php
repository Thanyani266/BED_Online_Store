<!-- Connection -->
<?php
   include('./includes/connect.php');
   @session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online store - Checkout page</title>
    <link rel="stylesheet" href="style.css">
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
                            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../display_products.php">Products</a>
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
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex" action="search_product.php" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
                    </form>
                </div>
            </div>
        </nav>
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
                                   <a class='nav-link' href='user_login.php'>Login</a>
                                </li>";
                    }else{
                        echo   "<li class='nav-item'>
                                   <a class='nav-link' href='logout.php'>Logout</a>
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
        <!-- Section 4-->
        <div class="row px-1">
            <div class="col-md-12">
                <!-- Products -->
                <div class="row">
                    <?php
                        session_start();
                        $user = $_SESSION['username'];
                        if(!isset($user)){
                            include('user_login.php');
                        }else{
                            include('payment.php');
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Adding footer -->
        <?php include('../includes/footer.php'); ?>
    </div>
    <!-- Bootstrap JS link --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>  
</body>
</html>