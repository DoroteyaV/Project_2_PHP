<?php

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';
include_once 'php_functions/get_flag.php';
include_once 'php_functions/get_buttons.php';

$tasks = [];
$userId = $_SESSION['usr_id'];

if(isset($_GET['search']))
{
	$search_query = $_GET['search'];

	$query = preg_replace("#[^0-9a-z]#i", "", $search_query);

    $sql = "SELECT * FROM `tasks` WHERE ((`task_title` LIKE '%".$query."%')
        OR (`task_description` LIKE '%".$query."%'))
        AND (`user_id` = $userId AND `date_deleted` IS NULL);";

    $results = mysqli_query($conn, $sql) or die(mysqli_error());

    if ($results) { $tasks = mysqli_fetch_all($results, MYSQLI_ASSOC); }
}

require 'php_views/search.view.php';
