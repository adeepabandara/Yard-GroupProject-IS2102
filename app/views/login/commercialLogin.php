<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/commercialLogin.css">

<form action="<?php echo BASEURL ?>/login/commercialLogin" method="post">

  <body>
    <section>
      <div class="imgBx">
        <img src="<?php echo BASEURL ?>/public/images/yard.png" />
      </div>
      <div class="contentBx">
        <div class="formBx">
          <h2>Login</h2>
          <form>
            <div class="inputBx">
              <span>Username</span>
              <input type="text" name="username" />
            </div>
            <div class="inputBx">
              <span>Password</span>
              <input type="password" name="password" />
            </div>
            <div class="remember">
              <label><input type="checkbox" name="" />Remember me</label>
            </div>
            <div class="inputBx">
              <input type="submit" value="Sign in" name="" />
            </div>
            <div>
              <p>Don't have an account? <a href="<?php echo BASEURL ?>/signUp/commercial">Sign up</a></p>
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>