<?php

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

$task_id = $_GET['id'];
$date = date('Y-m-d');
$query = "UPDATE `tasks` SET `date_deleted` = '".$date."' WHERE `id` = $task_id;";
//$delete_query = "DELETE FROM tasks WHERE task_id = $task_id";
$result = mysqli_query($conn, $query);

if ($result) { header("Location: home.php"); }
else { echo mysqli_error($conn); }

echo "<p><a href='home.php'>Home</a></p>";
