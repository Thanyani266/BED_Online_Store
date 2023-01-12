<?php
  
  session_start();

    if(isset($_POST['add_to_cart'])){
    
        if(isset($_SESSION['cart'])){
      
            $products_array_ids = array_column($_SESSION['cart'], "product_id");
  
            if(!in_array($_POST['product_id'], $products_array_ids)){
                $product_id = $_POST['product_id'];
  
                $product_array = array(
                    'product_id'=>$product_id,
                    'product_name'=>$_POST['product_name'],
                    'product_price'=>$_POST['product_price'],
                    'product_image'=>$_POST['product_image'],
                    'product_quantity'=>$_POST['product_quantity']
                );
  
                $_SESSION['cart'][$product_id] = $product_array;
            }else{
  
                echo "<script>'Product already added'</script>";
  
            }
  
        }else{
  
            $product_id = $_POST['product_id'];
  
            $product_array = array(
                'product_id'=>$product_id,
                'product_name'=>$_POST['product_name'],
                'product_price'=>$_POST['product_price'],
                'product_image'=>$_POST['product_image'],
                'product_quantity'=>$_POST['product_quantity']
            );
  
            $_SESSION['cart'][$product_id] = $product_array;
  
        }

        calculateTotalCart();


    }else if(isset($_POST['remove-btn'])){

        $product_id = $_POST['product_id'];
        unset($_SESSION['cart'][$product_id]);

        calculateTotalCart();

    }else if(isset($_POST['edit_quantity_btn'])){

        $product_id = $_POST['product_id'];
        $product_quantity = $_POST['product_quantity'];

        $product = $_SESSION['cart'][$product_id];
        $product['product_quantity'] = $product_quantity;

        $_SESSION['cart'][$product_id] = $product;

        calculateTotalCart();

    }else{
        
    }

    function calculateTotalCart(){

        $total_price = 0;
        $total_quantity = 0;

        foreach($_SESSION['cart'] as $id=>$product){

            $product = $_SESSION['cart'][$id];
            $price = $product['product_price'];
            $quantity = $product['product_quantity'];

            $total_price = $total_price + ($price*$quantity);
            $total_quantity = $total_quantity + $quantity;
        }

        $_SESSION['total'] = $total_price;
        $_SESSION['quantity'] = $total_quantity;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHENGASTORE | Shopping Cart</title>
    <?php include 'links/css_links.php';?>
</head>
<body>

<!-------------------------------Header--------------------------------->
<div class="header">
    <?php include 'header.php';?>
</div>

<!-------------------------cart section-------------------------->

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>Cart</h1>
        </div>
        <div class="col-lg-8">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Product name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php if(isset($_SESSION['cart'])){ ?>
                    <?php foreach($_SESSION['cart'] as $key => $value){ ?>

                    <tr>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <img src="<?php echo 'images/sugars/'.$value['product_image']; ?>" style="width:150px;">
                                </div>
                                <div class="col">
                                    <p><?php echo $value['product_name']; ?></p>
                                    <small><span>R</span><?php echo $value['product_price']; ?></small>
                                    <br>
                                    <form action="cart.php" method="POST">
                                        <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                                        <input type="submit" class="remove-btn" name="remove-btn" value="remove">
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td>
                            <form method="POST" action="cart.php">
                                <input type="number" min="1" max="10" name="product_quantity" value="<?php echo $value['product_quantity']; ?>">
                                <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                                <input type="submit" name="edit_quantity_btn" value="edit"> 
                            </form>
                        </td>
                        <td>
                            <h5><?php echo $value['product_quantity']*$value['product_price']; ?></h5>
                        </td>
                    </tr>

                    <?php } ?>
                   <?php } ?> 
                </tbody>
            </table>
            <div>
                <table>
                    <tr>
                        <td>Total</td>
                        <?php if(isset($_SESSION['cart'])){ ?>
                        <td><?php echo "R".$_SESSION['total']; ?></td>
                        <?php } ?>
                    </tr>
                </table>
            </div>
            <div>
                <form method="GET" action="checkout.php">
                    <input type="submit" class="btn checkout-btn"value="Checkout" name="checkout_btn">
                </form>
            </div>
        </div>
    </div>
</div>

<!---------------------------Footer Section----------------------------->

   
   <?php include 'footer.php';?>
   <?php include 'links/js_links.php';?>

</body>
</html>