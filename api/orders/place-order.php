<?php

header("Content-Type: application/json");

include "../config/database.php";

$data = json_decode(file_get_contents("php://input"), true);

$name = $data["name"];
$phone = $data["phone"];
$address = $data["address"];
$cart = $data["cart"];

$total = 0;

foreach($cart as $item){
    $total += $item["price"] * $item["quantity"];
}

$sql = "INSERT INTO orders(
    customer_name,
    phone,
    address,
    total
)
VALUES(
    '$name',
    '$phone',
    '$address',
    '$total'
)";

$conn->query($sql);

$order_id = $conn->insert_id;

foreach($cart as $item){

    $product_name = $item["name"];
    $price = $item["price"];
    $quantity = $item["quantity"];

    $sql = "INSERT INTO order_items(
        order_id,
        product_name,
        price,
        quantity
    )
    VALUES(
        '$order_id',
        '$product_name',
        '$price',
        '$quantity'
    )";

    $conn->query($sql);
}

echo json_encode([
    "message" => "Đặt hàng thành công"
]);

?>