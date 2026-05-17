<?php
include '../config/database.php';

// XÓA SẢN PHẨM

if(isset($_GET['delete'])){

    $id = (int)$_GET['delete'];

    mysqli_query(
        $conn,
        "DELETE FROM products WHERE id=$id"
    );

    header("Location: products.php");
    exit;
}

// LẤY DANH SÁCH SẢN PHẨM

$products =
mysqli_query(
    $conn,
    "SELECT * FROM products ORDER BY id DESC"
);
?>

<?php include 'includes/header.php'; ?>

<style>

.product-card{

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

.product-image{

    width:90px;
    height:60px;
    object-fit:cover;
    border-radius:10px;
    border:1px solid #ddd;
}

.action-btn{

    min-width:70px;
}

</style>

<div class="product-card">

    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

        <h2 class="fw-bold text-success mb-0">

            Quản lý sản phẩm

        </h2>

        <a
        href="add-product.php"
        class="btn btn-success px-4">

            <i class="fa-solid fa-plus"></i>

            Thêm sản phẩm

        </a>

    </div>

    <div class="table-responsive">

        <table class="table table-bordered align-middle">

            <thead>

                <tr>

                    <th width="70">
                        ID
                    </th>

                    <th width="120">
                        Ảnh
                    </th>

                    <th>
                        Tên sản phẩm
                    </th>

                    <th width="180">
                        Giá
                    </th>

                    <th width="120">
                        Tồn kho
                    </th>

                    <th width="230">
                        Hành động
                    </th>

                </tr>

            </thead>

            <tbody>

                <?php
                while(
                    $row =
                    mysqli_fetch_assoc($products)
                ):
                ?>

                <tr>

                    <td>

                        <?= $row['id'] ?>

                    </td>

                    <td>

                        <img
                        src="../assets/images/<?= $row['image'] ?>"
                        class="product-image">

                    </td>

                    <td class="fw-semibold">

                        <?= $row['name'] ?>

                    </td>

                    <td class="text-danger fw-bold">

                        <?= number_format($row['price']) ?> VNĐ

                    </td>

                    <td>

                        <?= $row['stock'] ?>

                    </td>

                    <td>

                        <div class="d-flex gap-2 flex-wrap">

                            <a
                            href="edit-product.php?id=<?= $row['id'] ?>"
                            class="btn btn-warning btn-sm action-btn">

                                Sửa

                            </a>

                            <a
                            href="?delete=<?= $row['id'] ?>"
                            class="btn btn-danger btn-sm action-btn"
                            onclick="return confirm('Xóa sản phẩm này?')">

                                Xóa

                            </a>

                        </div>

                    </td>

                </tr>

                <?php endwhile; ?>

            </tbody>

        </table>

    </div>

    

</div>

<?php include 'includes/footer.php'; ?>