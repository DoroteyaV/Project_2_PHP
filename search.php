<?php
$output = '';

if(isset($_POST['search'])) {
	$search_query = $_POST['search'];
	$search_query = preg_replace("#[^0-9a-z]#i", "", $search_query);

	$query = mysqli_query("SELECT * FROM tasks WHERE task_title LIKE '%search_query%' OR  task_description LIKE '%search_query%'") or die("Could not search");
	$count = mysqli_num_rows($query);
	if ($count == 0 ) {
		$output = "There is no search results!";
	} else {
		while ($row = mysqli_fetch_array($query)){
			$title = $row['task_title'];
			$description = $row['task_description'];
			$id = $row['id'];

			$output = '<div>' . $title . ' - ' . $description. '</div>';
		}
	}
}

echo $output;