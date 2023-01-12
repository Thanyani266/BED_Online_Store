<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHENGASTORE | Food Products</title>
    <?php include 'links/css_links.php';?>
</head>
<body>

<!-------------------------------Header--------------------------------->
<div class="header">
    <?php include 'header.php';?>
</div>

<!-------------------------Featured Specials---------------------------->

<div class="container mt-2">
    <h2 class="title">Chocolates and Sweets</h2>
    <div class="row">
        <?php include('get_products.php'); ?>
        <?php foreach($products as $product) { ?>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="images/sugars/<?php echo $product['product_image']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><?php echo $product['product_name']; ?></p>
                    <h5 class="card-title">R<?php echo $product['product_price']; ?></h5>
                    <!------<a href="#" class="btn btn-primary">Add to card</a>-------->

                    <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>"/>
                        <input type="hidden" name="product_name" value="<?php echo $product['product_name']; ?>"/>
                        <input type="hidden" name="product_price" value="<?php echo $product['product_price']; ?>"/>
                        <input type="hidden" name="product_type" value="<?php echo $product['product_type']; ?>"/>
                        <input type="hidden" name="product_category" value="<?php echo $product['product_category']; ?>"/>
                        <input type="hidden" name="product_image" value="<?php echo $product['product_image']; ?>"/>
                        <input type="hidden" name="product_quantity" value="1"/>
                        <input type="submit" name="add_to_cart" value="Add to cart"/>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!---------------------------Footer Section----------------------------->

   
   <?php include 'footer.php';?>
   <?php include 'links/js_links.php';?>

</body>
</html>