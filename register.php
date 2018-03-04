<?php

session_start();

if(isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

//TODO Registration logic...

require 'php_views/register.view.php';
