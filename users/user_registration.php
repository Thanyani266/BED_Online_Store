<?php
    include('../includes/connect.php');
    include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- Username -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter your usermane" autocomplete="off" required="required" name="user_username">
                    </div>
                    <!-- Email -->
                    <div class="form-outline mb-4">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="email" id="user_email" class="form-control" placeholder="Enter your email address" autocomplete="off" required="required" name="user_email">
                    </div>
                    <!-- Image -->
                    <div class="form-outline mb-4">
                        <label for="user_image" class="form-label">User Image</label>
                        <input type="file" id="user_image" class="form-control" required="required" name="user_image">
                    </div>
                    <!-- Password -->
                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password">
                    </div>
                    <!-- Confirm Password -->
                    <div class="form-outline mb-4">
                        <label for="conf_user_password" class="form-label">Confirm Password</label>
                        <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm your password" autocomplete="off" required="required" name="conf_user_password">
                    </div>
                    <!-- Address -->
                    <div class="form-outline mb-4">
                        <label for="user_address" class="form-label">Address</label>
                        <input type="text" id="user_address" class="form-control" placeholder="Enter your address" autocomplete="off" required="required" name="user_address">
                    </div>
                    <!-- Contact -->
                    <div class="form-outline mb-4">
                        <label for="user_contact" class="form-label">Contact</label>
                        <input type="text" id="user_contact" class="form-control" placeholder="Enter your phone number" autocomplete="off" required="required" name="user_contact">
                    </div>
                    <div class="text-center mt-4 pt-2">
                        <input type="submit" value="Register" class="btn btn-secondary py-2 px-3 border-0" name="user_register">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account?<a href="user_login.php" class="text-danger"> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<!-- PHP code -->
<?php
    if(isset($_POST['user_register'])){
        $user_username = $_POST['user_username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
        $conf_user_password = $_POST['conf_user_password'];
        $user_address = $_POST['user_address'];
        $user_contact = $_POST['user_contact'];
        $user_image = $_FILES['user_image']['name'];
        $user_image_tmp = $_FILES['user_image']['tmp_name'];
        $user_ip = getIPAddress();

        // Select_Query
        $select_query = "Select * from `user_table` where username='$user_username' or user_email='$user_email'";
        $result = mysqli_query($conn, $select_query);
        $rows_count = mysqli_num_rows($result);
        if($rows_count>0){
            echo "<script>alert('Username and email already exist')</script>";
        }else if($user_password != $conf_user_password){
            echo "<script>alert('Passwords do not match')</script>";
        }else{
            // Insert_Query
            move_uploaded_file($user_image_tmp, "./user_images/$user_image");
            $insert_query = "insert into `user_table` (username, user_email, user_password, user_image, user_ip, user_address, 
                        user_mobile) values ('$user_username', '$user_email', '$hash_password', '$user_image',
                        '$user_ip', '$user_address', '$user_contact')";
            $sql_execute = mysqli_query($conn, $insert_query);
        }

        // Selecting cart items
        $select_cart_items = "Select * from `cart_details` where ip_address='$user_ip'";
        $result_cart = mysqli_query($conn, $select_cart_items);
        $rows_count = mysqli_num_rows($result_cart);
        if($rows_count){
            $_SESSION['username'] = $user_username;
            echo "<script>alert('You have items in your cart')</script>";
            echo "<script>window.open('./user_login.php', '_self')</script>";
        }else{
            echo "<script>window.open('../index.php', '_self')</script>";
        }
    }
?>