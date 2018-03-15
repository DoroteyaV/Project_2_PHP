<?php

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

if (empty($_POST['submit'])) {
	$task_id = $_GET['id'];
	$select_query = "SELECT * FROM tasks WHERE id = $task_id ";
	$result = mysqli_query($conn, $select_query);
//var_dump($result);
	if ($result) {
		$row = mysqli_fetch_assoc($result);
?>

<form action="update.php" method="post">
	<label for="task_title">
			Task title:
			<input type="text" name="task_title" id="task_title" value="<?= $row['task_title']?>"
			placeholder="Task title...">
		</label>
		<label for="task_description">
			Task description:
			<input type="text" name="task_description" id="task_description" value="<?= $row['task_description']?>" placeholder="Task description...">
		</label>
		<label for="due_date">
			Insert due date (format "yyyy-m-d"):
			<input type="text" name="due_date" id="due_date" value="<?= $row['due_date']?>" placeholder="Task due date...">
		</label>
		<input type="hidden" name="id" value="<?= $row['id']?>" >
		<input type="submit" name="submit" value="Update">
</form>

<?php

	}
} else {
	$task_id = $_POST['id'];
	$task_title = $_POST['task_title'];
	$task_description = $_POST['task_description'];
	$due_date = $_POST['due_date'];
	$usr_id = $_SESSION['usr_id'];
	$update_query = "UPDATE tasks SET task_title = '".$task_title."'," . "task_description = '" . $task_description .",'" . "due_date = '" .$due_date."'," . "usr_id = '" . $usr_id . " WHERE task_id = '". $task_id . "'";
	$result = mysqli_query($conn, $update_query);
	if ($result) {
		echo "Successfully updated task!";
		echo "<a href = 'home.php'>Home</a>";
	} else {
		echo "Not successfully updated!";
		echo "<p><a href='home.php'>Home</a></p>";
	}
}

// require 'php_views/home.view.php';