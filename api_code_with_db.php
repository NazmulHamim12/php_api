<?php
header("Content-Type: application/json"); // response JSON হবে
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST["name"] ?? '';
    $email    = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    if ($name && $email && $password) {
        $sql = "INSERT INTO users (name, email, password) 
                VALUES ('$name', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode([
                "status" => "success",
                "message" => "User inserted successfully ✅"
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => $conn->error
            ]);
        }
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Missing fields!"
        ]);
    }
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid request method!"
    ]);
}
?>
