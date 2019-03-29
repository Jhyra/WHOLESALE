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
	$id = $_POST['id'];
	
	$prod_name = $_POST['prod_name'];
	$quantity = $_POST['quantity'];
	$unit = $_POST['unit'];
	$price = $_POST['price'];

	
	$result = mysqli_query($db, "UPDATE sales_item SET prod_name='$prod_name', quantity='$quantity', unit='$unit', price='$price' WHERE id=$id");
		
		header("Location: salesitemview.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($db, "SELECT * FROM sales_item WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$prod_name = $res['prod_name'];
	$quantity = $res['quantity'];
	$unit = $res['unit'];
	$price = $res['price'];


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
      <a href="proview.php" class="w3-bar-item w3-button">Product</a>
	  <a href="#menu" class="w3-bar-item w3-button">Sales</a>
	  <a href="#menu" class="w3-bar-item w3-button">Sales Item</a>
	  <a href="#menu" class="w3-bar-item w3-button">Salary</a>
      <a href="index.php" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>
<br><br><br>
		<form name="form1" method="post" action="salesitemedit.php">
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">prod_name</label>
					<div class="col-sm-5">
						<input type="text" name="prod_name" value="<?php echo $prod_name;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">quantity</label>
					<div class="col-sm-5">
						<input type="text" name="quantity" value="<?php echo $quantity;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">unit</label>
					<div class="col-sm-5">
						<input type="text" name="unit" value="<?php echo $unit;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label">price</label>
					<div class="col-sm-5">
						<input type="number" name="price" value="<?php echo $price;?>" class="form-control" id="colFormLabel">
					</div>
			</div>
			<div class="form-group row">
				<label for="colFormLabel" class="col-sm-2 col-form-label"></label>	
					<div class="col-sm-10">
						<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
							<button class="btn btn-outline-success" type="submit" name="update" value="Update">update</button>
					</div>
			</div>
		</form>
	</div>
</br/>
	
</body>
</html>
