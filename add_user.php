<?php
   include("admin/connection.php");
?>
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
            <div class="col-md-6 col-md-offset-3 reg">
                <h2 class="text-center">
                    <?php
                        echo (isset($_GET['edit'])?'Edit User':'Register');
                    ?></h2>
            <form name="Reg" method="post" action="user_val.php?<?php
                        echo (isset($_GET['edit'])?'edit&&u_id='.$user_id:'add');?>">
                <div class="form-group">
                    <label>Enter your name</label>
                    <input type="text" name="u_name" value="<?php echo $name; ?>" class="form-control" placeholder="YourName" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="u_email" value="<?php echo $email; ?>" class="form-control" placeholder="YourEmail" required>
                </div>
                <div class="form-group">
                    <label>Phone number</label>
                    <input type="number" name="u_phone" value="<?php echo $phone; ?>" class="form-control" placeholder="YourNumber" required>
                </div>
                <br>
               <div class="form-group">
                    <label>Enter Address</label>
                    <textarea name="u_address" rows="6" class="form-control" placeholder="YourAddress"
                        required><?php echo $address; ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Gender</label>
                    <br>
                    <?php
                    $Male = $Female = "";
                        if($gender == 'Male')
                        {
                            $Male = "checked";
                        }
                        else if($gender == 'Female')
                        {
                            $Female = "checked";
                        }

                    ?>
                    <input type="radio" name="gender" <?php echo $Male;?> value="Male" required>Male
                    <br>
                    <input type="radio" name="gender" <?php echo $Female;?> value="Female" required>Female
                </div>  
                <br>
                <?php
                if(isset($_GET['edit']))
                {
                
                }
                else
                {
                    echo '<div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="u_password" class="form-control" placeholder="YourPassword" required>
                </div>';
                }

                ?>
                <br>

                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-lg" value="<?php
                        echo (isset($_GET['edit'])?'Save Changes':'Register');
                    ?>">
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
