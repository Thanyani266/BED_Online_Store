<?php

    session_start();

    include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHENGASTORE | Payment</title>
    <?php include 'links/css_links.php';?>
</head>
<body>

<!------------------------Header---------------------------->
<div class="header">
    <?php include 'header.php';?>
</div>

<!------------------------Payment---------------------------->
<section class="my-5 py-5 checkout">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Payment</h2>
        <hr class="mx-auto">
    </div>
    <div class="mx-auto container text-center">
        <?php if(isset($_SESSION['total']) && $_SESSION['total'] != 0) { ?>
        <p>Total:<?php echo "R".$_SESSION['total']; ?></p>
        <?php } else { ?>
            <p>You don't have any order</p>
        <?php } ?>
    </div>
</section>


<!---------------------------Footer Section----------------------------->

   
   <?php include 'footer.php';?>
   <?php include 'links/js_links.php';?>

</body>
</html>