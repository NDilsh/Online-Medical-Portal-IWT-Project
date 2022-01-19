<?php
	require 'config.php';
	
	$App_id = $_POST["appid"];
	$App_pname = $_POST["pname"];
	$d_name = $_POST["dname"];
	$d_category = $_POST["specialty"];
	$pdate = $_POST["pdate"];
	$ptime = $_POST["ptime"];
	
	
	$query1 = "UPDATE 'appointment' SET 'App_id'='$App_id', 'App_pname'='$App_pname','d_name'='$d_name','d_category'='$d_category','App_date'='$pdate','App_time'='$ptime' WHERE 'appointment'.'App_id='$App_id' ";
	
	$result=mysqli_query($conn,$query1);
	
	if($result){
		echo"<script>alert ('Appoinment is Updated Successfully!!!')</script>";
		header("Location:suwasetha.html");
	}
	else {
		echo"<script>alert ('Error in Updated Appoinment!!!')</script>";
	}
	
	mysqli_close($conn);
	
?>