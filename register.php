<?php
    //include("inc/session.php");
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
               <h2 class="text-center">Register</h2>
            <form name="Reg" method="post" action="reg_val.php?add">
                <div class="form-group">
                    <label>Enter your name</label>
                    <input type="text" name="u_name" class="form-control" placeholder="YourName" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="u_email" class="form-control" placeholder="YourEmail" required>
                </div>
                <div class="form-group">
                    <label>Phone number</label>
                    <input type="number" name="u_phone" class="form-control" placeholder="YourNumber" required>
                </div>
                <br>
               <div class="form-group">
                    <label>Enter Address</label>
                    <textarea name="u_address" rows="6" class="form-control" placeholder="YourAddress"
                        required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Gender</label>
                    <br>
                    
                    <input type="radio" name="gender"  value="Male" required>Male
                    <br>
                    <input type="radio" name="gender"  value="Female" required>Female
                </div>  
                <br>
               
               <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="u_password" class="form-control" placeholder="YourPassword" required>
                </div>
               
                <br>

                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-lg" value="Register">
                    
                </div>
            </form>
        </div>
        </div>    
        </div>
    
    
 <?php
    include("inc/bottom.php");
   ?>

</body>

</html>
