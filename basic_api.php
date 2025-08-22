<?php
// হেডার সেট করা হচ্ছে যাতে ব্রাউজার জানে আমরা JSON পাঠাচ্ছি
header("Access-Control-Allow-Origin: *");

$response = [];

if(isset($_POST["name"])){
    $response["name_received"] = $_POST["name"];
} else {
    $response["name_received"] = "No name provided";
}



$response["status"] = "success";

echo json_encode($response);
?>
