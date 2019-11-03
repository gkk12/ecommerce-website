<?php
	session_start();
	$email = $_SESSION['email'];

	if(!$email)
	{
		header("location:index.php?login_first");
	}
	else
	{
		include("connection.php");
		$q =mysqli_query($con, "SELECT * from `login` WHERE `email` = '$email'")or die(mysqli_error($con));
		$rr = mysqli_fetch_array($q);

		$user_Name = $rr['name'];
	}
?>