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
$sql = "SELECT t.deadline FROM task as t, student as s WHERE s.student_id = t.student_id ORDER BY t.deadline";
$result = $conn->query($sql);
$blank = array();

while($row = $result->fetch_assoc()) {
	$blank[] = $row['deadline'];
?>

			<div class="row">
				<div class="col-xs-12">
					<h3><i><?php foreach (array_unique($blank) as $value) { echo $value; } ?></i></h3>
				</div>
			</div>
			<table class="table-condensed">
				
				<?php
				
				$sql2 = "SELECT * FROM task WHERE date_format($row['deadline'], '%Y-%m-%d') in '$row['deadline']'";
				$result2 = $conn->query($sql2);
				
				while($row2 = $result2->fetch_assoc()) {
					echo '<tr><td>Something</td><td>'.$row2['task_name'].'</td></tr>';
				}
				?>

			</table>
			<?php } ?>
		</div>
	<body>
</html>
