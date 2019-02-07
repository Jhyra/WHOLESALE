<!DOCTYPE html>
<html lang="en">
<head>
	<title>phonebook</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url(img/hq.jpg);
			color: white;
			width: 80%;
		}
	</style>
</head>
<body>
				<nav class="navbar navbar-light bg-transparent">
					<a>
							<h4>EMPLOYEE<h4>
							
					</a>
				</nav>
		</nav>
	</nav>

<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	$db = mysqli_connect('localhost','root','','wholesale');

	if($user == "" || $pass == "" || $firstname == "" || $lastname == "" || $user == "") {
		echo "<br/>";
	} else {
		mysqli_query($db, "INSERT INTO login(firstname, lastname, email, username, password) VALUES('$firstname', '$lastname', '$email', '$user', md5('$pass'))")
			or die("Could not execute the insert query.");
			
		header('location: login.php');
	}
} else {
?>
								<center><form name="" method="post" action="">
										<h2>Sign up!</h2>
											<div class="col-md-6 mb-3">
													<input type="text" name="firstname" class="form-control is-valid" id="validationServer01" placeholder="First name"  required>
											</div>
											<div class="col-md-6 mb-3">
													<input type="text" name="lastname" class="form-control is-valid" id="validationServer01" placeholder="Last name"   required>
										</div>
											<div class="col-md-6 mb-3">
													<input type="email" name="email" class="form-control is-valid" id="validationServer01" placeholder="Email"  required>
											</div>
										</div>
											<div class="col-md-6 mb-3">
													<input type="text" name="username" class="form-control is-valid" id="validationServer01" placeholder="User name"  required>
											</div>
										</div>
											<div class="col-md-6 mb-3">
													<input type="password" name="password" class="form-control is-valid" id="validationServer01" placeholder="Password" required>
											</div>
										</div>
										<button class="btn btn-outline-success" type="submit" name="submit" value="Submit">Signup</button>
											<p>
												Already have an account? <a class="btn btn-sm btn-outline-info" href="login.php" role="button">log in</a>
											</p>
								</form>
							</div>
    					</div>
	
	

<?php
}
?>
</div>
	
</body>
</html>
