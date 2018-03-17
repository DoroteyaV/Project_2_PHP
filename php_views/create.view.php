<?php include 'php_includes/header.php'; ?>

<form action="create.php" method="post">
    <label for="task_title">
        Task title:
        <input type="text" name="task_title" id="task_title" value="" placeholder="Task title...">
    </label>
    <label for="task_description">
        Task description:
        <input type="text" name="task_description" id="task_description" value="" placeholder="Task description...">
    </label>
    <label for="due_date">
        Insert due date (format "yyyy-m-d"):
        <input type="text" name="due_date" id="due_date" value="" placeholder="Task due date...">
    </label>
    <input type="submit" name="submit" value="Create">
</form>

<?php include 'php_includes/footer.php'; ?>
