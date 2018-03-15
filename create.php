<?php 

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

if (empty($_POST['submit'])) {
	?>
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

<?php
} else {
	$task_title = $_POST['task_title'];
	$task_description = $_POST['task_description'];
	$due_date = $_POST['due_date'];
	$insert_query = "INSERT INTO tasks (task_title, task_description, due_date) VALUES ('".$task_title."', '".$task_description."', '".$due_date."')";
	$result = mysqli_query($conn, $insert_query);
	 if ($result) {
		echo "Successfully added new task!";
		echo "<p><a href='home.php'>Home</a></p>";
	} else {
	 	echo "Not successful!";
	 	echo "<p><a href='home.php'>Home</a></p>";
	}
	}

?>