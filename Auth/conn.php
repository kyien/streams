<?php
$server = "localhost";
$username = "ubunifu";
$password = "Ubunifu@20";
$database = "streams";
 
// Create connection and Check connection
$conn = new mysqli($server, $username, $password,$database);
// or die("Error in connection!");

//mysqli_select_db($conn, $database ) or die("Could not select database");
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }
// if($conn){
//     echo "connection successful";
// }
// else{
//     echo "connection unsuccessful";
// }
?>
