<?php
include '../config/database.php';

$id =
isset($_GET['id'])
? (int)$_GET['id']
: 0;

// Lấy sản phẩm

$product =
mysqli_query(
    $conn,
    "SELECT * FROM products WHERE id = $id"
);

$row =
mysqli_fetch_assoc($product);

if(!$row){

    die("Không tìm thấy sản phẩm");
}

// UPDATE sản phẩm

if(isset($_POST['update'])){

    $name =
    mysqli_real_escape_string(
        $conn,
        $_POST['name']
    );

    $price =
    (int)$_POST['price'];

    $stock =
    (int)$_POST['stock'];

    $description =
    mysqli_real_escape_string(
        $conn,
        $_POST['description']
    );

    $content =
    mysqli_real_escape_string(
        $conn,
        $_POST['content']
    );

    // giữ ảnh cũ

    $image = $row['image'];

    // upload ảnh mới

    if(
        isset($_FILES['image']) &&
        $_FILES['image']['name'] != ''
    ){

        $image =
        time() . '_' .
        $_FILES['image']['name'];

        move_uploaded_file(

            $_FILES['image']['tmp_name'],

            "../assets/images/" . $image
        );
    }

    mysqli_query($conn, "

        UPDATE products

        SET

        name='$name',
        price='$price',
        stock='$stock',
        image='$image',
        description='$description',
        content='$content'

        WHERE id=$id

    ");

    header("Location: products.php");
    exit;
}
?>

<?php include 'includes/header.php'; ?>

<style>

.card-custom{

    background:white;
    border-radius:20px;
    padding:30px;
    box-shadow:0 0 15px rgba(0,0,0,0.08);
}

textarea{
    resize:none;
}

.preview-image{

    width:180px;
    height:180px;
    object-fit:cover;
    border-radius:15px;
    border:1px solid #ddd;
}

</style>

<div class="card-custom">

    <h2 class="mb-4 fw-bold text-success">

        Sửa sản phẩm

    </h2>

    <form
    method="POST"
    enctype="multipart/form-data">

        <div class="mb-3">

            <label class="form-label fw-semibold">

                Tên sản phẩm

            </label>

            <input
            type="text"
            name="name"
            class="form-control"
            value="<?= $row['name'] ?>"
            required>

        </div>

        <div class="row">

            <div class="col-md-6 mb-3">

                <label class="form-label fw-semibold">

                    Giá sản phẩm

                </label>

                <input
                type="number"
                name="price"
                class="form-control"
                value="<?= $row['price'] ?>"
                required>

            </div>

            <div class="col-md-6 mb-3">

                <label class="form-label fw-semibold">

                    Tồn kho

                </label>

                <input
                type="number"
                name="stock"
                class="form-control"
                value="<?= $row['stock'] ?>"
                required>

            </div>

        </div>

        <div class="mb-3">

            <label class="form-label fw-semibold">

                Mô tả ngắn

            </label>

            <textarea
            name="description"
            class="form-control"
            rows="4"><?= $row['description'] ?></textarea>

        </div>

        <div class="mb-3">

            <label class="form-label fw-semibold">

                Nội dung chi tiết

            </label>

            <textarea
            name="content"
            class="form-control"
            rows="10"><?= $row['content'] ?></textarea>

        </div>

        <div class="mb-3">

            <label class="form-label fw-semibold">

                Ảnh hiện tại

            </label>

            <br>

            <img
            src="../assets/images/<?= $row['image'] ?>"
            class="preview-image">

        </div>

        <div class="mb-4">

            <label class="form-label fw-semibold">

                Đổi ảnh mới

            </label>

            <input
            type="file"
            name="image"
            class="form-control">

        </div>

        <button
        type="submit"
        name="update"
        class="btn btn-success px-4">

            Cập nhật sản phẩm

        </button>

        <a
        href="products.php"
        class="btn btn-secondary px-4">

            Quay lại

        </a>

    </form>

</div>

<?php include 'includes/footer.php'; ?>