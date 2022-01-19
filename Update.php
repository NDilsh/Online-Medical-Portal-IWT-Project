<?php
$servername = "localhost";
$username = "user";
$password = "";
$database = "medical_service_sliit";

 $connection = mysqli_connect($servername, $username, $password, $database);

 if (!$connection) {
     die("Connection failed: " . mysqli_connect_error());
 }

 $sql = sprintf(
    "UPDATE patient SET 
    P_Name ='%s', 
    User_Name = '%s',
    NIC_no='%s',
    Address = %s,
    Password='%s',
    Gender= '%s',
    E_mail='%s'
     WHERE User_Name = '%s' AND Password = '%s';", $_POST["pname"], $_POST["uname_new"], $_POST["nic"],
     $_POST["address"], $_POST["passwd_new"], $_POST["gender"], $_POST["email"], $_POST["current_uname"],$_POST["current_passwd"]);


if ($connection->query($sql) === TRUE) {
    echo "Profile Data Updated!";
} else {
echo "Error updating records: " . $connection->error;
}

$connection->close();

?>