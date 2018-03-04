<?php

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

//TODO calendar business logic for the view...

require 'php_views/home.view.php';
