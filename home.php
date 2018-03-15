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

			//echo "<td>" . $row['due_date'] . "</td>";
			// $date1=date('d_m_y');
			// $date2='31_12_11';
			// if(strtotime($date1) < strtotime($date2))
			//    echo '1 is small ='.strtotime($date1).','.$date1;
			// else
			//    echo '2 is small ='.strtotime($date2).','.$date2;
			// $yearArray[] = date("Y-m-d", mktime(0,0,0,1,365,2008);
			echo "<td>" . $row['due_date'] . "</td>";
			 
			$current_date = date("yyyy-m-d");
					if(strtotime($row['due_date']) == strtotime($current_date)){
						echo "TODAY";
					} 
					elseif (strtotime($row['due_date']) < strtotime($current_date) - 6) {
						echo "APPROACHING";
					} elseif (strtotime($row['due_date']) < strtotime($current_date)) {
						echo "COMING";
					} elseif (strtotime($row['due_date']) > strtotime($current_date)) {
						echo "COMPLETED";
					}
				
			//echo "<td>" . $row['due_date'] . "</td>";
			//<td> for buttons view, edit, delete </td>
			echo "<td><a href='view.php?id=" . $row['task_id'] . "'>View</a></td>";
			echo "<td><a href='update.php?id=" . $row['task_id'] . " '>Update</a></td>";
			echo "<td><a href='delete.php?id=" . $row['task_id'] . " '>Delete</a></td>";
			echo "</tr>";
	}
	echo "</table>";
}
require 'php_views/home.view.php';
