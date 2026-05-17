<?php
include "config/database.php";

$newProducts = mysqli_query($conn,"
    SELECT * FROM products
    ORDER BY id DESC
    LIMIT 8
");

$bestProducts = mysqli_query($conn,"
    SELECT * FROM products
    ORDER BY sold DESC
    LIMIT 8
");

$news = mysqli_query($conn,"
    SELECT * FROM news
    ORDER BY id DESC
    LIMIT 5
");

$mainNews = mysqli_fetch_assoc($news);
?>

<?php include "includes/header.php"; ?>

<!-- =========================
SECTION: CAROUSEL
========================= -->

<?php include "includes/carousel.php"; ?>

<!-- =========================
SECTION: SẢN PHẨM MỚI
========================= -->

<section class="py-5">

    <div class="container">


        <div class="d-flex justify-content-between align-items-center mb-4">
<h2 class="fw-bold m-0 text-uppercase border-start border-4 border-warning ps-3">
            
                Sản phẩm mới
            </h2>

            <a href="shop.php" class="btn btn-outline-success">
                Xem thêm
            </a>

        </div>

        <div class="row g-4">

            <?php while($row = mysqli_fetch_assoc($newProducts)): ?>

            <div class="col-lg-3 col-sm-6 col-12">

                <div class="card h-100 shadow-sm border-0">

                    <img
                        src="assets/images/<?= $row['image'] ?>"
                        class="card-img-top"
                        style="
                            height:250px;
                            object-fit:cover;
                        "
                    >

                    <div class="card-body text-center">

                        <h6 class="fw-bold">

                            <?= $row['name'] ?>

                        </h6>

                        <p class="text-danger fw-bold">

                            <?= number_format($row['price']) ?> VNĐ

                        </p>

                        <div class="d-grid gap-2">

                            <a
                                href="chitietsanpham.php?id=<?= $row['id'] ?>"
                                class="btn btn-outline-success btn-sm"
                            >
                                Xem chi tiết
                            </a>

                            <button
class="btn btn-success w-100"
onclick="addToCart(
    <?= $row['id'] ?>,
    '<?= $row['name'] ?>',
    <?= $row['price'] ?>,
    '<?= $row['image'] ?>'
)"
>
Thêm vào giỏ
</button>

                        </div>

                    </div>

                </div>

            </div>

            <?php endwhile; ?>

        </div>

    </div>

</section>

<!-- ================= SẢN PHẨM BÁN CHẠY ================= -->
<section class="py-5 bg-light">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
<h2 class="fw-bold m-0 text-uppercase border-start border-4 border-warning ps-3">
                Sản phẩm bán chạy
            </h2>

            <a href="shop.php" class="btn btn-outline-danger">
                Xem thêm
            </a>

        </div>

        <div class="row g-4">

            <?php
            $best_products = mysqli_query(
                $conn,
                "SELECT * FROM products ORDER BY sold DESC LIMIT 8"
            );

            while($row = mysqli_fetch_assoc($best_products)):
            ?>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm h-100">

                    <img
                        src="assets/images/<?= $row['image']; ?>"
                        class="card-img-top"
                        style="
                            height:250px;
                            object-fit:cover;
                        "
                    >

                    <div class="card-body text-center">

                        <h5 class="fw-bold">

                            <?= $row['name']; ?>

                        </h5>

                        <p class="text-danger fw-bold fs-5">

                            <?= number_format($row['price']); ?> VNĐ

                        </p>

                        <a
                            href="chitietsanpham.php?id=<?= $row['id']; ?>"
                            class="btn btn-outline-success w-100 mb-2"
                        >
                            Xem chi tiết
                        </a>

                        <button

                        
class="btn btn-success w-100"
onclick="addToCart(
    <?= $row['id'] ?>,
    '<?= $row['name'] ?>',
    <?= $row['price'] ?>,
    '<?= $row['image'] ?>'
)"
>
Thêm vào giỏ
</>

                    </div>

                </div>

            </div>

            <?php endwhile; ?>

        </div>

    </div>

</section>

<!-- =========================
SECTION: TIN TỨC
Tin chính + tin phụ
========================= -->

<section class="py-5">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="fw-bold m-0 text-uppercase border-start border-4 border-warning ps-3">
                Tin tức & Sự kiện
            </h2>

            <a href="tintuc.php" class="btn btn-outline-success">
                Xem tất cả
            </a>

        </div>

        <div class="row g-4">

            <!-- TIN CHÍNH -->

            <div class="col-lg-7">

                <div class="card border-0 shadow-sm h-100">

                    <img
                        src="assets/images/<?= $mainNews['image'] ?>"
                        class="card-img-top"
                        style="
                            height:400px;
                            object-fit:cover;
                        "
                    >

                    <div class="card-body">

                        <h3 class="fw-bold">

                            <?= $mainNews['title'] ?>

                        </h3>

                        <p class="text-muted">

                            <?= $mainNews['summary'] ?>

                        </p>

                        <a
                            href="chitiettintuc.php?id=<?= $mainNews['id'] ?>"
                            class="btn btn-success"
                        >
                            Xem chi tiết
                        </a>

                    </div>

                </div>

            </div>

            <!-- TIN PHỤ -->

            <div class="col-lg-5">

                <?php while($row = mysqli_fetch_assoc($news)): ?>

                <div class="d-flex mb-4 shadow-sm p-2 rounded">

                    <img
                        src="assets/images/<?= $row['image'] ?>"
                        style="
                            width: auto;
                            height: 100px;
                            object-fit:cover;
                        "
                        class="rounded"
                    >

                    <div class="ms-3">

                        <h6 class="fw-bold">

                            <?= $row['title'] ?>

                        </h6>

                        <p class="small text-muted">

                            <?= mb_substr($row['summary'],0,80) ?>...

                        </p>

                        <a
                            href="chitiettintuc.php?id=<?= $row['id'] ?>"
                            class="text-success text-decoration-none"
                        >
                            Xem thêm →
                        </a>

                    </div>

                </div>

                <?php endwhile; ?>

            </div>

        </div>

    </div>

</section>

<?php include "includes/footer.php"; ?>