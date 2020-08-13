<?php

$title = $_POST["booktitle"];
$description = $_POST["bookdesc"];
$imageName;
$bookName;

// uploading 
// uploading image file then book
  if ($_FILES["image"]["error"] > 0 ) {
  //  echo "Return Code: " . $_FILES["image"]["error"] . "<br>";
  $myObj->status = 417;
  $myObj->message = "error uploading image";
  echo json_encode($myObj);
    
  }
  else if($_FILES["file"]["error"]> 0){
//  echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
$myObj->status = 417;
$myObj->message = "error uploading book";
echo json_encode($myObj);
  }
  else               
  {                
    if (file_exists("uploadImage/" . $_FILES["image"]["name"]))  {         // http://vanguardtech.co.ke/mpesa/     
    //  echo $_FILES["image"]["name"] . " already exists. ";  
      
  $myObj->status = 418;
  $myObj->message = "image already exists";
  echo json_encode($myObj);
      }
      // checking whether image exists or not           
                  
    else if(file_exists("uploadBook/". $_FILES["file"]["name"])) {               
      echo $_FILES["file"]["name"] . " already exists.";   
      $myObj->status = 418;
      $myObj->message = "Book already exists";
      echo json_encode($myObj);
        } 
    else               
    {                
      move_uploaded_file($_FILES["image"]["tmp_name"],"uploadImage/" . $_FILES["image"]["name"]);
  
      $imageName = $_FILES["image"]["name"]; 
      // upload image now
     
    //  echo $_FILES["file"]["name"] . " has been uploaded. <br>";
      move_uploaded_file($_FILES["file"]["tmp_name"],"uploadBook/" . $_FILES["file"]["name"]);
  
      $bookName = $_FILES["file"]["name"]; 
     
      
// $link = mysqli_connect("localhost", "vanguar1_mpesa", "mpesa1720!", "vanguar1_mpesa");
$link = mysqli_connect("localhost", "ubunifu", "Ubunifu@20", "streams");

// Check connection
if(!$link){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO books (title, description, imageUrl, fileUrl ) VALUES ('$title', '$description','$imageName','$bookName')";    // , imageUrl, fileUrl   , $imageUrl, $fileUrl
if(mysqli_query($link, $sql)){
   // echo "Records inserted successfully.";
    $myObj->status = 201;
    $myObj->message = "Details Inserted Successfully";
    echo json_encode($myObj);
    
} else{
 //   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    $myObj->status = 420;
    $myObj->message = "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo json_encode($myObj);
}
 
// Close connection
mysqli_close($link);
    }                
            
  }   

















// $imageUrl = $_POST["name"];
// $fileUrl = $_POST["name"];




 ?>