<!DOCTYPE html>
<html lang="en">
<head>
     <?php
    include("inc/head.php");
    ?>
</head>
<body>
    <?php
    include("inc/menu.php");
   ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <?php 
                    include("inc/messages.php");
                ?>
                <h3 class="text-center">Manage Products</h3>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Upload Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("connection.php");
                            $sql = mysqli_query($con, "SELECT * FROM `products`") or die(mysqli_error($con));
                            $i = 1;
                            while($row = mysqli_fetch_array($sql))
                            {
                                echo '<tr>
                                        <td>'.$i++.'</td>
                                        <td>'.$row['p_name'].'</td>
                                        <td><img src="images/products/'.$row['p_image'].'" width ="75" height= "75"/></td>
                                        <td>'.$row['p_description'].'</td>
                                        <td>'.$row['p_price'].'</td>
                                        <td>'.$row['upload_date'].'</td>
                                        <td>
                                            <a href="" class="btn btn-info">Edit</a>
                                            <a href="product_val.php?id='.$row['product_id'].'&&delete" class="btn btn-danger">Delete</a>
                                        </td>
                                      </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
    <?php
    include("inc/bottom.php");
   ?>

</body>

</html>
