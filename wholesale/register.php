<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		body {
			background-image: url(img/aa.jpg);
			color: white;
			width: 100%;
		}
	</style>
</head>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-padding w3-card" style="letter-spacing:4px;">
    <a class="w3-bar-item">Tindahan ng Bayan</a>
    </div>
  </div>
</div>
				<nav class="navbar navbar-light bg-transparent">
					<a class="navbar-brand" href="register.php">
							
					</a>
				</nav>
		</nav>
	</nav>
<br><br><br>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	$db = mysqli_connect('localhost','root','','ws');

	if($user == "" || $pass == "" || $firstname == "" || $lastname == "" || $email == "") {
		echo "<br/>";
	} else {
		mysqli_query($db, "INSERT INTO login(firstname, lastname, email, username, password) VALUES('$firstname', '$lastname', '$email', '$user', md5('$pass'))")
			or die("Could not execute the insert query.");
			
		header('location: login.php');
	}
} else {
?>
	
  				
						
								<center><form name="" method="post" action=""><br/>
									
										<h2>Sign up!</h2>
									<br/>
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
</div><br/><br/>
	
</body>
</html>
