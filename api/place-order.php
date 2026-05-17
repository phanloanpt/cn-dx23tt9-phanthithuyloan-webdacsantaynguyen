<?php
echo "FILE MOI DA CHAY";
?><?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Không thể truy cập trang này");
}

$fullname = $_POST['fullname'] ?? '';
$phone    = $_POST['phone'] ?? '';
$address  = $_POST['address'] ?? '';
$note     = $_POST['note'] ?? '';

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đặt hàng thành công</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
        }

        .success-box{
            max-width:700px;
            margin:80px auto;
            background:#fff;
            padding:40px;
            border-radius:20px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

    </style>

</head>
<body>

<div class="container">

    <div class="success-box">

        <h1 class="text-success mb-4">
            Đặt hàng thành công!
        </h1>

        <p>
            Cảm ơn
            <strong><?php echo $fullname; ?></strong>
            đã đặt hàng.
        </p>

        <hr>

        <h4 class="mb-3">
            Thông tin nhận hàng
        </h4>

        <p>
            <strong>Số điện thoại:</strong>
            <?php echo $phone; ?>
        </p>

        <p>
            <strong>Địa chỉ:</strong>
            <?php echo $address; ?>
        </p>

        <p>
            <strong>Ghi chú:</strong>
            <?php echo $note; ?>
        </p>

        <hr>

        <a href="index.php" class="btn btn-success">
            Về trang chủ
        </a>

    </div>

</div>

<script>

localStorage.removeItem("cart");

</script>

</body>
</html>