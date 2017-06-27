<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Lap trinh web</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen">
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<div class="signin-form">

			<div class="container">

				<form action = "Connect.php" class="form-signin" method="post">

					<h2 class="form-signin-heading">Login</h2><hr />

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" name="username" id="username" />
					</div>


					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="pw" id="pw" />
					</div>
					
					<hr />

					<div class="form-group">
						<button type="submit" class="btn btn-default" name="ok" id="btn-submit">
							<span class="glyphicon glyphicon-log-in"></span> &nbsp; Log in
						</button>
					</div>
				</form>
			</div>
		</div>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
