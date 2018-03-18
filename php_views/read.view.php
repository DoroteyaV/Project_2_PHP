<?php include 'php_includes/header.php'; ?>

<h1 class="text-center"><?= $task['task_title']; ?></h1>

<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="text-right"><?= $task['due_date']; ?></h4>
        </div>
        <div class="panel-body">
            <h4>Description</h4>
            <p><?= $task['task_description']; ?></p>
        </div>
    </div>
    <a href="home.php"><input class="btn btn-info" value="Go Home"></a>
</div>

<?php include 'php_includes/footer.php'; ?>
