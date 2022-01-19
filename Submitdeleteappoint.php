<?php
	require 'config.php';

	$App_id = $_POST["appid"];
	
	$query1="delete from appointment where App_id='$App_id' ";
	
	$result=mysqli_query($conn,$query1);
	if($result){
		echo"<script>alert ('Appoinment is successfully Deleted!!!')</script>";
		header("Location:suwasetha.html");
	}
	else {
		echo"<script>alert ('Error in Delete Appoinment!!!')</script>";
	}
	
	mysqli_close($conn);
	
?>