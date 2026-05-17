<?php
include "config/database.php";
include "includes/header.php";

$keyword = $_GET['keyword'] ?? '';

$sql = mysqli_query($conn, "
    SELECT * FROM products
    WHERE name LIKE '%$keyword%'
    ORDER BY id DESC
");
?>

<div class="container py-5">

    <h2 class="fw-bold mb-4">
        Tất cả sản phẩm
    </h2>

    <div class="row g-4">

        <?php while($row = mysqli_fetch_assoc($sql)): ?>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">

            <div class="card h-100 shadow-sm border-0">

                <img src="assets/images/<?= !empty($row['image']) ? $row['image'] : 'default.png' ?>"
                     class="card-img-top"
                     style="height:250px; object-fit:cover;">

                <div class="card-body d-flex flex-column">

                    <h5 class="fw-bold">
                        <?= $row['name'] ?>
                    </h5>

                    <p class="text-danger fw-bold fs-5">
                        <?= number_format($row['price']) ?> VNĐ
                    </p>

                    <div class="mt-auto d-grid gap-2">

                        <a href="chitietsanpham.php?id=<?= $row['id'] ?>"
                           class="btn btn-outline-success">
                            Xem chi tiết
                        </a>

                        <button
                        class="btn btn-success"
                        onclick='addToCart(
                            <?= $row["id"] ?>,
                            <?= json_encode($row["name"]) ?>,
                            <?= $row["price"] ?>,
                            <?= json_encode($row["image"]) ?>
                        )'>
                            Thêm vào giỏ
                        </button>

                    </div>

                </div>

            </div>

        </div>

        <?php endwhile; ?>

    </div>

</div>

<script src="assets/js/cart.js"></script>

<?php include "includes/footer.php"; ?>