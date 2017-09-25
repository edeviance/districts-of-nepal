<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
	
	
	<?php
		
		$connection = mysqli_connect("localhost", "root", "root", "nepal_districts");
		
		$sql_query = "SELECT * FROM nepal_district";
		
		$result_query = mysqli_query($connection, $sql_query);
		
		$json_array = array();
		
		while($row = mysqli_fetch_assoc($result_query)) {
			
			$json_array[] = $row;
		}
		
		echo '<pre>';
		print_r($json_array);
		echo '</pre>';
		
	?>

	</body>
</html>