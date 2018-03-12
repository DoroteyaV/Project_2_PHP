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
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Scheduled Tasks
                    <a href="" title="Add New Task"><button class="btn btn-success btn-sm pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add New Task</button></a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Title</th><th>Description</th><th>Due Date</th><th>Flag</th><th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Holiday</td>
                                    <td>Selebrate the holiday</td>
                                    <td>2018-03-03</td>
                                    <td>COMPLETED</td>
                                    <td>
                                        <a href="" title="View Task"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="" title="Edit Task"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <a href="" title="Delete Task"><button class="btn btn-primary btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>School</td>
                                    <td>Need to go to school for extra credit</td>
                                    <td>2018-03-05</td>
                                    <td>TODAY</td>
                                    <td>button button button</td>
                                </tr>
                                <tr>
                                    <td>Work</td>
                                    <td>Need to go to work and earn a few millions</td>
                                    <td>2018-03-08</td>
                                    <td>COMING UP</td>
                                    <td>button button button</td>
                                </tr>
                                <tr>
                                    <td><?= $task_title = $_POST['task_title'] ?></td>
                                    <td><?= $task_title = $_POST['task_description'] ?></td>
                                    <td><?= $task_title = $_POST['task_duedate'] ?></td>
                                    <td><?=  ?></td>
                                    <td><?=  ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'php_includes/footer.php'; ?>
    </body>
</html>
