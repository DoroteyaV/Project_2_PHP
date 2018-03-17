<?php

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

if (!empty($_POST['submit'])) {

	$user_id = $_SESSION['usr_id'];
	$task_title = $_POST['task_title'];
	$task_description = $_POST['task_description'];
	$due_date = $_POST['due_date'];

	$insert_query = "INSERT INTO tasks (user_id, task_title, task_description, due_date) VALUES ($user_id, '".$task_title."', '".$task_description."', '".$due_date."');";
	$result = mysqli_query($conn, $insert_query);

	if ($result) { header("Location: home.php"); }
    else { echo mysqli_error($conn); }

    echo "<p><a href='home.php'>Home</a></p>";
}

require 'php_views/create.view.php';
