<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php	
include_once("connection.php");

$result = mysqli_query($db, "SELECT * FROM salary  ORDER BY emp_id DESC");
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
	  <a href="saladd.php" class="w3-bar-item w3-button">Salary</a>
      <a href="index.php" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>
<br><br><br>
	<div class="container">
		<table class="table">
			<tr bgcolor='gray'>
			<td>emp_id</td>
			<td>salary</td>
			<td>date</td>
			<td>action</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['emp_id']."</td>";
			echo "<td>".$res['salary']."</td>";
			echo "<td>".$res['date']."</td>";
			echo "<td><a href=\"saledit.php?emp_id=$res[emp_id]\">Edit</a> | <a href=\"saldelete.php?emp_id=$res[emp_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
  <tbody>
</table>
<br/>
<center><a class="btn btn-sm btn-outline-info" href="saladd.php">add salary</a>
</div>
		<br/><br/>
	
</body>
</html>
