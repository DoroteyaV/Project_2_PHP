<?php include 'php_includes/header.php'; ?>

<h1 class="text-center"><?= $_SESSION['usr_name']; ?>'s Calendar</h1>
<!-- SEARCH AREA -->
<form action="search.php" class="navbar-form pull-right" role="search">
    <div class="input-group add-on">
        <input class="form-control" placeholder="Search" name="search" type="text">
        <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        </div>
    </div>
</form>
<!-- main panel -->
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="home.php?type=0" title="All Tasks"><button <?= $type == 0 || $type == NULL ? 'disabled' : ''; ?> class="btn btn-default"><i class="fa fa-eye" aria-hidden="true"></i> All</button></a>
            <a href="home.php?type=1" title="Old Tasks"><button <?= $type == 1  ? 'disabled' : ''; ?> class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> COMPLETED</button></a>
            <a href="home.php?type=2" title="Today's Tasks"><button <?= $type == 2 ? 'disabled' : ''; ?> class="btn btn-danger"><i class="fa fa-eye" aria-hidden="true"></i> TODAY</button></a>
            <a href="home.php?type=3" title="Tasks Coming Up"><button <?= $type == 3 ? 'disabled' : ''; ?> class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i> COMING UP</button></a>
            <a href="home.php?type=4" title="Approaching Tasks"><button <?= $type == 4 ? 'disabled' : ''; ?> class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> APPROACHING</button></a>
            <a href="create.php" title="Add New Task"><button class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add New Task</button></a>
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
                            <td colspan="5">You don't have any scheduled tasks...
                            <a href="create.php" title="Add New Task"> Add New Task Today!</a></td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div>
        Choose tasks by:
        <select name="choose_tasks">
            <option value="0">Date in DB</option>
            <option value="1">Due Date</option>
            <option value="2">Title: A-Z</option>
        </select>
    </div>
</div>

<?php foreach ($tasks as $task): ?>
    <?php if ($flag != NULL): ?>
        <?php include 'php_includes/modal.php'; ?>
    <?php endif; ?>
<?php endforeach; ?>

<?php include 'php_includes/footer.php'; ?>
