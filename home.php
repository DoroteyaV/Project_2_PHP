<?php

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

//TODO calendar business logic for the view...
$q = "SELECT * FROM `tasks` WHERE `date_deleted` IS NULL";
$result = mysqli_query($conn, $q);
$i = 1;

if ($result) {
	echo "<table class='table table-borderless'>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
			echo "<td>" . $i++ . "</td>";
			echo "<td>" . $row['task_title'] . "</td>";
			echo "<td>" . $row['task_description'] . "</td>";
			echo "<td>" . $row['due_date'] . "</td>";
			 
			$current_date = date("yyyy-m-d");
					if(strtotime($row['due_date']) == strtotime($current_date)){
						echo "<td>TODAY</td>";
					} 
					elseif (strtotime($row['due_date']) > strtotime($current_date) - 6) {
						echo "<td>APPROACHING</td>";
					} elseif (strtotime($row['due_date']) > strtotime($current_date)) {
						echo "<td>COMING</td>";
					} elseif (strtotime($row['due_date']) < strtotime($current_date)) {
						echo "<td>COMPLETED</td>";
					}
				
			//echo "<td>" . $row['due_date'] . "</td>";
			//<td> for buttons view, edit, delete </td>
			echo "<td><a href='view_task.php?id=" . $row['id'] . "'>View</a></td>";
			echo "<td><a href='update.php?id=" . $row['id'] . " '>Update</a></td>";
			echo "<td><a href='delete.php?id=" . $row['id'] . " '>Delete</a></td>";
			echo "</tr>";
	}
	echo "</table>";
}
require 'php_views/home.view.php';
