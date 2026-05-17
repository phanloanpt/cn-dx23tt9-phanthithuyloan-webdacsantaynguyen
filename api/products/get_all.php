<?php

header("Content-Type: application/json");

$conn = new mysqli("localhost", "root", "", "dacsantaynguyen");

if ($conn->connect_error) {
    die(json_encode([
        "error" => "Kết nối thất bại"
    ]));
}

$sql = "SELECT * FROM products ORDER BY id DESC";

$result = $conn->query($sql);

$products = [];

while($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products);