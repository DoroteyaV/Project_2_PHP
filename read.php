<?php

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

$id = $_GET['id'];

$query = "SELECT * FROM `tasks` WHERE `id` = $id";
$result = mysqli_query($conn, $query);

if($result) { $task = mysqli_fetch_assoc($result); }
else { echo "this task is not in database!"; }

require 'php_views/read.view.php';
