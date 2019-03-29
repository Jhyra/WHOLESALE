<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
include("connection.php");


$emp_id = $_GET['emp_id'];


$result=mysqli_query($db, "DELETE FROM salary WHERE emp_id=$emp_id");

header("Location:salview.php");
?>
