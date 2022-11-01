<?php
//Reads the viarables sent via POST from AT gateway
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if ($text -- "") {
    //This is the first request>Note how we start the response with CON
    $response = "CON What would you like to check \n ";
    $response = " 1. My account No \n";
    $response = " 2. My Phone No ";
} else if ($text == "1") {
    //Business logic for the first level response
    $response = "CON Chose account information you want to view \n ";
    $response = " 1. Account Number \n";
    $response = " 2. Account Balance ";

} else if ($text == "2") {
    //Business logic for the first level response
    //This is a terminal response. Note how we start with END
    $response = "END your phone number is" .$phoneNumber; 
} else if ($text == "1*1"){
    //This is the second response Where user selected 1 in the first instance
     $accountNumber = "ACC1001";

    //This is a terminal response. Note how we start with END
    $response = "END your account Number is" .$accountNumber;

} else if ($text = "1*2") {
    //This is the second response Where user selected 1 in the first instance
    $balance = "=N= 10,000";


    //This is a terminal response. Note how we start with END
    $response = "END your balance is" .$balance;

}
//echo the response to the API. The response depends on the statement that is fulfiled in each instance
 header('Content-type; text/plain');
 echo $response;

?>