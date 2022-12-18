<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/login.css">

<body class="loginbody">
	<div class="loginform">

		<form action="<?php echo BASEURL ?>/signUp/fleetRegister" method="post">

			<label>Name</label>
			<input type="text" id="name" name="Name" placeholder="John Smith"><br>

			<label>Username</label>
			<input type="text" id="username" name="username" placeholder="yardsolutions@gmail.com"><br>

			<label>Password</label>
			<input type="password" id="password" name="password" placeholder="*********"><br>	

			<label>Address</label>
			<input type="text" id="address" name="address" placeholder="No 32, Flower road"><br>

			<label>Email</label>
			<input type="text" id="email_address" name="email_address" placeholder="yardsolutions@gmail.com"><br>

			<button type="submit">Register</button>
		</form>
	</div>
</body>