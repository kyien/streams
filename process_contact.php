<?php

include_once('Auth/conn.php');

$name = $_POST["name"];
$emailAddress = $_POST["email"];
$phoneNumber = $_POST["phonenumber"];
$Msg = $_POST["msg"];

// $server = "localhost";
// $username = "root";
// $password = "kyien";
// $database = "streams";

// // Create connection
// $conn = new mysqli($server, $username, $password, $database);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
$sql = "INSERT INTO contactUs(name,emailAddress,phoneNumber,message) VALUES('$name','$emailAddress','$phoneNumber','$Msg')";



if ($conn->query($sql)) {
 // echo "New record created successfully";
  $obj->status = 201;
  $obj->message = "inserted successfully";
  echo json_encode($obj);
} else {
   $obj=new \stdClass();
    $obj->status = 501;
    $obj->message = "error inserting data";
  echo json_encode($obj);
}
$conn->close();


?>