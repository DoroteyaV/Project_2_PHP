<?php include 'php_includes/header.php'; ?>

<h1 class="text-center">Search Results</h1>

<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Searching for <?= $_GET['search']; ?>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Due Date</th>
                            <th>Flag</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($tasks)): ?>
                        <?php foreach ($tasks as $task): ?>
                            <?php $flag = get_flag($task['due_date'], $type); ?>
                            <?php if ($flag != NULL): ?>
                            <tr>
                                <td><?= $task['task_title']; ?></td>
                                <td><?= $task['task_description']; ?></td>
                                <td><?= $task['due_date']; ?></td>
                                <td><?= $flag; ?></td>
                                <td><?= get_buttons($flag, $task['id']); ?></td>
                            </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">There is no search results...
                            <a href="home.php" title="go home"> Go Home!</a></td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="home.php"><input class="btn btn-info" value="Go Home"></a>
</div>

<?php foreach ($tasks as $task): ?>
    <?php if ($flag != NULL): ?>
        <?php include 'php_includes/modal.php'; ?>
    <?php endif; ?>
<?php endforeach; ?>

<?php include 'php_includes/footer.php'; ?>
