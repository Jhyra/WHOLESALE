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
	$emp_id = $_POST['emp_id'];
	$salary= $_POST['salary'];
	$date = $_POST['date'];
	
	$result = mysqli_query($db, "UPDATE salary SET emp_id='$emp_id', salary='$salary', date='$date' WHERE emp_id=$emp_id");
		
		header("Location: salview.php");
}
?>
<?php
$emp_id = $_GET['emp_id'];

$result = mysqli_query($db, "SELECT * FROM salary WHERE emp_id=$emp_id");

while($res = mysqli_fetch_array($result))
{
	$emp_id = $res['emp_id'];
	$salary = $res['salary'];
	$date = $res['date'];

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
			width: 100%;
		}
	</style>
</head>
<body>
<br><br>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-padding w3-card" style="letter-spacing:4px;">
    <a class="w3-bar-item">Tindahan ng Bayan</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="view.php" class="w3-bar-item w3-button">Employee</a>
	  <a href="cusview.php" class="w3-bar-item w3-button">Customer</a>
      <a href="proview.php" class="w3-bar-item w3-button">Product</a>
	  <a href="salesview.php" class="w3-bar-item w3-button">Sales</a>
	  <a href="salesitemview.php" class="w3-bar-item w3-button">Sales Item</a>
	  <a href="salview.php" class="w3-bar-item w3-button">Salary</a>
      <a href="index.php" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>
<br><br><br>
		<form name="form1" method="post" action="saledit.php">
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">emp_id</label>
					<div class="col-sm-5">
						<input type="number" name="emp_id" value="<?php echo $emp_id;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">salary</label>
					<div class="col-sm-5">
						<input type="number" name="salary" value="<?php echo $salary;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">date</label>
					<div class="col-sm-5">
						<input type="date" name="date" value="<?php echo $date;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label"></label>	
					<div class="col-sm-10">
						<input type="hidden" name="emp_id" value=<?php echo $_GET['emp_id'];?>>
							<button class="btn btn-outline-success" type="submit" name="update" value="Update">update</button>
					</div>
			</div>
		</form>
	</div>
</br/>
	
</body>
</html>
