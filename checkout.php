<?php

   session_start();

   if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){

    header('location: index.php');

   }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHENGASTORE | About us</title>
    <?php include 'links/css_links.php';?>
</head>
<body>

<!-------------------------------Header--------------------------------->
<div class="header">
    <?php include 'header.php';?>
</div>

<!------------------------Checkout form---------------------------->
<section class="my-5 py-5 checkout">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Check Out</h2>
        <hr class="mx-auto">
    </div>
    <div class="mx-auto container">
        <form id="checkout-form" action="place_order.php" method="POST">
            <div class="form-group checkout-small-element">
                <label for="">Name</label>
                <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group checkout-small-element">
                <label for="">Email</label>
                <input type="email" class="form-control" id="checkout-email" name="email" placeholder="Email Address" required>
            </div>
            <div class="form-group checkout-small-element">
                <label for="">Phone</label>
                <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Phone Number" required>
            </div>
            <div class="form-group checkout-small-element">
                <label for="">City</label>
                <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required>
            </div>
            <div class="form-group checkout-large-element">
                <label for="">Address</label>
                <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required>
            </div>
            <div class="form-group checkout-btn-container">
                <p>Total amount: <?php echo "R".$_SESSION['total']; ?></p>
                <input type="submit" class="btn" id="checkout-btn" name="checkout_btn">
            </div>
        </form>
    </div>
</section>


<!---------------------------Footer Section----------------------------->

   
   <?php include 'footer.php';?>
   <?php include 'links/js_links.php';?>

</body>
</html>