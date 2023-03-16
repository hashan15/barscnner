<?php

$servername = "localhost"; 
$username = "root"; 
$password = "";


$database = "ramenshope";

 // Create a connection 
 $conn = mysqli_connect($servername, 
     $username, $password, $database);
 /*
     session_start();
     
$conn = mysqli_connect('localhost','root','');
$database = mysqli_select_db($conn,'ramenshope');*/

     $user = $_POST['User'];
     $pass = $_POST['Password'];
     

if($conn) 
{
   
   
        $query = "SELECT * FROM user WHERE EmailAdress = '". $user ."' AND password = '". $pass ."'" ;
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result) == 1) 
         {
            $conn->close();
            include 'ContacDetails.php'; //Pass, do something
         } 
          else 
         {
           
           echo("No Data"); //Fail
         }
   
    
   
}
mysqli_close($conn);
?>