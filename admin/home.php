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
    <?php
    include("inc/menu.php");
   ?>
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Welcome , <?php echo $user_Name; ?></h1>
            </div>
        	
        </div>
    </div>
    <?php
    include("inc/bottom.php");
    ?>
</body>

</html>
