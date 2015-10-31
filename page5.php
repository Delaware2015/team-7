<html>
	<head>
		<title>Search Colleges</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-10">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Search for Colleges" aria-describedby="basic-addon2">
				  <span class="input-group-addon glyphicon glyphicon-search" id="basic-addon2"></span>
				</div>
			</div>
		</div>
		
		<table class="table table-striped">
			<thead>
				<th>Name</th><th>Enrollment Date</th>
			</thead>
			<tbody>
<?php
require("database.php");
$sql = "SELECT * FROM school";
$result = $conn->query($sql);
		
while($row = $result->fetch_assoc()) {
	// This section will be where all of the college information goes.
	// College id number, College name, college application deadline.
	echo '<tr><td>'.$row['school_name'].'</td><td>'.$row['enrollment_date'].'</td></tr>';
}
		
?>
			</tbody>
		</table>
	</body>
</html>
