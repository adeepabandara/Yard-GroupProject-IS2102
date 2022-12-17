<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/warehouselogin.css">

<body>
	<div class="loginbox">
        <form action="<?php echo BASEURL ?>/login/warehouseLogin" method="post">
				<p>Username</p>
				<input type="text" name="username" placeholder="Enter Username">
				<p>Password</p>
				<input type="password" name="password" placeholder="Enter Password">
				<br><br>
				<input type="submit" name="submit" value="Login">
				<p>Dont have an account? <a href="<?php echo BASEURL ?>/signUp/warehouse">Sign Up</a></p>
				</form>
		
	</div>
</body>