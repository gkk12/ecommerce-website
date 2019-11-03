  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container"> 
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Our Products</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if(isset($_SESSION['u_email']))
          {
            echo '<li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Welcome,'.$user_Name.' <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="view_profile.php">View Profile</a></li>
                            <li><a href="change_password.php">Change Password</a></li>
                            <li><a href="inc/logout.php">Logout</a></li>
                        </ul>
                  </li>';
          }
          else{
            echo '<li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>';
          }
        
        ?>
      </ul>
    </div>
</nav>
