<?php include 'php_includes/header.php'; ?>

<h1 class="text-center">Registration Form</h1>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="registerform">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" id="name" type="text" name="name" value="<?php if($error) echo $name; ?>" required>
                    <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" type="text" name="email" value="<?php if($error) echo $email; ?>" required>
                    <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input class="form-control" id="pass" type="password" name="password" required>
                    <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                </div>
                <div class="form-group">
                    <label for="cpass">Confirm Password</label>
                    <input class="form-control" id="cpass" type="password" name="cpassword" required>
                    <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="register" value="Register">
                </div>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            Already Registered? <a href="login.php">Login Here</a>
        </div>
    </div>
</div>

<?php include 'php_includes/footer.php'; ?>
