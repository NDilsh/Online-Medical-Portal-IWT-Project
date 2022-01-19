<?php
	require 'config.php';

	$App_pname = $_POST["pname"];
	$d_name = $_POST["dname"];
	$d_category = $_POST["specialty"];
	$pdate = $_POST["pdate"];
	$ptime = $_POST["ptime"];
	
	
	$sql = "insert into appointment(App_id,App_pname,d_name,d_category,App_date,App_time)values('','$App_pname','$d_name','$d_category','$pdate','$ptime')";
	
	if(mysqli_query($conn,$sql)){
		echo"<script>alert ('Appoinment is successfully Added!!!')</script>";
		header("Location:suwasetha.html");
	}
	else {
		echo"<script>alert ('Error in Add Appoinment!!!')</script>";
	}
	
	mysqli_close($conn);
	
?>