<?php 
	include 'scripts/authenticate.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initia-scale=1.0">
	<title>Success Forex | Register User</title>
	<!--CSS files-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/login.css" rel="stylesheet" />
</head>
<body>
	<nav class="navbar navbar-change navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle tweak" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Success Forex</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	
	<div class="container">
		<div class="register">
			<div class="form-top">
				<h2>Log In To Your Account</h2>
			</div><!--form-top/-->
		<form action="login.php" method="POST">
			<div class="form-group">
				<label for="fname">Email:</label>
				<input type="email" class="form-control" name="barua" placeholder="someone@example.com..." required>
			</div>
			<div class="form-group">
				<label for="password">Password: </label>
				<input type="password" class="form-control" name="siri" placeholder="Enter Your Password..." required>
			</div>
			<button name="ingia" type="submit" class="btn btn-info">Log In</button>
			<p>Not Yet A Member? <a href="register.php" target="_blank">Create An Account.</a></p>
		</form>
		</div><!--/.register-->
	</div>
</div><!--container-->
<footer id="logfooter">
	<div class="copyright">
       &copy; <script> document.write(new Date().getFullYear()) </script> Succcess Forex
    </div>
</footer>
</body>
<!--   core js files    -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>

</html>