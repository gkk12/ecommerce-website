<?php
	include("connection.php");
	if (isset($_GET['add']))
	{
		$p_name = mysqli_real_escape_string($con, $_POST['p_name']);
		$p_price = mysqli_real_escape_string($con, $_POST['p_price']);
		$p_description = mysqli_real_escape_string($con, $_POST['p_description']);
		$date = date('Y-m-d');

		$file = rand(1000,100000)."-".$_FILES['p_image']['name'];
		$file_loc = $_FILES['p_image']['tmp_name'];
		$file_size = $_FILES['p_image']['size'];
		$file_type = $_FILES['p_image']['type'];
		$folder = "images/products/";

		$new_size = $file_size/2048;

		$new_file_name = strtolower($file);

		$final_file = str_replace(' ','-',$new_file_name);

		if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$query = mysqli_query($con,"INSERT INTO `products`(`p_name`, `p_price`, `p_description`, `p_image`, `upload_date`) VALUES ('$p_name','$p_price','$p_description','$final_file','$date')")or die(mysqli_error($con));
			if ($query) 
			{
				header("location:manage_products?ins_success");
			}
		}

	}
	else if(isset($_GET['delete']))
	{
		$product_id =$_GET['id'];
		$query = mysqli_query($con,"SELECT * FROM `products` WHERE product_id = '$product_id'")or die(mysqli_error($con));

		$row = mysqli_fetch_array($query);
		$photo = $row['p_image'];
		$file_path = "images/products/".$photo;
		unlink($file_path);
		$sql = mysqli_query($con,"DELETE FROM `products` WHERE product_id = '$product_id'")or die(mysqli_error($con));
		if($sql)
		{
			header("location:manage_products.php?delete_success");
		}

	}
	
?>