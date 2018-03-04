<?php

session_start();

if(isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

//TODO Login logic...

require 'php_views/login.view.php';
