<?php
$F_name = $_POST['firstname'];
$L_name = $_POST['lastname'];
$e_mail = $_POST['email'];
$gender = $_POST['gender'];
$subject = $_POST['subject'];


if (!empty($F_name) || !empty($L_name) || !empty($e_mail) || !empty($gender) || !empty(subject)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "contract";
	
	 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	 
	 if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	 } else {
	  $SELECT = "SELECT e_mail From contact_us Where e_mail = ? Limit 1";
	  
	  $INSERT = "INSERT Into contact_us ( F_Name,L_Name,e_mail,gender,subject) values(?, ?, ?, ?, ?, ?)";
	  $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
	  if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
     $stmt->bind_param("sssss",$F_name,$L_name,$e_mail,$gender,$subject);
      $stmt->execute();
      echo "Entered data sucessfully";
	  } else {
      echo "Someone already Contracted using this E-mail Please another email";
     }
     $stmt->close();
     $conn->close();
	  }
} else {
 echo "All field are required";
 die();
}
?>