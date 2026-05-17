<?php
include "../../config/database.php";

$sql = mysqli_query($conn,"
SELECT * FROM orders
ORDER BY id DESC
");
?>

<h2>Danh sách đơn hàng</h2>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Khách hàng</th>
<th>SĐT</th>
<th>Tổng tiền</th>
<th>Ngày</th>
</tr>

<?php while($row = mysqli_fetch_assoc($sql)): ?>

<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['fullname'] ?></td>
<td><?= $row['phone'] ?></td>
<td><?= number_format($row['total_price']) ?> VNĐ</td>
<td><?= $row['created_at'] ?></td>
</tr>

<?php endwhile; ?>

</table>
