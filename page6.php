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
<p>Hello</p>
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
				echo '<tr><td>Test-1</td></tr>';
				require("database.php");
				$universityID = (isset($_GET['id'])) ? $_GET['id'] : '';
				echo '<tr><td>Test0</td></tr>';
				$result = $conn->query("SELECT * FROM task WHERE school_id = '".$universityID."'");
				
				echo '<tr><td>Test1</td></tr>';
				if (!$result) {
    					echo 'Could not run query: ' . mysql_error();
    					exit;
				}
				
				while($row = $result->fetch_assoc()) {
					echo '<tr><td>'.$row['task_name'].'</td><td>'.$row['deadline'].'</td><td>'.$row['deadline'].'</td><td>'.$row['created'].'</td><tr><input type="checkbox"></td></tr>';
				}
				?>
			</tbody>
		</table>
	</body>
</html>
