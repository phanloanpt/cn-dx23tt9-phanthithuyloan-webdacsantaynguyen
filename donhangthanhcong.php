<?php
session_start();

$name = $_SESSION['success_name'] ?? '';
$phone = $_SESSION['success_phone'] ?? '';
$address = $_SESSION['success_address'] ?? '';
$note = $_SESSION['success_note'] ?? '';

/*
LẤY ĐÚNG GIỎ HÀNG THÀNH CÔNG
KHÔNG PHẢI $_SESSION['cart']
*/
$cart = $_SESSION['success_cart'] ?? [];

$total = $_SESSION['success_total'] ?? 0;
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt hàng thành công</title>

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    >

    <style>

        body{
            background:#f5f5f5;
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:30px 15px;
        }

        .success-box{
            background:#fff;
            width:100%;
            max-width:750px;
            padding:40px;
            border-radius:25px;
            box-shadow:0 5px 20px rgba(0,0,0,0.08);
        }

        .success-title{
            color:#198754;
            font-size:55px;
            font-weight:700;
            margin-bottom:25px;
        }

        .total{
            color:#dc3545;
            font-size:32px;
            font-weight:700;
        }

        hr{
            margin:25px 0;
        }

        @media(max-width:768px){

            .success-box{
                padding:25px;
            }

            .success-title{
                font-size:40px;
            }

        }

    </style>
</head>

<body>
    <script>

/*
XÓA GIỎ HÀNG
*/
localStorage.removeItem('cart');

/*
RESET ICON GIỎ HÀNG
*/
localStorage.setItem('cart','[]');

</script>

<div class="success-box">

    <h1 class="success-title">
        Đặt hàng thành công!
    </h1>

    <p>
        Cảm ơn
        <strong><?= $name ?></strong>
        đã đặt hàng.
    </p>

    <hr>

    <h2 class="fw-bold mb-4">
        Thông tin nhận hàng
    </h2>

    <p>
        <strong>SĐT:</strong>
        <?= $phone ?>
    </p>

    <p>
        <strong>Địa chỉ:</strong>
        <?= $address ?>
    </p>

    <p>
        <strong>Ghi chú:</strong>
        <?= $note ?>
    </p>

    <hr>

    <h2 class="fw-bold mb-4">
        Sản phẩm
    </h2>

    <?php if(!empty($cart)): ?>

        <?php foreach($cart as $item): ?>

            <div class="mb-3">

                <strong>
                    <?= $item['name'] ?>
                </strong>

                <br>

                SL:
                <?= $item['quantity'] ?>

                -

                <?= number_format($item['price'] * $item['quantity']) ?>
                VNĐ

            </div>

        <?php endforeach; ?>

    <?php else: ?>

        <p>Không có sản phẩm.</p>

    <?php endif; ?>

    <hr>

    <div class="total mb-4">

        Tổng tiền:
        <?= number_format($total) ?> VNĐ

    </div>

    <a
    href="index.php"
    class="btn btn-success px-4"
    >
        Về trang chủ
    </a>

    <a
    href="shop.php"
    class="btn btn-outline-dark px-4"
    >
        Mua thêm
    </a>

</div>

</body>
</html>

<?php

/*
XÓA SESSION SAU KHI HIỂN THỊ
*/

unset($_SESSION['success_name']);
unset($_SESSION['success_phone']);
unset($_SESSION['success_address']);
unset($_SESSION['success_note']);
unset($_SESSION['success_cart']);
unset($_SESSION['success_total']);

?>
