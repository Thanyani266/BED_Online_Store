<h3 class="text-center text-success">All Users</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <?php
        $get_table = "Select * from `user_table`";
        $result = mysqli_query($conn, $get_table);
        $row_count = mysqli_num_rows($result);
        
        
        if($row_count==0){
            echo "<h2 class='bg-danger text-center mt-5'>No user(s) yet</h2>";
        }else{
            echo "<tr>
            <th>User Id</th>
            <th>Username</th>
            <th>User email</th>
            <th>User image</th>
            <th>User address</th>
            <th>User mobile</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class='bg-secondary text-light'>";
            while($row_data=mysqli_fetch_assoc($result)){
                $user_id = $row_data['user_id'];
                $user_email = $row_data['user_email'];
                $username = $row_data['username'];
                $user_image = $row_data['user_image'];
                $user_address = $row_data['user_address'];
                $user_mobile = $row_data['user_mobile'];
                echo "<tr class='text-center'>
                <td>$user_id</td>
                <td>$username</td>
                <td>$user_email</td>
                <td><img src='../users/user_images/$user_image' class='pod-img'></td>
                <td>$user_address</td>
                <td>$user_mobile</td>
                <td><a href='' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
            </tr>";
            }
        }
        ?>
        
        
    </tbody>
</table>