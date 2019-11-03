<?php
	include("admin/connection.php");
	if(!$email)
	{
		header("location:login.php?login_first");
	}
	$product_id = $_GET['id'];

	$query = mysqli_query($con,"SELECT * FROM `products` WHERE product_id = '$product_id'")or die(mysqli_error($con));
	$row = mysqli_fetch_array($query);
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
         	<div class="col-md-6 col-md-offset-3">
         		<img src="admin/images/products/<?php echo $row['p_image'];?>"   class="img_responsive" alt="No image or corrupted">
         	</div>
        </div>
        <div class="row">
		<div class="col-md-12">
			<h2 class="text-center text-primary"><?php echo $row['p_name'];?> </h2>			
			<p style="text-align: justify;" class="text-center text-danger"><?php echo nl2br($row['p_description']); ?></p>
			<p style="text-align: justify;" class="text-center text-danger">Price:<?php echo nl2br($row['p_price']); ?></p>
			<p style="text-align: justify;" class="text-center text-danger">Uploaded on:<?php echo nl2br($row['upload_date']); ?></p>
		</div>
	</div>
    </div>  
	
	
   <?php include("inc/bottom.php");?>

</body>

</html>
