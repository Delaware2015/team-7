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
$sql = "SELECT distinct t.deadline FROM task as t, student as s WHERE s.student_id = t.student_id ORDER BY t.deadline";
$result = $conn->query($sql);
$blank = array();

while($row = $result->fetch_array()) {
	$blank[] = $row['deadline'];
}
	foreach($blank as $value) {
?>
			<div class="row">
				<div class="col-xs-12">
					<h3><i><?php echo $value; ?></i></h3>
				</div>
			</div>
			<table class="table-condensed">
				<?php echo $value; ?>
				
			</table>
			<?php } ?>
		</div>
	<body>
</html>
