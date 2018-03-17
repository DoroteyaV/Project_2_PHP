<?php include 'php_includes/header.php'; ?>

<h1 class="text-center">Update Task <?= $task['task_title']?></h1>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">

            <form action="update.php" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input id="title" type="text" class="form-control" name="task_title" value="<?= $task['task_title']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" rows="5" class="form-control" name="task_description" required><?= $task['task_description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="date">Due Date (format "yyyy-mm-dd")</label>
                    <input id="date" class="form-control" name="due_date" value="<?= $task['due_date']; ?>" required>
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?= $task['id']; ?>">
                    <input class="btn btn-success btn-block" type="submit" name="update" value="Update">
                </div>
            </form>
            <a href="home.php"><input class="btn btn-default btn-block" value="Cancel"></a>
        </div>
    </div>
</div>

<?php include 'php_includes/footer.php'; ?>
