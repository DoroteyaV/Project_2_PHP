<?php

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

// DO IT BY QUERIES??? 

if(isset($_POST['choose_tasks'])){
	$select_tasks = $_POST['choose_tasks'];
    switch ($select_tasks) {
        case '0':
        	$date_DB = "SELECT "
            echo '';
            break;
        case '1':
            echo '';
            break;
        case '2':
            echo '';
            break;
        /*default:
            # code...
            break;*/
    }
}

require 'php_views/home.view.php';