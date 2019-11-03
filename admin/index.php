<!DOCTYPE html>
<html lang="en">
<head>
     <?php
    include("inc/head.php");
    ?>
</head>

<body>
	<div class="container">
        <div class="row">
        	<div class="col-md-3 col-md-offset-4">
        		<?php  include("inc/messages.php");	?>
        		<div class="login-box">
        			<h4 class="text-center">ECom Admin Login</h4>
        			<hr>
        			<form name="" method="post" action="">
        				<div class="form-group">
        					<label>Enter Email</label>
        					<input type="email" name="email" class="form-control" placeholder="Email Address" required="">
        				</div>
        				<div class="form-group">
        					<label>Enter Password</label>
        					<input type="password" name="password" class="form-control" placeholder="Password" required="">
        				</div>
        				<div class="form-group">
        					<input type="submit" class="btn btn-success btn-block" name="btn_login" value="Login">	
        				</div>
        			</form>
        			<?php
        				if(isset($_POST['btn_login']))
        				{
        					include('connection.php');
        					$email = mysqli_real_escape_string($con,$_POST['email']);
        					$password = mysqli_real_escape_string($con,$_POST['password']);
        					$query = mysqli_query($con,"SELECT * FROM `login` WHERE `email` = '$email' AND `password` 
        						= '$password' ") or die(mysqli_error($con));
        					$row = mysqli_fetch_array($query);
        					if($row)
        					{
        						session_start();
        						$_SESSION['email'] = $row['email'];
        						header("location:home.php?logged_in");
        					}
        					else
        					{
        						echo '<h4 style="color:red;text-align:center;">Invalid Credentials...</h4>';
        					}
        				}
        			?>
        		</div>
        	</div>
            
        </div>
    </div>
	<?php
    include("inc/bottom.php");
   ?>

</body>

</html>
