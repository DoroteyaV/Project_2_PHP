<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Our Calendar App</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text">Welcome <?= $_SESSION['usr_name']; ?></p></li>
                <li><a href="logout.php">Log Out</a></li>
            <?php } else { ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            <?php } ?>
            </ul>
        </div>
    </div>
</nav>
