<?php
// admin/includes/header.php
?>

<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="UTF-8">

    <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>
        ADMIN - Đặc Sản Tây Nguyên
    </title>

    <!-- Bootstrap -->

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

    <!-- Font Awesome -->

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS ADMIN -->

    <link
    rel="stylesheet"
    href="assets/admin.css">

</head>

<body>

<!-- SIDEBAR -->

<?php include 'includes/sidebar.php'; ?>

<!-- MAIN -->

<div class="main">

    <!-- TOPBAR -->

    <div class="topbar
                bg-white
                rounded-4
                shadow-sm
                p-3
                mb-4
                d-flex
                justify-content-between
                align-items-center">

        <div>

            <h4 class="fw-bold mb-0">
                Trang quản trị
            </h4>

            <small class="text-muted">
                Website Đặc Sản Tây Nguyên
            </small>

        </div>

        <div class="d-flex align-items-center gap-3">

            <span class="fw-semibold">
                ADMIN
            </span>

            <img
            src="../assets/images/logo3.png"
            width="45"
            height="45"
            class="rounded-circle border">

        </div>

    </div>