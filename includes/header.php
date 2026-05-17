<!doctype html>
<html lang="vi">
<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Đặc Sản Tây Nguyên</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
rel="stylesheet"
>

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
/>

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm sticky-top">

<div class="container">

<a
class="navbar-brand fw-bold d-flex align-items-center gap-2"
href="index.php"
>
<img src="assets/images/logo1.png" width="80">

ĐẶC SẢN TÂY NGUYÊN
</a>

<button
class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#menu"
>
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

    <!-- MENU -->

    <ul class="navbar-nav me-auto">

        <li class="nav-item">
            <a class="nav-link" href="index.php">
                Trang chủ
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="gioithieu.php">
                Giới thiệu
            </a>
        </li>

        <!-- DROPDOWN -->

        <li class="nav-item dropdown">

            <a
            class="nav-link dropdown-toggle"
            href="#"
            role="button"
            data-bs-toggle="dropdown">

            Sản phẩm

            </a>

            <ul class="dropdown-menu">

                <li>
                    <a class="dropdown-item" href="shop.php">
                        Tất cả sản phẩm
                    </a>
                </li>

                <li>
                    <a class="dropdown-item" href="#">
                        Cà phê
                    </a>
                </li>

                <li>
                    <a class="dropdown-item" href="#">
                        Mật ong
                    </a>
                </li>

                <li>
                    <a class="dropdown-item" href="#">
                        Cacao
                    </a>
                </li>
                
                <li>
                    <a class="dropdown-item" href="#">
                        Hồ tiêu
                    </a>
                </li>
                
                <li>
                    <a class="dropdown-item" href="#">
                        Sâm Ngọc Linh
                    </a>
                </li>
                
                <li>
                    <a class="dropdown-item" href="#">
                        Rượu cần
                    </a>
                </li>
                
                <li>
                    <a class="dropdown-item" href="#">
                        Thổ cẩm
                    </a>
                </li>
                
                <li>
                    <a class="dropdown-item" href="#">
                        Quà lưu niệm
                    </a>
                </li>

            </ul>

        </li>

        <li class="nav-item">
            <a class="nav-link" href="tintuc.php">
                Tin tức
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="lienhe.php">
                Liên hệ
            </a>
        </li>

    </ul>

    <!-- SEARCH -->
<div class="d-flex align-items-center gap-2">

    <!-- SEARCH -->
    <form action="shop.php"
          method="GET"
          class="d-flex align-items-center">

        <div class="search-box d-flex align-items-center">

            <input type="text"
                   name="keyword"
                   placeholder="Tìm sản phẩm..."
                   class="form-control border-0 shadow-none">

            <button type="submit"
                    class="btn btn-warning search-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>

        </div>

    </form>

    <!-- USER -->
    <a href="login.php"
       class="icon-btn user-btn">
        <i class="fa-solid fa-user"></i>
    </a>

    <!-- CART -->
    <a href="giohang.php"
       class="icon-btn cart-btn position-relative">

        <i class="fa-solid fa-cart-shopping"></i>

        <span class="cart-count" id="cart-count">
    0
</span>

    </a>

</div>
    

</div>




</div>

</div>

</nav>

<script src="assets/js/cart.js"></script>