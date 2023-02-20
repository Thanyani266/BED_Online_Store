<?php
    include('../includes/connect.php');
    @session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
    <style>
        body{
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="container_fluid m-3">
        <h2 class="text-center mb-5">Admin Login</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-xl-5">
                <img src="../images/background.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-5">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="admin_username" class="form-label">Username</label>
                        <input type="text" id="admin_username" name="admin_username" placeholder="Enter username" required="required" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter password" required="required" class="form-control">
                    </div>
                    <div>
                        <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="admin_login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<!-- PHP code -->
<?php
    if(isset($_POST['admin_login'])){
        $admin_name = $_POST['admin_username'];
        $admin_password = $_POST['password'];
        $select_query = "Select * from `admin_table` where admin_name='$admin_name'";
        $result = mysqli_query($conn, $select_query);
        $row_count = mysqli_num_rows($result);
        $row_data = mysqli_fetch_assoc($result);

        
        $_SESSION['admin_username'] = $admin_name;
        if(password_verify($admin_password, $row_data['admin_password'])){ 
            $_SESSION['username'] = $admin_name;
            echo "<script>alert('Login successful')</script>";
            echo "<script>window.open('./index.php', '_self')</script>";
        }else{
            echo "<script>alert('Invalid credentials')</script>";
        }
    }
?>