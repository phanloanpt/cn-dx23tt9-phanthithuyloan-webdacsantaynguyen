<?php
include '../config/database.php';

if(isset($_POST['add'])){

    $title =
    mysqli_real_escape_string(
        $conn,
        $_POST['title']
    );

    $summary =
    mysqli_real_escape_string(
        $conn,
        $_POST['summary']
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

        // đổi tên tránh trùng

        $image =
        time() . '_' .
        $_FILES['image']['name'];

        move_uploaded_file(

            $_FILES['image']['tmp_name'],

            '../assets/images/' . $image
        );
    }

    // INSERT bài viết

    $sql = "

        INSERT INTO news(

            title,
            image,
            summary,
            content

        )

        VALUES(

            '$title',
            '$image',
            '$summary',
            '$content'

        )

    ";

    mysqli_query($conn, $sql);

    // Debug lỗi SQL

    if(mysqli_error($conn)){

        die(mysqli_error($conn));
    }

    header('Location: news.php');
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

        Thêm bài viết mới

    </h2>

    <form
    method="POST"
    enctype="multipart/form-data">

        <div class="mb-3">

            <label class="form-label fw-semibold">

                Tiêu đề bài viết

            </label>

            <input
            type="text"
            name="title"
            class="form-control"
            placeholder="Nhập tiêu đề..."
            required>

        </div>

        <div class="mb-3">

            <label class="form-label fw-semibold">

                Mô tả ngắn

            </label>

            <textarea
            name="summary"
            class="form-control"
            rows="3"
            placeholder="Nhập mô tả ngắn..."></textarea>

        </div>

        <div class="mb-3">

            <label class="form-label fw-semibold">

                Nội dung bài viết

            </label>

            <textarea
            name="content"
            class="form-control"
            rows="12"
            placeholder="Nhập nội dung bài viết..."
            required></textarea>

        </div>

        <div class="mb-4">

            <label class="form-label fw-semibold">

                Ảnh bài viết

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

            Thêm bài viết

        </button>

        <a
        href="news.php"
        class="btn btn-secondary px-4">

            Quay lại

        </a>

    </form>

</div>

<?php include 'includes/footer.php'; ?>