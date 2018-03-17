<?php include 'php_includes/header.php'; ?>

<h1 class="text-center">Login Form</h1>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="text" name="email" required>
                </div>

                <div class="form-group">
                    <label for="pass">Password</label>
                    <input id="pass" class="form-control" type="password" name="password" required>
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="login" value="Login">
                </div>
            </form>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            New User? <a href="register.php">Register Here</a>
        </div>
    </div>
</div>

<?php include 'php_includes/footer.php'; ?>
