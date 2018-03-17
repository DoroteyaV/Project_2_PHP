<?php

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

include_once 'php_functions/get_flag.php';

include_once 'php_functions/get_buttons.php';

$type = $_GET['type'];

$q = "SELECT * FROM `tasks` WHERE `date_deleted` IS NULL";

$result = mysqli_query($conn, $q);

$tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);

require 'php_views/home.view.php';
