<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";

$database = "ramenshope";

 // Create a connection 
 $conn = mysqli_connect($servername, 
     $username, $password, $database);

if($conn) {
    $Fristname=$_POST['Fname'];
    $LastName=$_POST['Lname'];
    $EmailAdress=$_POST['CEmail'];
    $Massage=$_POST['message'];
  
    $query = "insert into contacdetails(firstname, lastaname, email, massage) values('$Fristname', '$LastName', '$EmailAdress', '$Massage')";

    // insert in database 
    $rs = mysqli_query($conn, $query);

    if($rs)
    {

        include 'index.html';
        
    }
} 
else {
    die("Error". mysqli_connect_error()); 
} 
mysqli_close($conn);
?>