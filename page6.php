<html>
	<head>
		<title>Search Colleges</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div class="col-xs-12">
				<h1 class="text-center">Cornell Name<span class="glyphicon glyphicon-plus pull-right" aria-hidden="true" style="font-size:3vw;"></span></h1>
			</div>
		</div>

		<table class="table table-hover">
			<thead>
				<th>Task Name</th>
				<th>Date Started</th>
				<th>Time Spent on Task</th>
				<th>Deadline</th>
				<th>Completed?</th>
			</thead>
			<tbody>
<?php
require("database.php");
$universityID = (isset($_GET['id'])) ? $_GET['id'] : '';
$sql = "SELECT * FROM task WHERE school_id = '".$universityID."'";
$result = $conn->query($sql);

if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
		
while($row = $result->fetch_assoc()) {
	if $row['completed'] == "1" {
		$com = 'checked';
	}
	
	echo '<tr><td>'.$row['task_name'].'</td><td>'.$row['deadline'].'</td><td>'.$row['deadline'].'</td><td>'.$row['created'].'</td><tr><input type="checkbox" '.$com.'></td></tr>';
}
		
?>
			</tbody>
		</table>
	</body>
</html>
