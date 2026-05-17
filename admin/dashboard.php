<?php
session_start();

include '../config/database.php';

// KIỂM TRA ĐĂNG NHẬP

if(!isset($_SESSION['admin'])){

    header("Location: login.php");
    exit;
}

/* =========================
   THỐNG KÊ
========================= */

// Tổng sản phẩm

$productQuery = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM products"
);

$totalProducts = mysqli_fetch_assoc($productQuery)['total'] ?? 0;

// Tổng bài viết

$newsQuery = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM news"
);

$totalNews = mysqli_fetch_assoc($newsQuery)['total'] ?? 0;

// Tổng đơn hàng

$orderQuery = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM orders"
);

$totalOrders = mysqli_fetch_assoc($orderQuery)['total'] ?? 0;

// Tổng doanh thu

$revenueQuery = mysqli_query(
    $conn,
    "SELECT SUM(total_price) AS revenue FROM orders"
);

$revenueData = mysqli_fetch_assoc($revenueQuery);

$totalRevenue = $revenueData['revenue'] ?? 0;
?>

<?php include 'includes/header.php'; ?>

<style>

.dashboard-title{
    font-weight:700;
    margin-bottom:30px;
}

.menu-card{
    border:none;
    border-radius:20px;
    transition:0.3s;
}

.menu-card:hover{
    transform:translateY(-5px);
}

.menu-link{
    text-decoration:none;
}

</style>

<h2 class="dashboard-title">
    Xin chào Admin 👋
</h2>

<!-- THỐNG KÊ -->

<div class="row g-4 mb-5">

    <div class="col-md-3">

        <div class="stat-card card-product">

            <h5>Tổng sản phẩm</h5>

            <h2><?= $totalProducts ?></h2>

        </div>

    </div>

    <div class="col-md-3">

        <div class="stat-card card-news">

            <h5>Tổng bài viết</h5>

            <h2><?= $totalNews ?></h2>

        </div>

    </div>

    <div class="col-md-3">

        <div class="stat-card card-order">

            <h5>Đơn hàng</h5>

            <h2><?= $totalOrders ?></h2>

        </div>

    </div>

    <div class="col-md-3">

        <div class="stat-card card-revenue">

            <h5>Doanh thu</h5>

            <h2><?= number_format($totalRevenue) ?>đ</h2>

        </div>

    </div>

</div>

<!-- MENU QUẢN LÝ -->

<div class="row g-4">

    <div class="col-md-4">

        <a
        href="products.php"
        class="menu-link">

            <div class="card menu-card shadow-sm p-4">

                <h4 class="fw-bold text-success">

                    <i class="fa-solid fa-box"></i>

                    Sản phẩm

                </h4>

                <p class="text-muted mb-0">

                    Quản lý danh sách sản phẩm

                </p>

            </div>

        </a>

    </div>

    <div class="col-md-4">

        <a
        href="orders.php"
        class="menu-link">

            <div class="card menu-card shadow-sm p-4">

                <h4 class="fw-bold text-primary">

                    <i class="fa-solid fa-cart-shopping"></i>

                    Đơn hàng

                </h4>

                <p class="text-muted mb-0">

                    Theo dõi đơn hàng khách hàng

                </p>

            </div>

        </a>

    </div>

    <div class="col-md-4">

        <a
        href="news.php"
        class="menu-link">

            <div class="card menu-card shadow-sm p-4">

                <h4 class="fw-bold text-warning">

                    <i class="fa-solid fa-newspaper"></i>

                    Tin tức

                </h4>

                <p class="text-muted mb-0">

                    Quản lý bài viết website

                </p>

            </div>

        </a>

    </div>

</div>

<?php include 'includes/footer.php'; ?>