<?php 

    session_start();

?>

<div class="header">
    <nav class="navbar bg-light py-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.svg" width="100px">
            </a>
            <form class="d-flex">
                <input class="form-control" type="search" placeholder="Search food products..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
            <a href="">Sing In</a>
            <a href="">Register</a>
            <button>
                <a href="cart.php" class="btn btn-outline-success">
                    <img src="images/cart.png" width="30px" height="30px">
                    Cart(<?php echo $_SESSION['quantity']; ?>)
                </a> 
            </button>
        </div>
    </nav>  
    
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Home</a>
                <a class="navbar-brand" href="products.php">Food Products</a>
                <a class="navbar-brand" href="drinks.php">Beverages</a>
                <a class="navbar-brand" href="health.php">Health & Beauty</a>
                <a class="navbar-brand" href="house.php">Household & Cleaning</a>
                <a class="navbar-brand" href="about.php">About</a>
            </div>
        </nav>   

        <img src="images/bgnd.jpg" width="1530px" height="300px">
</div>
