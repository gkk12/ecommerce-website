<?php
    include("inc/session.php");
    if(!$email)
    {
        header("location:login.php?login_first");
    }
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
            <div class="col-md-12">
                <h2 class="text-center">View Profile</h2>
                <hr/>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th><?php echo $rr['u_name']; ?></th>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th><?php echo $rr['u_email']; ?></th>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <th><?php echo $rr['u_phone']; ?></th>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <th><?php echo $rr['u_address']; ?></th>
                        </tr>
                    </thead>
                    
                </table>
            </div>
        </div>
    </div>
	
	
   <?php include("inc/bottom.php");?>

</body>

</html>
