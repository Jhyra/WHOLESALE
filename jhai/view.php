<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php	
include_once("connection.php");

$result = mysqli_query($db, "SELECT * FROM contacts WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>wholesale</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url(img/hq.jpg);
			color: white;
			width: 90%;
		}
	</style>
</head>
<body>
					<nav class="navbar navbar-expand-lg navbar-success bg-gray">
					<a>
						<h4>EMPLOYEE</h4>
							</a>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
									</li>
								</ul>
												<a class="btn btn-sm btn-outline-danger" href="login.php">logout</a>
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
			<td>contact</td>
			<td>address</td>
			<td>action</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {	
		
			echo "<tr>";
			echo "<td>".$res['firstname']."</td>";
			echo "<td>".$res['lastname']."</td>";
			echo "<td>".$res['phone_number']."</td>";
			echo "<td>".$res['address']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
  <tbody>
</table>
<br/>
<center><a class="btn btn-sm btn-outline-info" href="add.php">add employee</a>
</div>
		<br/><br/>
	
</body>
</html>
