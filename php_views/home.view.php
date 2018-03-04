<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php include 'php_includes/bootstrap.php'; ?>
        <title>User's Home</title>
    </head>
    <body>
        <?php include 'php_includes/header.php'; ?>

        <h1 class="text-center">Hello <?= $_SESSION['usr_name']; ?>!</h1>

        <!-- TODO tasks table CRUD view -->

        <?php include 'php_includes/footer.php'; ?>
    </body>
</html>
