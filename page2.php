<html>
<head>
	<title>Sign Up</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
<?php
if(isset($_POST['student'])) {
	header("Location: http://ec2-54-87-67-182.compute-1.amazonaws.com/team-7/4.html");
}
?>
	<div class="container-fluid">

		<div class="row">
			<div class="col-xs-6 col-sm-4">
				<h1 class="center-block">Sign Up</h1>
		</div>

		</div>
		<div class="row">
			<input class="btn btn-default btn-large btn-block" type="button" value="Student" name="student">
			
		</div>

		<div class="row">
			<input class="btn btn-default btn-large btn-block" type="button" value="Mentor">
	
		</div>

	</div>
</body>
</html>
