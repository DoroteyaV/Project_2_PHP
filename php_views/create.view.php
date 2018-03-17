<?php include 'php_includes/header.php'; ?>

<h1 class="text-center">Create New Task</h1>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
            <form action="create.php" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input id="title" type="text" class="form-control" name="task_title" placeholder="Add Title" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" rows="5" class="form-control" name="task_description" placeholder="Add Description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="date">Due Date (format "yyyy-mm-dd")</label>
                    <input id="date" class="form-control" name="due_date" placeholder="yyyy-mm-dd" required>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" name="submit" value="Create">
                </div>
            </form>
            <a href="home.php"><input class="btn btn-default btn-block" value="Cancel"></a>
        </div>
    </div>
</div>

<?php include 'php_includes/footer.php'; ?>
