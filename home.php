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
			// $yearArray[] = date("Y-m-d", mktime(0,0,0,1,365,2008);
			$due_date = $_POST['due_date'];
			$date_explode = explode('-', $due_date);
			$current_date = date("yyyy-m-d");
				foreach ($due_date as $value) {
					$date_explode;
					if ($due_date = $current_date) {
						echo "TODAY";
						} elseif ($due_date < $current_date - 6 ) {
						echo "APPROACHING";
						} elseif ($due_date < $current_date) {
						echo "COMING";
						} elseif ($due_date > $current_date) {
							echo "COMPLETED";
						}
				}
			echo "<td>" . $row['due_date'] . "</td>";
			//<td> for buttons view, edit, delete </td>
			echo "<td><a href='view.php?id=" . $row['task_id'] . " '>View</a></td>";
			echo "<td><a href='update.php?id=" . $row['task_id'] . " '>Update</a></td>";
			echo "<td><a href='delete.php?id=" . $row['task_id'] . " '>Delete</a></td>";
			echo "</tr>";
	}
	echo "</table>";
}
$date_implode = implode('-', $date_explode);

echo $date_implode;

require 'php_views/home.view.php';
