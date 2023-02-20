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
    <title>Contact Us</title>
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <?php
                            if(isset($_SESSION['username'])){
                                ?>
                                  <li class='nav-item'>
                                <a class='nav-link' href='./cart.php'><i class='fa-solid fa-cart-shopping'></i><sup><?php cart_item(); ?></sup></a>
                            </li>
                            <?php
                            }else{
                                ?>
                                <li class='nav-item'>
                                <a class='nav-link' href='./users/user_login.php'><i class='fa-solid fa-cart-shopping'></i><sup><?php cart_item(); ?></sup></a>
                            </li>
                            <?php
                            }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price: <?php total_cart_price(); ?></a>
                        </li>
                    </ul>
                    <form class="d-flex" action="search_product.php" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
                    </form>
                </div>
            </div>
        </nav>
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
            <p class="text-center">Online shopping experience made easy. You can shop anytime.</p>
        </div>
        <!-- Section 4-->
        <!-- Contact Us Section -->
    <section class="Material-contact-section section-padding section-dark">
      <div class="container">
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                  <h1 class="section-title text-center my-4">Contact Us</h1>
              </div>
          </div>
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-4 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <p>Small shop situated at the heart of Dzwerani, just a few minutes from Ratshikuni Dzhavhelo. 
                    The shop was established in 2022, We offer our services and deliver our products all around South Africa. 
                </p>

                <div class="find-widget">
                 Company:  <a href="https://shengastore.co.za">Shenga Store</a>
                </div>
                <div class="find-widget">
                 Address: <a href="#">4435 Dzwerani Lwamondo, Thohoyandou</a>
                </div>
                <div class="find-widget">
                  Phone:  <a href="#">+27 015-890-9767</a>
                </div>
                
                <div class="find-widget">
                  Website:  <a href="https://shengastore.co.za">www.sengastore.co.za</a>
                </div>
              </div>
              <!-- contact form -->
              <div class="col-md-4 wow animated fadeInRight" data-wow-delay=".2s">
                  <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                      <!-- Name -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- email -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Subject -->
                      <div class="form-group label-floating">
                        <label class="control-label">Subject</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Message -->
                      <div class="form-group label-floating">
                          <label for="message" class="control-label">Message</label>
                          <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                      <!-- Form Submit -->
                      <div class="form-submit mt-5">
                          <button class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
              <div class="col-md-4 wow animated fadeInRight" data-wow-delay=".2s">
              <div class="container-fluid">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d917.7778030899763!2d30.436473829201407!3d-23.0563839990585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDAzJzIzLjAiUyAzMMKwMjYnMTMuMyJF!5e0!3m2!1sen!2sza!4v1676614423518!5m2!1sen!2sza" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>
            </div>
          </div>
      </div>
    </section>
        <!-- Adding footer -->
        <?php include('./includes/footer.php'); ?>
    </div>
    <!-- Bootstrap JS link --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script>  
</body>
</html>