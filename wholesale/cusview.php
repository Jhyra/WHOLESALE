<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php	
include_once("connection.php");

$result = mysqli_query($db, "SELECT * FROM customer WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
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
	<style>
		body {
			background-image: url(img/aaa.jpg);
			color: white;
			width: 90%;
		}
	</style>
</head>
<body>
<br><br>
					<nav class="navbar navbar-expand-lg navbar-success bg-gray">
				    <a class="btn btn-sm btn-success" href="logout.php">EMPLOYEE</a>
					<a class="btn btn-sm btn-success" href="logout.php">PRODUCT</a>

							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
									</li>
								</ul>
												<a class="btn btn-sm btn-danger" href="logout.php">logout</a>
											</div>
										</li>			
									</ul>
								</form>
							</div>
					</nav>
		</div>
<br/><br/>
	<div class="container">
		<table class="table">
			<tr bgcolor='gray'>
			<td>firstname</td>
			<td>lastname</td>
			<td>phonenumber</td>
			<td>email</td>
			<td>address</td>
			<td>action</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['firstname']."</td>";
			echo "<td>".$res['lastname']."</td>";
			echo "<td>".$res['phone_number']."</td>";
			echo "<td>".$res['email']."</td>";
			echo "<td>".$res['address']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
  <tbody>
</table>
<br/>
<center><a class="btn btn-sm btn-outline-info" href="cusadd.php">add customer</a>
</div>
		<br/><br/>
	
</body>
</html>
