<?php
	require 'config.php';

	$title = $_POST["title"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$gender = $_POST["gender"];
	$phone = $_POST["phone"];
	$nic = $_POST["nic"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$dob = $_POST["dob"];
	$uname = $_POST["uname"];
	$pwd = $_POST["pwd"];
	
	$sql = "insert into patient(Patient_id,title,fname,lname,gender,phone,nic,email,address,dob,uname,pwd)values('','$title','$fname','$lname','$gender','$phone','$nic','$email','$address','$dob','$uname','$pwd')";
	
	if(mysqli_query($conn,$sql)){
		echo"<script>alert ('Registration is successfully!!!')</script>";
		header("Location:suwasetha.html");
	}
	else {
		echo"<script>alert ('Error in Registration!!!')</script>";
	}
	
	mysqli_close($conn);
	
	
?>