<?php 

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

$task_id = $_GET['task_id'];
$date = ('Y-m-d');
$update_query = "UPDATE tasks SET date_deleted = $date WHERE task_id = $task_id";
$delete_query = "DELETE FROM tasks WHERE task_id = $task_id";
$result = mysqli_query($conn, $update_query);

if ($result) {
	echo "Successfully deleted!";
	echo "<a href = 'home.view.php'>Home</a>";
}

require 'php_views/home.view.php';