<title>Sign Up - Warehouse1</title>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/warehouselogin.css">

<body>
    <div class="loginbox">
        <form name="signup_form" method="post" action="<?php echo BASEURL ?>/signUp/warehouse">
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter Name">
            <p>Address</p>
            <input type="text" name="address" placeholder="Enter Address">
            <p>Email</p>
            <input type="text" name="email_address" placeholder="Enter Email">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <br><br>
            <button type="button" class="submit" name="btnsubmit" onclick="submitForm()">
                Sign Up
            </button>

            <p>Already have an account? <a href="<?php echo BASEURL ?>/login/warehouse">Login</a></p>
        </form>
    </div>

</body>

<script>
    function validateForm() {
        var name = document.forms["signup_form"]["name"].value;
        var address = document.forms["signup_form"]["address"].value;
        var email = document.forms["signup_form"]["email_address"].value;
        var username = document.forms["signup_form"]["username"].value;
        var password = document.forms["signup_form"]["password"].value;

        // validation patterns
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        var passwordPattern = /^.{8,}$/;

        if (name == "") {
            alert("Name must be filled out");
            return false;
        }
        if (address == "") {
            alert("Address must be filled out");
            return false;
        }
        if (email == "") {
            alert("Email must be filled out");
            return false;
        } else if (!emailPattern.test(email)) {
            alert("Email is not valid");
            return false;
        }
        if (username == "") {
            alert("Username must be filled out");
            return false;
        }
        if (password == "") {
            alert("Password must be filled out");
            return false;
        } else if (!passwordPattern.test(password)) {
            alert("Password must contain at least 8 or more characters");
            return false;
        }

        return true;
    }

    function submitForm() {
        if (validateForm()) {
            console.log("Form is valid");
            document.forms["signup_form"].submit();
        }
    }
</script>