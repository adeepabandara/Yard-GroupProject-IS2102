<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/commercialsignup.css">


<html>

<head>
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="commercialsignup.css" />
</head>

<body>
    <div class="sign-up-form">
        <h1>Sign Up Now</h1>
        <form method="POST" action="<?php echo BASEURL ?>/signUp/commercial">
            <input type="name" name="name" class="input-box" placeholder="Name" required />
            <input type="name" name="username" class="input-box" placeholder="Username" required />
            <input type="password" name="password" class="input-box" placeholder="Your Password" required />
            <p>
                <span><input type="checkbox" required /></span> Agree to the terms of services
            </p>
            <button type="submit" class="signup-btn">Sign up</button>
            <hr />
            <!-- <p class="or">OR</p>
        <button type="button" class="signup-btn">Login with Google</button> -->
        </form>
    </div>
</body>

</html>