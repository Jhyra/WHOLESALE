<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php

include_once("connection.php");

if(isset($_POST['update']))
{	
	$cus_id = $_POST['cus_id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$contactno = $_POST['contactno'];
	$address = $_POST['address'];
	
	$result = mysqli_query($db, "UPDATE customer SET cus_id='$cus_id', firstname='$firstname', lastname='$lastname', contactno='$contactno', address='$address");
		
		header("Location: cusview.php");
}
?>
<?php
$cus_id = $_GET['cus_id'];

$result = mysqli_query($db, "SELECT * FROM customer WHERE cus_id=$cus_id");

while($res = mysqli_fetch_array($result))
{
	$cus_id = $res['cus_id'];
	$firstname = $res['firstname'];
	$lastname = $res['lastname'];
	$contactno = $res['contactno'];
	$address = $res['address'];
}
?>
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
			width: 80%;
		}
	</style>
</head>
<body>
<br><br><br>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-padding w3-card" style="letter-spacing:4px;">
    <a class="w3-bar-item">Tindahan ng Bayan</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="view.php" class="w3-bar-item w3-button">Employee</a>
      <a href="proview.php" class="w3-bar-item w3-button">Product</a>
	  <a href="salesview.php" class="w3-bar-item w3-button">Sales</a>
	  <a href="salesitemview.php" class="w3-bar-item w3-button">Sales Item</a>
	  <a href="salview.php" class="w3-bar-item w3-button">Salary</a>
	  
      <a href="index.php" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>
<br><br><br>
		<form name="form1" method="post" action="cusedit.php">
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">cus_id</label>
					<div class="col-sm-5">
						<input type="number" name="cus_id" value="<?php echo $cus_id;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">firstname</label>
					<div class="col-sm-5">
						<input type="text" name="firstname" value="<?php echo $firstname;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">lastname</label>
					<div class="col-sm-5">
						<input type="text" name="lastname" value="<?php echo $lastname;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">contactno</label>
					<div class="col-sm-5">
						<input type="number" name="contactno" value="<?php echo $contactno;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">address</label>
					<div class="col-sm-5">
						<input type="text" name="address" value="<?php echo $address;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label"></label>	
					<div class="col-sm-10">
						<input type="hidden" name="cus_id" value=<?php echo $_GET['cus_id'];?>>
							<button class="btn btn-outline-success" type="submit" name="update" value="Update">update</button>
					</div>
			</div>
		</form>
	</div>
</br/>
	
</body>
</html>
