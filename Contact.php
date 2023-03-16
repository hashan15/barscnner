<?php
$servername = "localhost";
$username = "root"
$dbname = "jpfdb";
$FirstName = $_GET['FName'];
$LastName = $_GET['LName'];
$Email = $_GET['mail'];
$password = $_GET['password'];
$confirmpassword = $_GET['confirmpassword'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO sign up (FirstName,LastName,Email,password,confirmpassword)
VALUES ('$FirstName','$LastName','$Email','$password','$confirmpassword')";

if ($conn->query($sql) === TRUE){
	echo "Database created successfully";
} else{
  echo "Error: " . $sql . "<br>" .$conn->error;
}


$conn->close();
?>