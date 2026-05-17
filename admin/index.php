<?php
include '../config/database.php';

// Tổng doanh thu

$total =
mysqli_query($conn, "

    SELECT SUM(total_price) as doanhthu
    FROM orders

");

$data =
mysqli_fetch_assoc($total);

$doanhthu =
$data['doanhthu'] ?? 0;
?>

<?php include 'includes/header.php'; ?>

<style>

.revenue-card{

    background:white;
    border-radius:20px;
    padding:40px;
    box-shadow:0 0 15px rgba(0,0,0,0.08);
    text-align:center;
}

.revenue-icon{

    font-size:60px;
    color:#198754;
    margin-bottom:20px;
}

.revenue-money{

    font-size:40px;
    font-weight:bold;
    color:#198754;
}

</style>

<div class="revenue-card">

    <div class="revenue-icon">

        <i class="fa-solid fa-sack-dollar"></i>

    </div>

    <h2 class="mb-3 fw-bold">

        Tổng doanh thu

    </h2>

    <div class="revenue-money">

        <?= number_format($doanhthu) ?> VNĐ

    </div>

    <div class="row g-4">

    <div class="col-md-3">

        <div class="card p-4 border-0 shadow-sm rounded-4">

            <h6 class="text-muted">
                Tổng sản phẩm
            </h6>

            <h2 class="fw-bold text-success">
                <?= $totalProducts ?>
            </h2>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card p-4 border-0 shadow-sm rounded-4">

            <h6 class="text-muted">
                Tổng bài viết
            </h6>

            <h2 class="fw-bold text-primary">
                <?= $totalNews ?>
            </h2>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card p-4 border-0 shadow-sm rounded-4">

            <h6 class="text-muted">
                Tổng đơn hàng
            </h6>

            <h2 class="fw-bold text-warning">
                <?= $totalOrders ?>
            </h2>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card p-4 border-0 shadow-sm rounded-4">

            <h6 class="text-muted">
                Doanh thu
            </h6>

            <h2 class="fw-bold text-danger">
                <?= number_format($totalRevenue) ?>đ
            </h2>

        </div>

    </div>

</div>

</div>

<?php include 'includes/footer.php'; ?>