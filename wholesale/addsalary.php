<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
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
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="cusview.php" class="w3-bar-item w3-button">Customer</a>
      <a href="proview.php" class="w3-bar-item w3-button">Product</a>
	  <a href="#menu" class="w3-bar-item w3-button">Sales</a>
	  <a href="#menu" class="w3-bar-item w3-button">Sales Item</a>
	  <a class="w3-bar-item">Salary</a>
      <a href="index.php" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>
<br><br><br><br><br><br>
<?php

include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$emp_id = $_POST['emp_id'];
	$salary = $_POST['salary'];
	$time = $_POST['time'];
	$remarks = $_POST['remarks'];
	$loginId = $_SESSION['id'];
	
		
	$result = mysqli_query($db, "INSERT INTO salary(id, emp_id, salary, time, remarks, login_id) VALUES('$id', '$emp_id', '$salary', '$time', '$remarks', '$loginId')");
		header('location: salary.php');
	} 
?>
<div class="container">
	<form action="addsalary.php" method="post" name="form1">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Employee
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="view.php">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label">salary:</label>
				<div class="col-sm-5">
					<input type="number" name="salary" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label">date:</label>
				<div class="col-sm-5">
					<input type="date" name="date" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label">remarks:</label>
				<div class="col-sm-5">
					<input type="text" name="remarks" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label"></label>
				<div class="col-sm-5">
					<center><button class="btn btn-outline-warningbtn btn-sm btn-outline-primary" type="submit" name="Submit" value="Add">Add</button>
					
				</div>
		</div>
		
	</form>
</div>
</br>
	
</body>
</html>
