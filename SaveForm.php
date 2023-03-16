<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";

$database = "ramenshope";

 // Create a connection 
 $conn = mysqli_connect($servername, 
     $username, $password, $database);

if($conn) {
    $Fristname=$_POST['firstname'];
    $LastName=$_POST['lastname'];
    $EmailAdress=$_POST['email'];
    $password=$_POST['Password'];
    $CPassword=$_POST['ConfirmPassword'];
    $query = "insert into user(Fristname, LastName, EmailAdress, password, CPassword) values('$Fristname', '$LastName', '$EmailAdress', '$password' ,'$CPassword')";

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



/*if(!empty($_POST['submit']))
{
    $Fristname=$POST['firstname'];
    $LastName=$POST['lastname'];
    $EmailAdress=$POST['email'];
    $password=$POST['Password'];
    $CPassword=$POST['ConfirmPassword'];
    $query = "insert into user(Fristname, LastName, EmailAdress, password, CPassword) values('$Fristname', '$LastName', '$EmailAdress', '$password' ,'$CPassword')";
   
}*/
?>