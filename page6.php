<?php
require("database.php");
$universityID = (isset($_GET['id'])) ? $_GET['id'] : '';
$sql = "SELECT * FROM school WHERE school_id = '".$universityID."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<html>
	<head>
		<title>Search Colleges</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<div class="row">
			<?php?>
			<div class="col-xs-12">
				<h1 class="text-center"><?php echo $row['school_name']; ?> Application<span class="glyphicon glyphicon-plus pull-right" aria-hidden="true" style="font-size:3vw;"></span></h1>
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
	
				$result = $conn->query("SELECT * FROM task WHERE school_id = '".$universityID."'");
				
				if (!$result) {
    					echo 'Could not run query: ' . mysql_error();
    					exit;
				}
				
				while($row = $result->fetch_assoc()) {
					echo '<tr><td><a href="page9.php">'.$row['task_name'].'</a></td><td>'.$row['deadline'].'</td><td>'.$row['deadline'].'</td><td>'.$row['created'].'</td><td><input type="checkbox"></td></tr>';
				}
				?>
			</tbody>
		</table>
	</body>
</html>
