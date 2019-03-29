<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
include("connection.php");


$prod_id = $_GET['prod_id'];


$result=mysqli_query($db, "DELETE FROM product WHERE prod_id=$prod_id");

header("Location:proview.php");
?>
