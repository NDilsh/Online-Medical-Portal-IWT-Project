<?php
	include 'config.php';
?>

<?php

	$cardtype = $_POST["n0"];
	$c_name = $_POST["n1"];
	$c_no = $_POST["n2"];
	$e_month = $_POST["n3"];
	$e_year = $_POST["n4"];
	$cvv = $_POST["n5"];
	
	$sql = "insert into payment(payment_ID,Card_type,C_name,Card_no,E_month,E_year,Cvv) values ('','$cardtype','$c_name','$c_no','$e_month','$e_year','$cvv')";

	if(mysqli_query($conn,$sql)){
		
		header("Location:editpayment.html");		
	}
	else{
		echo "<script>alert ('Erro')</script>";
	}
	
	
	mysqli_close($conn);
?>