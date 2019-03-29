<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
include("connection.php");


$cus_id = $_GET['cus_id'];


$result=mysqli_query($db, "DELETE FROM customer WHERE cus_id=$cus_id");

header("Location:cusview.php");
?>
