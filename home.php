<?php

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

//TODO calendar business logic for the view...

$task_duedate = $_POST['task_duedate'];
$date_explode = explode('-', $task_duedate);
$current_date = date("yyyy-m-d");
foreach ($task_duedate as $value) {
	$date_explode;
	if ($task_duedate = $current_date) {
		echo "TODAY";
	} elseif ($task_duedate < $current_date - 6 ) {
		echo "APPROACHING";
	} elseif ($task_duedate < $current_date) {
		echo "COMING";
	}
}
$date_implode = implode('-', $date_explode);

echo $task_duedate;

require 'php_views/home.view.php';
