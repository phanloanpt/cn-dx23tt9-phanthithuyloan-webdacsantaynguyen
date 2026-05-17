<?php
include '../config/database.php';

if(isset($_POST['add'])){

    $name =
    mysqli_real_escape_string(
        $conn,
        $_POST['name']
    );

    $price =
    mysqli_real_escape_string(
        $conn,
        $_POST['price']
    );

    $stock =
    mysqli_real_escape_string(
        $conn,
        $_POST['stock']
    );

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

    $image = '';

    // Upload ảnh

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

        INSERT INTO products(

            name,
            price,
            image,
            stock,
            description,
            content

        )

        VALUES(

            '$name',
            '$price',
            '$image',
            '$stock',
            '$description',
            '$content'

        )

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

</style>

<div class="card-custom">

    <h2 class="mb-4 fw-bold text-success">

        Thêm sản phẩm

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
            rows="4"></textarea>

        </div>

        <div class="mb-3">

            <label class="form-label fw-semibold">

                Nội dung chi tiết

            </label>

            <textarea
            name="content"
            class="form-control"
            rows="10"></textarea>

        </div>

        <div class="mb-4">

            <label class="form-label fw-semibold">

                Ảnh sản phẩm

            </label>

            <input
            type="file"
            name="image"
            class="form-control">

        </div>

        <button
        type="submit"
        name="add"
        class="btn btn-success px-4">

            Thêm sản phẩm

        </button>

        <a
        href="products.php"
        class="btn btn-secondary px-4">

            Quay lại

        </a>

    </form>

</div>

<?php include 'includes/footer.php'; ?>