<?php

include '../config/database.php';

$name = $_POST['fullname'];
$email = $_POST['email'];

$password = password_hash(
    $_POST['password'],
    PASSWORD_DEFAULT
);

$sql = "INSERT INTO users(fullname,email,password)
VALUES(?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sss",
    $name,
    $email,
    $password
);

$stmt->execute();

echo "Đăng ký thành công";

?>