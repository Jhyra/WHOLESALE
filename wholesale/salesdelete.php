<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
include("connection.php");


$sales_id = $_GET['sales_id'];


$result=mysqli_query($db, "DELETE FROM product WHERE sales_id=$sales_id");

header("Location:proview.php");
?>
