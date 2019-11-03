<?php
include("inc/session.php");
?>
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
               <h2 class="text-center">Change Password</h2>
            <form name="Log" method="post" action="">
            
                <div class="form-group">
                    <label>Enter Old Password</label>
                    <input type="password" name="o_password" class="form-control" placeholder="OldPassword" required>
                </div>
               
               
               <div class="form-group">
                    <label>Enter New Password</label>
                    <input type="password" name="n_password" class="form-control" placeholder="NewPassword" required>
                </div>
                
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="c_password" class="form-control" placeholder="NewPassword" required>
                </div>
                <br>

                <div class="form-group">
                    <input type="submit" name="btn_ch_pass" class="btn btn-primary btn-block" value="Change Password">
                    
                </div>
            </form>
            <?php
                include("admin/connection.php");
                $message = "";
                if(isset($_POST['btn_ch_pass']))
                {
                    $o_password = mysqli_real_escape_string($con,$_POST['o_password']);
                    $n_password = mysqli_real_escape_string($con,$_POST['n_password']);
                    $c_password = mysqli_real_escape_string($con,$_POST['c_password']);
                    $sql = mysqli_query($con, "SELECT * FROM `user` WHERE u_email = '$email'")or die(mysqli_error($con));
                    $row = mysqli_fetch_array($sql);
                    if($o_password == $row['u_password'])
                    {
                        if($n_password == $c_password)
                        {
                            $sql = mysqli_query($con,"UPDATE `user` SET u_password = '$n_password' WHERE u_email = '$email'")or die(mysqli_error($con));
                            $message = "Password Changed";
                        }
                        else
                        {
                            $message = "Password does not match";
                        }
                    }
                    else
                    {
                        $message = "Password not correct";
                    }
                    echo '<div class="alert alert-info">
                            <a href="" class="close"
                                data-dismiss="alert">&times;</a>
                                <p>'.$message.'</p>
                                </div>';
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
