<!DOCTYPE html>
<html lang="en">
<head>
     <?php
    include("inc/head.php");
    ?>
</head>

<body>
    <?php include("inc/menu.php");?>
	<div class="container">
    <div class="row">
            <div class="col-md-6 col-md-offset-3 reg">
               <h2 class="text-center">Login</h2>
            <form name="Log" method="post" action="">
            
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="u_email" class="form-control" placeholder="YourEmail" required>
                </div>
               
               
               <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="u_password" class="form-control" placeholder="YourPassword" required>
                </div>
               
                <br>

                <div class="form-group">
                    <input type="submit" name="btn_login" class="btn btn-success btn-lg" value="Login">
                    
                </div>
            </form>
            <?php
                include("admin/connection.php");
                if(isset($_POST['btn_login']))
                {
                    $email = mysqli_real_escape_string($con,$_POST['u_email']);
                    $password = mysqli_real_escape_string($con,$_POST['u_password']);
                    $sql = mysqli_query($con, "SELECT * FROM `user` WHERE u_email = '$email' AND u_password = '$password'")or die(mysqli_error($con));
                    $row = mysqli_fetch_array($sql);
                    if($row)
                    {
                        session_start();
                        $_SESSION['u_email'] = $row['u_email'];
                        header("location:products.php?logged_in");
                    }
                    else
                    {
                        echo '<h4 class="text-center text-danger">Invalid Credentials></h4>';
                    }
                }
            ?>
        </div>
        </div>    
        </div>
    
    
 <?php
    include("inc/bottom.php");
   ?>

</body>

</html>
