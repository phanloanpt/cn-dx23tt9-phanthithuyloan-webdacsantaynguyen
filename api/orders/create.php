<?php

header("Content-Type: application/json");

// kết nối database
$conn = new mysqli(
    "localhost",
    "root",
    "",
    "dacsantaynguyen"
);

// lỗi kết nối
if ($conn->connect_error) {

    echo json_encode([
        "success" => false,
        "message" => "Kết nối database thất bại"
    ]);

    exit;
}

// lấy dữ liệu từ frontend
$data = json_decode(
    file_get_contents("php://input"),
    true
);

$fullname = $data["fullname"];
$phone = $data["phone"];
$address = $data["address"];
$total = $data["total"];
$cart = $data["cart"];

// lưu đơn hàng
$sql = "
INSERT INTO orders(
    fullname,
    phone,
    address,
    total
)
VALUES(
    '$fullname',
    '$phone',
    '$address',
    '$total'
)
";

// nếu lưu orders thành công
if ($conn->query($sql)) {

    // lấy id đơn hàng vừa tạo
    $order_id = $conn->insert_id;

    // lưu từng sản phẩm
    foreach ($cart as $item) {

        $name = $item["name"];
        $price = $item["price"];
        $quantity = $item["quantity"];
        $image = $item["image"];

        $sql_item = "
        INSERT INTO order_items(
            order_id,
            product_name,
            price,
            quantity,
            image
        )
        VALUES(
            '$order_id',
            '$name',
            '$price',
            '$quantity',
            '$image'
        )
        ";

        $conn->query($sql_item);
    }

    echo json_encode([
        "success" => true,
        "message" => "Đặt hàng thành công"
    ]);

} else {

    echo json_encode([
        "success" => false,
        "message" => "Lỗi lưu đơn hàng"
    ]);
}
?>