<html>
<head>
	<title>Home</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>

	<?php
		if(isset($_POST['search'])){
			header("Location: http://ec2-54-87-67-182.compute-1.amazonaws.com/team-7/page5.php");
		} elseif(isset($_POST['calendar'])){
			header("Location: http://ec2-54-87-67-182.compute-1.amazonaws.com/team-7/8.php");
		}
	?>

	<div class="container-fluid">
		<div class="row header">
			<div class="col-xs-12">
				<h1 class="text-center">Home</h1>
			</div>
			<div class="glyph-pos">
				<span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
			</div>
		</div>
		<form class="row top form-group" method="POST">
			<button class="col-xs-6 btn btn-default btn-block" type="submit" name="search">
				<h2 class="text-center vert-align">Search for Colleges</h2>
			</button>
			<button class="col-xs-6 btn btn-default btn-block" type="submit" name="calendar">
				<h2 class="text-center vert-align">Master Calendar</h2>
			</button>
		</form>
		<form class="row bottom form-group">
			<button class="col-xs-6 btn btn-default btn-block" type="submit">
				<div class="row star">
					<div class="col-xs-4">
						<span class="glyphicon glyphicon-star"></span>
					</div>
					<div class="col-xs-4">
						<span class="glyphicon glyphicon-star"></span>
					</div>
					<div class="col-xs-4">
						<span class="glyphicon glyphicon-star"></span>
					</div>
				</div>
				<h2 class="text-center vert-align">Achievements</h2>

			</button>
			<button class="col-xs-6 btn btn-default btn-block" type="submit">
				<h2 class="text-center vert-align">Contact Mentor</h2>
			</button>
		</form>
	</div>
</body>
</html>
