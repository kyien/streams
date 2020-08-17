<?php
include_once('../Auth/conn.php');

$result_array = array();

$sql="SELECT * FROM contactUs";
$result = $conn->query($sql);

// $rows= $result -> fetch_array(MYSQLI_NUM);
// print_r($rows);
// foreach($rows as $row){
//     echo $row;
// }
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($result_array, $row);
    }
}


/* send a JSON encded array to client */
header('Content-type: application/json');
echo json_encode($result_array);
$conn->close();
// if ($result){
    
//     //    $res  =$result -> fetch_array(MYSQLI_NUM);
//     while($row = $result->fetch_assoc()){


//         $json[] = $row;
   
   
//      }
   
   
//         if($res){
//        $obj->status = 201;
//        $obj->data=$res;
//        $obj->message = "data success";
//             echo json_encode($obj);
//         }
//         else{
//             $obj->status = 201;
//        $obj->message = "No data found!";
//             echo json_encode($obj);
//         }
// }
// else {
//      echo "Error executing SQL query";
// }

// $result -> free_result();

// $mysqli -> close();
?>