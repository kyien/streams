
<?php

        $callbackJSONData=file_get_contents('php://input');
        $callbackData=json_decode($callbackJSONData);
        $resultCode=$callbackData->Body->stkCallback->ResultCode;
        $resultDesc=$callbackData->Body->stkCallback->ResultDesc;
        $merchantRequestID=$callbackData->Body->stkCallback->MerchantRequestID;
        $checkoutRequestID=$callbackData->Body->stkCallback->CheckoutRequestID;

        $amount=$callbackData->Body->stkCallback->CallbackMetadata->Item[0]->Value;
        $mpesaReceiptNumber=$callbackData->Body->stkCallback->CallbackMetadata->Item[1]->Value;
        $balance=$callbackData->Body->stkCallback->CallbackMetadata->Item[2]->Value;
  //   $b2CUtilityAccountAvailableFunds=$callbackData->Body->stkCallback->CallbackMetadata->Item[3]->Value;
        $transactionDate=$callbackData->Body->stkCallback->CallbackMetadata->Item[3]->Value;
        $phoneNumber=$callbackData->Body->stkCallback->CallbackMetadata->Item[4]->Value;
        
  
    
    
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "ubunifu", "Ubunifu@20", "streams");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO mpesa_pay (
resultCode,
resultDesc,
merchantRequestID,
checkoutRequestID,
amount,
mpesaReceiptNumber,
balance,
transactionDate,
phoneNumber) VALUES ('$resultCode', '$resultDesc', '$merchantRequestID', '$checkoutRequestID', '$amount', '$mpesaReceiptNumber', '$balance','$transactionDate', '$phoneNumber' )";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}










// Close connection
mysqli_close($link);

 $stkCallbackResponse = file_get_contents('php://input');

  $logFile = "stkPushCallbackResponse.json";
 $log = fopen($logFile, "a");
  fwrite($log, $callbackJSONData);
  fclose($log);


?>
