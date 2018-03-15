<?php

session_start();

if(!isset($_SESSION['usr_id'])) { header("Location: index.php"); }

include_once 'php_includes/dbconnect.php';

$q = "SELECT * FROM tasks ORDER BY id";
$result = mysqli_query($conn, $q);

//SHOULD GET THE ID OF THE TASK...PROBLEM IN MY HEAD
if ($result) {
	echo "<table class='table table-borderless'>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
			echo "<td>" . /*$row[0]*/ . "</td>";
			echo "<td>" . /*$row[1]*/ . "</td>";
			echo "<td>" . /*$row[2]*/ . "</td>";
			//echo <td> flag </td>;
		echo "</tr>";
	}
	echo "</table>";
}

echo "<a href = 'home.php'>Home</a>";