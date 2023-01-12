<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHENGASTORE | Online Grocery Shopping</title>
    <?php include 'links/css_links.php';?>
</head>
<body>

<!-------------------------------Header--------------------------------->

<?php include 'header.php';?>

<!-------------------------Featured Specials---------------------------->

<div class="container mt-2">
    <h2 class="title">Specials</h2>
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="images/special1.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <span>Snowflake</span>
                    <p class="card-text">Cake Weat Flour 1kg.</p>
                    <h5 class="card-title">R9.99</h5>
                    <a href="#" class="btn btn-primary">Add to card</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="images/special2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span>Snowflake</span>
                    <p class="card-text">Cake Weat Flour 1kg.</p>
                    <h5 class="card-title">R9.99</h5>
                    <a href="#" class="btn btn-primary">Add to card</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="images/special3.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <span>Snowflake</span>
                    <p class="card-text">Cake Weat Flour 1kg.</p>
                    <h5 class="card-title">R9.99</h5>
                    <a href="#" class="btn btn-primary">Add to card</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="images/special4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span>Snowflake</span>
                    <p class="card-text">Cake Weat Flour 1kg.</p>
                    <h5 class="card-title">R9.99</h5>
                    <a href="#" class="btn btn-primary">Add to card</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="images/special5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span>Snowflake</span>
                    <p class="card-text">Cake Weat Flour 1kg.</p>
                    <h5 class="card-title">R9.99</h5>
                    <a href="#" class="btn btn-primary">Add to card</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="images/special6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span>Snowflake</span>
                    <p class="card-text">Cake Weat Flour 1kg.</p>
                    <h5 class="card-title">R9.99</h5>
                    <a href="#" class="btn btn-primary">Add to card</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="images/special7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span>Snowflake</span>
                    <p class="card-text">Cake Weat Flour 1kg.</p>
                    <h5 class="card-title">R9.99</h5>
                    <a href="#" class="btn btn-primary">Add to card</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="images/special8.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <span>Snowflake</span>
                    <p class="card-text">Cake Weat Flour 1kg.</p>
                    <h5 class="card-title">R9.99</h5>
                    <a href="#" class="btn btn-primary">Add to card</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 text-center">
        <a class="btn" href="specials.php">More specials &#8594;</a>
    </div>
</div>


   
<!-----------------------------Testimonial------------------------------>

   <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <?php include('get_users.php'); ?>
                <?php foreach($customers as $customer) { ?>
                <div class="col-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-quote" viewBox="0 0 16 16">
                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                        <path d="M7.066 6.76A1.665 1.665 0 0 0 4 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"/>
                    </svg>
                    <p><?php echo $customer['review']; ?></p>
                    <div class="rating">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </div>
                    <h3><?php echo $customer['firstname']; ?></h3>
                </div>
                <?php } ?>
            </div>
        </div>
   </div>

<!--------------------------------Brands-------------------------------->

   <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/brand1.png">
                </div>
                <div class="col-5">
                    <img src="images/brand2.jpg">
                </div>
                <div class="col-5">
                    <img src="images/brand3.jpg">
                </div>
                <div class="col-5">
                    <img src="images/brand4.png">
                </div>
                <div class="col-5">
                    <img src="images/brand5.png">
                </div>
            </div>
        </div>
    </div>

   
<!---------------------------Footer Section----------------------------->

   
   <?php include 'footer.php';?>
   <?php include 'links/js_links.php';?>

</body>
</html>