<?php
	include("admin/connection.php");
	if(isset($_GET['add']))
	{
		$user_name = mysqli_real_escape_string($con,$_POST['u_name']);
		$user_email = mysqli_real_escape_string($con,$_POST['u_email']);
		$user_number = mysqli_real_escape_string($con,$_POST['u_phone']);
		$user_address = mysqli_real_escape_string($con,$_POST['u_address']);
		$user_gender = mysqli_real_escape_string($con,$_POST['gender']);
		$user_password = mysqli_real_escape_string($con,$_POST['u_password']);

		$query = mysqli_query($con,"INSERT INTO `user`(`u_name`, `u_email`, `u_phone`, `gender`,`u_address`, `u_password`) VALUES ('$user_name','$user_email','$user_number','$user_address','$user_gender','$user_password')") or die(mysqli_error($con));	

		if($query)
		{
			header("location:login.php?reg_success");
		}
		else
		{
			header("location:register.php?reg_error");	
		}
	}
	

?>