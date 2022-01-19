<?php
$F_name = $_POST['fname'];
$L_name = $_POST['lname'];
$Age = $_POST['dage'];
$Weight = $_POST['dweight'];
$Phone_Number = $_POST['tp1'];
$Gender = $_POST['gender'];

if (!empty($F_name) || !empty($L_name) || !empty($Age) || !empty($Weight) || !empty(Phone_Number) || !empty($Gender)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "special events";
	
	 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	 
	 if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	 } else {
	  $SELECT = "SELECT Phone_Number From blood_donetion Where Phone_number = ? Limit 1";
	  
	  $INSERT = "INSERT Into blood_donetion ( F_Name,L_Name,Age,Weight,Phone_Number,Gender) values(?, ?, ?, ?, ?, ?)";
	  $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $Phone_Number);
     $stmt->execute();
     $stmt->bind_result($Phone_Number);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
	  if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssiiss", $F_name, $L_name, $Age, $Weight, $Phone_Number, $Gender);
      $stmt->execute();
      echo "Entered data sucessfully";
	  } else {
      echo "Someone already register using this Phone Number";
     }
     $stmt->close();
     $conn->close();
	  }
} else {
 echo "All field are required";
 die();
}
?>