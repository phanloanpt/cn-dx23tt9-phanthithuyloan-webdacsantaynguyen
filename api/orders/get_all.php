<?php

header("Content-Type: application/json");

$conn = new mysqli("localhost", "root", "", "dacsantaynguyen");

if ($conn->connect_error) {
    die(json_encode([
        "success" => false,
        "message" => "Kết nối thất bại"
    ]));
}

$sql = "SELECT * FROM orders ORDER BY id DESC";

$result = $conn->query($sql);

$orders = [];

while ($row = $result->fetch_assoc()) {
    $orders[] = $row;
}

echo json_encode($orders);