<?php

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

include_once 'php_functions/get_flag.php';

include_once 'php_functions/get_buttons.php';

$type = $_GET['type'];
$userId = $_SESSION['usr_id'];

$q = "SELECT * FROM `tasks` WHERE `user_id` = $userId AND `date_deleted` IS NULL;";
$result = mysqli_query($conn, $q);

if ($result) { $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC); }
else { $tasks = []; }

require 'php_views/home.view.php';
