<html>
	<head>
		<title>Search Colleges</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<h1>Student Calendar</h1>
				</div>
			</div>
			
								
<?php
require("database.php");
$sql = "SELECT distinct t.deadline FROM tasks as t, student as s WHERE s.student_id = t.student_id ORDER BY t.deadline";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
	
?>
			<div class="row">
				<div class="col-xs-12">
					<h3><i><?php echo $row['deadline']; ?></i></h3>
				</div>
			</div>

			<table class="table-condensed">
			</table>
		</div>
	<body>
</html>
