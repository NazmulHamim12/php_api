<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => $conn->connect_error]));
}
?>
