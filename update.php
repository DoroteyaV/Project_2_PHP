<?php

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

$task_id = $_GET['id'];
$select_query = "SELECT * FROM tasks WHERE id = $task_id ";
$result = mysqli_query($conn, $select_query);

if ($result) { $task = mysqli_fetch_assoc($result); }
else { echo mysqli_error($conn); }

if (!empty($_POST['submit'])) {
    $task_id = $_POST['id'];
	$task_title = $_POST['task_title'];
	$task_description = $_POST['task_description'];
	$due_date = $_POST['due_date'];
	$user_id = $_SESSION['usr_id'];

	$update_query = "UPDATE tasks SET task_title = '".$task_title."'," . "task_description = '" . $task_description ."'," . "due_date = '" .$due_date."'," . "user_id = " . $user_id . " WHERE id = ". $task_id . "";
	$result = mysqli_query($conn, $update_query);

    if ($result) { header("Location: home.php"); }
    else { echo mysqli_error($conn); }

	echo "<p><a href='home.php'>Home</a></p>";
}

require 'php_views/update.view.php';
