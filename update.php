<?php

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

if (!empty($_POST['update']))
{
    $id = $_POST['id'];
	$title = $_POST['task_title'];
    $title = htmlspecialchars($title);
    $title = mysqli_real_escape_string($title);
	$desc = $_POST['task_description'];
    $desc = htmlspecialchars($desc);
    $desc = mysqli_real_escape_string($desc);
	$due = $_POST['due_date'];

    $sql = "UPDATE calendar.tasks SET task_title='".$title."', task_description='".$desc."', due_date='".$due."' WHERE id = $id;";
	$result = mysqli_query($conn, $sql);

    if ($result) { header("Location: home.php"); }
    else { echo mysqli_error($conn); }

	echo "<p><a href='home.php'>Home</a></p>";
}
else
{
    $task_id = $_GET['id'];
    $select_query = "SELECT * FROM `tasks` WHERE `id` = $task_id;";
    $result = mysqli_query($conn, $select_query);

    if ($result) { $task = mysqli_fetch_assoc($result); }
    else { echo mysqli_error($conn); }
}

require 'php_views/update.view.php';
