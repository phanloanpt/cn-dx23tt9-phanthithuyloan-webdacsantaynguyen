<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$conn = new mysqli("localhost", "root", "", "dacsantaynguyen");

if ($conn->connect_error) {
    die(json_encode([
        "success" => false
    ]));
}

$data = json_decode(file_get_contents("php://input"), true);

$id = $data["id"];
$status = $data["status"];

$sql = "UPDATE orders SET status='$status' WHERE id=$id";

if ($conn->query($sql) === TRUE) {

    echo json_encode([
        "success" => true,
        "message" => "Cập nhật thành công"
    ]);

} else {

    echo json_encode([
        "success" => false
    ]);

}

$conn->close();