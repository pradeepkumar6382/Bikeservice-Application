<?php 
$delete=$_GET['id'];
$con=mysqli_connect("localhost","root","","bikeservice");
	$query="DELETE FROM `owners` WHERE ownerid=$delete";
	$result=mysqli_query($con,$query);
	header("location:login.php");
?>