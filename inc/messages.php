<?php
	if(isset($_GET['login_first']))
	{
		echo '<div class="alert alert-warning">
				<a href="" class="close" data-dismiss="alert">&times; </a>
				<p>You must login first to continue</p>
			  </div>';
	}
	else if(isset($_GET['logged_out']))
	{
		echo '<div class="alert alert-warning">
				<a href="" class="close" data-dismiss="alert">&times; </a>
				<p>You have been logged out</p>
			  </div>';
	}
?>