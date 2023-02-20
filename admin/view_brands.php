<h3 class="text-center text-success">All Brands</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class="text-center">
            <th>Brand ID</th>
            <th>Brand Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php
            $select_brands = "Select * from `brands`";
            $result_brands = mysqli_query($conn, $select_brands);
            while($row=mysqli_fetch_assoc($result_brands)){
                $brand_id = $row['brand_id'];
                $brand_title = $row['brand_name'];
                echo "  <tr class='text-center'>
                            <td>$brand_id</td>
                            <td>$brand_title</td>
                            <td><a href='./index.php?edit_brand=$brand_id' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
                            <td><a href='./index.php?delete_brand=$brand_id' type='button' class='text-light' data-toggle='modal' data-target='#exampleModal'><i class='fa-solid fa-trash'></i></a></td>
                        </tr>";
            }
        ?>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h4>Are you sure?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="./index.php?view_brands" class="text-light text-decoration-none">No</a></button>
        <button type="button" class="btn btn-primary"><a href='./index.php?delete_brand=$brand_id' class='text-light text-decoration-none'>Yes</a></button>
      </div>
    </div>
  </div>
</div>