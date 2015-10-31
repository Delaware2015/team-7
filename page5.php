<html>
	<head>
		<title>Search Colleges</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	</head>
	<body>
		<br><div class="row">
			<div class="col-xs-offset-1 col-xs-10">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Search for Colleges" aria-describedby="basic-addon2">
				  <span class="input-group-addon glyphicon glyphicon-search" id="basic-addon2"></span>
				</div>
			</div>
		</div>
		
		<center><table class="table table-hover">
			<thead>
				<th>Name</th><th>Enrollment Date</th>
			</thead>
			<tbody>
<?php
require("database.php");
$sql = "SELECT * FROM school";
$result = $conn->query($sql);
		
while($row = $result->fetch_assoc()) {
	list($date, $time) = split(" ", $row['enrollment_deadline']);
	echo '<tr><td><a href="page6.php?id='.$row['school_id'].'">'.$row['school_name'].'</a></td><td>'.date_format(date_create($date), 'F jS Y').'</td></tr>';
}
		
?>
			</tbody>
		</table></center>
	</body>
</html>
