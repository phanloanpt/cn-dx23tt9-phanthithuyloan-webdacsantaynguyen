<?php include "includes/header.php"; ?>

<div class="container py-5">

<h2 class="fw-bold mb-4">
Thanh toán
</h2>

<form action="place-order.php" method="POST">

<div class="mb-3">
<input
name="fullname"
class="form-control"
placeholder="Họ tên"
required
>
</div>

<div class="mb-3">
<input
name="phone"
class="form-control"
placeholder="Số điện thoại"
required
>
</div>

<div class="mb-3">
<textarea
name="address"
class="form-control"
placeholder="Địa chỉ"
required
></textarea>
</div>

<div class="mb-3">
<textarea
name="note"
class="form-control"
placeholder="Ghi chú"
></textarea>
</div>

<input
id="cart_data"
name="cart_data"
type="hidden"
>

<button class="btn btn-success">
Đặt hàng
</button>

</form>

</div>

<script>

document.getElementById('cart_data').value =
localStorage.getItem('cart');

</script>

<?php include "includes/footer.php"; ?>