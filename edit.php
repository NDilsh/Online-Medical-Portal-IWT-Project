<?php
	include 'config.php';
?>

<?php

	$pay_ID= $_POST["n6"];
	
	$query2 = "delete from payment where payment_ID = '$pay_ID' ";
	
	 if(mysqli_query($conn,$query2))
	 {
			echo "<script> alert ('your all payment data deleted..!')</script>";
			header("Location:index.html");
	 }
	 else
	 {
		 echo "<script>alert ('Erro')</script>";
	 }
?>