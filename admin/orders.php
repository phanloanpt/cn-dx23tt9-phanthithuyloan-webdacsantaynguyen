<?php
include '../config/database.php';

// LẤY DANH SÁCH ĐƠN HÀNG

$sql =
"SELECT * FROM orders ORDER BY id DESC";

$result =
mysqli_query($conn, $sql);

/* ===== TÍNH TỔNG DOANH THU ===== */

$revenueQuery =
mysqli_query(

    $conn,

    "SELECT SUM(total_price) AS revenue FROM orders"
);

$revenueData =
mysqli_fetch_assoc($revenueQuery);

$totalRevenue =
$revenueData['revenue'] ?? 0;
?>

<?php include 'includes/header.php'; ?>

<style>

.order-card{

    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 0 15px rgba(0,0,0,0.08);
}

.table{

    vertical-align:middle;
}

.table thead{

    background:#198754;
    color:white;
}

.table tbody tr:hover{

    background:#f8f9fa;
}

.revenue-box{

    background:#198754;
    color:white;
    border-radius:15px;
    padding:20px;
    margin-bottom:25px;
}

</style>

<div class="order-card">

    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

        <h2 class="fw-bold text-success mb-0">

            Quản lý đơn hàng

        </h2>

        

    </div>

    <!-- TỔNG DOANH THU -->

    <div class="revenue-box">

        <h5 class="mb-2">

            Tổng doanh thu

        </h5>

        <h2 class="fw-bold mb-0">

            <?= number_format($totalRevenue) ?> VNĐ

        </h2>

    </div>

    <!-- BẢNG ĐƠN HÀNG -->

    <div class="table-responsive">

        <table class="table table-bordered align-middle">

            <thead>

                <tr>

                    <th width="70">
                        ID
                    </th>

                    <th>
                        Khách hàng
                    </th>

                    <th>
                        SĐT
                    </th>

                    <th>
                        Địa chỉ
                    </th>

                    <th width="180">
                        Tổng tiền
                    </th>

                    <th width="180">
                        Ngày đặt
                    </th>

                    <th width="120">
                        Thao tác
                    </th>

                </tr>

            </thead>

            <tbody>

                <?php
                while(
                    $row =
                    mysqli_fetch_assoc($result)
                ):
                ?>

                <tr>

                    <td>

                        <?= $row['id'] ?>

                    </td>

                    <td class="fw-semibold">

                        <?= $row['fullname'] ?? 'Không có tên' ?>

                    </td>

                    <td>

                        <?= $row['phone'] ?>

                    </td>

                    <td>

                        <?= $row['address'] ?>

                    </td>

                    <td class="text-danger fw-bold">

                        <?= number_format($row['total_price']) ?> VNĐ

                    </td>

                    <td>

                        <?= $row['created_at'] ?>

                    </td>

                    <td>

                        <a
                        href="delete-order.php?id=<?= $row['id'] ?>"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Bạn có chắc muốn xóa đơn hàng này?')">

                            Xóa

                        </a>

                    </td>

                </tr>

                <?php endwhile; ?>

            </tbody>

        </table>

    </div>

</div>

<?php include 'includes/footer.php'; ?>