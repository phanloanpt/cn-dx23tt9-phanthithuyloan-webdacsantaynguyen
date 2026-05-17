<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include "config/database.php";

$fullname = $_POST['fullname'] ?? '';
$phone    = $_POST['phone'] ?? '';
$address  = $_POST['address'] ?? '';
$note     = $_POST['note'] ?? '';

$cart_json = $_POST['cart_data'] ?? '[]';

$cart = json_decode($cart_json, true);

if(!$cart){
    $cart = [];
}

$total = 0;

foreach($cart as $item){

    $price = (int)$item['price'];
    $qty   = (int)$item['quantity'];

    $total += $price * $qty;
}

/*
LƯU ĐƠN HÀNG
*/
mysqli_query($conn,"
INSERT INTO orders(
fullname,
phone,
address,
note,
total_price
)
VALUES(
'$fullname',
'$phone',
'$address',
'$note',
'$total'
)
");

$order_id = mysqli_insert_id($conn);

/*
LƯU CHI TIẾT ĐƠN
*/
foreach($cart as $item){

    $name  = $item['name'];
    $price = (int)$item['price'];
    $qty   = (int)$item['quantity'];

    mysqli_query($conn,"
    INSERT INTO order_items(
    order_id,
    product_name,
    price,
    quantity
    )
    VALUES(
    '$order_id',
    '$name',
    '$price',
    '$qty'
    )
    ");
}

/*
LƯU SESSION
*/
$_SESSION['success_cart'] = $cart;
$_SESSION['success_total'] = $total;

$_SESSION['success_name'] = $fullname;
$_SESSION['success_phone'] = $phone;
$_SESSION['success_address'] = $address;
$_SESSION['success_note'] = $note;

/*
XÓA GIỎ HÀNG
*/
unset($_SESSION['cart']);

/*
CHUYỂN TRANG
*/
header("Location: donhangthanhcong.php");
exit;
?>
<script>

/*
XÓA GIỎ HÀNG
*/
localStorage.removeItem('cart');

/*
RESET SỐ LƯỢNG GIỎ HÀNG
*/
let cartCount = document.getElementById('cart-count');

if(cartCount){
    cartCount.innerText = 0;
}

</script>
<script>

localStorage.removeItem('cart');

if(typeof updateCartCount === 'function'){
    updateCartCount();
}

</script>