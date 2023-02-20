<h3 class="text-center text-success">All Payments</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <?php
        $get_payments = "Select * from `user_payments`";
        $result = mysqli_query($conn, $get_payments);
        $row_count = mysqli_num_rows($result);
        
        
        if($row_count==0){
            echo "<h2 class='bg-danger text-center mt-5'>No payments yet</h2>";
        }else{
            echo "<tr>
            <th>Payment Id</th>
            <th>Invoice number</th>
            <th>Amount</th>
            <th>Payment mode</th>
            <th>Order date</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class='bg-secondary text-light'>";
            while($row_data=mysqli_fetch_assoc($result)){
                $payment_id = $row_data['payment_id'];
                $order_id = $row_data['order_id'];
                $amount = $row_data['amount'];
                $invoice_number = $row_data['invoice_number'];
                $date = $row_data['date'];
                $payment_mode = $row_data['payment_mode'];
                echo "<tr class='text-center'>
                <td>$payment_id</td>
                <td>$invoice_number</td>
                <td>$amount</td>
                <td>$payment_mode</td>
                <td>$date</td>
                <td><a href='' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
            </tr>";
            }
        }
        ?>
        
        
    </tbody>
</table>