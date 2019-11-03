<?php
	session_start();
	

	
	if(isset($_SESSION['u_email']))
	{
		$email = $_SESSION['u_email'];
		include("admin/connection.php");
		$q =mysqli_query($con, "SELECT * from `user` WHERE `u_email` = '$email'")or die(mysqli_error($con));
		$rr = mysqli_fetch_array($q);

		$user_Name = $rr['u_name'];
	}
?>