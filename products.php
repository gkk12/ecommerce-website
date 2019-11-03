<?php
    include("inc/session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("inc/head.php");?>
</head>

<body>
    <?php include("inc/menu.php");?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-8">
                <form name="" method="post" action="">
                    <div class="input-group">
                        <input type="text" name="product_name" class="form-control" placeholder="Search product">
                        <div class="input-group-btn">
                            <input type="submit" name="btn-search" class="btn btn-primary" value="Search">    
                        </div>
                        
                    </div>
                </form>
                
            </div>
                
        </div>
        <p>&nbsp;</p>
        <div class="row">
        	<?php 
        		include("admin/connection.php");
                if(isset($_POST['btn-search']))
                {
                    $product_name = $_POST['product_name'];
                    $condition = "WHERE p_name LIKE '%$product_name%'";
                }
                else
                {
                    $condition = "WHERE 1";    
                }
                $query = mysqli_query($con,"SELECT * FROM `products` $condition")or die(mysqli_error($con));
        		$num = mysqli_num_rows($query);
                if ($num)
                {
                    while($row = mysqli_fetch_array($query))
                        {
                            echo '<div class="col-md-3">
                                    <div class="well">
                                        <div class="thumbnail">
                                            <img src="admin/images/products/'.$row['p_image'].'">
                                        </div>

                                        <h4 class="text-center">'.$row['p_name'].'</h4> 

                                        <p><span class="text-danger">Rs. '.$row['p_price'].'</span></p>

                                        <a href="product_details.php?id='.$row['product_id'].'" class="btn btn-success btn-block">View More</a>
                                    </div>
                                </div>';
                        }
                }
                else {
                    echo '<div class="alert alert-danger">
                            <a href="" class="close" data-dismiss="alert">&times;</a>
                            <p>No products Found</p>
                         </div>';
                }
        		while($row = mysqli_fetch_array($query))
                        {
                            echo '<div class="col-md-3">
                            		<div class="well">
                            			<div class="thumbnail">
                            				<img src="admin/images/products/'.$row['p_image'].'">
                            			</div>

                            			<h4 class="text-center">'.$row['p_name'].'</h4>	

                            			<p><span class="text-danger">Rs. '.$row['p_price'].'</span></p>

                            			<a href="product_details.php?id='.$row['product_id'].'" class="btn btn-success btn-block">View More</a>
                            		</div>
                            	</div>';
                        }
        	?>
         
        </div>
    </div>  
	
	
   <?php include("inc/bottom.php");?>

</body>

</html>
