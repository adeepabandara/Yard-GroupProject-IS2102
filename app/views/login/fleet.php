<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/fleetlogin.css">
<form action="<?php echo BASEURL ?>/login/fleetLogin" method="post">
<body>
<div class="login-form">
  <form>
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" placeholder="Username" autocomplete="nope" name="username">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" autocomplete="new-password" name="password">
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <button><a href="<?php echo BASEURL ?>/signUp">Register</button><br><br>
      <button>Sign in</button>
    </div>
  </form>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>