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
        	<div class="col-md-3 col-md-offset-3">
        		<?php 
                    include("inc/messages.php");
                ?>
                <h3 class="text-center">Add Product</h3>
                <hr>
                <form name="" method="post" action="product_val.php?add" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Enter Product Name:</label>
                        <input type="text" name="p_name" class="form-control" required placeholder="Product Name">
                    </div>
                    <div class="form-group">
                        <label>Enter Product Price:</label>
                        <input type="number" name="p_price" class="form-control" required placeholder="Product Price">
                    </div>
                    <div class="form-group">
                        <label>Choose Product Image:</label>
                        <input type="file" name="p_image" class="form-control" required placeholder="Product Image">
                    </div>
                    <div class="form-group">
                        <label>Enter Product Description:</label>
                        <textarea rows="4" name="p_description" class="form-control" required placeholder="Product Description"></textarea> 
                    </div>
                    <div class="form-group">
                        
                        <input type="submit" name="add_product" class="btn btn-danger btn-block" value="Add Product">
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
