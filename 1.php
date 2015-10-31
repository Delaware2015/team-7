<html>
<head>
	<title>Login</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
	
<?php
if (isset($_POST['submit'])){
	$username = $_POST['inputEmail3'];
	$password = $_POST['inputPassword3'];
	
	if($username == 'rberry95@yahoo.com') {
		echo 'yessss';
	}
	
} else {
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="center-block">College App</h1>
			</div>
		</div>
		<form class="form-horizontal" method="POST">
			<div class="form-group">
				   <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-10 col-xs-12">
				      <input type="email" class="form-control" name="inputEmail3" placeholder="Email">
				    </div>
			</div>

			<div class="form-group">
			  	<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			  	<div class="col-sm-10 col-xs-12">
			      <input type="password" class="form-control" name="inputPassword3" placeholder="Password">
			    </div>
			</div>

			<div class="form-group">
			    <div class="col-xs-offset-5 col-xs-3">
			      <button type="submit" class="btn btn-default btn-block center-block" name="submit">Sign In</button>
			    </div>
			</div>

			<div class="form-group">
			    <div class="col-xs-offset-5 col-xs-3">
			      <button type="submit" class="btn btn-default btn-block center-block">Sign Up</button>
			    </div>
			</div>

		</form>
	</div>
<?php
}
?>
</body>
</html>
