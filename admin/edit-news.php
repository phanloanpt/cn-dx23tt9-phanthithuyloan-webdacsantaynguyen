<?php
include '../config/database.php';

$id =
isset($_GET['id'])
? (int)$_GET['id']
: 0;

// Lấy bài viết

$result =
mysqli_query(
    $conn,
    "SELECT * FROM news WHERE id='$id'"
);

$row =
mysqli_fetch_assoc($result);

if(!$row){

    die("Không tìm thấy bài viết");
}

// Cập nhật bài viết

if(isset($_POST['update'])){

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

    $image = $row['image'];

    // Upload ảnh mới

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

        UPDATE news SET

        title='$title',
        summary='$summary',
        content='$content',
        image='$image'

        WHERE id='$id'

    ");

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

.preview-image{

    width:220px;
    border-radius:15px;
    border:1px solid #ddd;
    object-fit:cover;
}

</style>

<div class="card-custom">

    <h2 class="mb-4 fw-bold text-success">

        Sửa bài viết

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
            value="<?= $row['title'] ?>"
            required>

        </div>

        <div class="mb-3">

            <label class="form-label fw-semibold">

                Mô tả ngắn

            </label>

            <textarea
            name="summary"
            class="form-control"
            rows="3"><?= $row['summary'] ?></textarea>

        </div>

        <div class="mb-3">

            <label class="form-label fw-semibold">

                Nội dung bài viết

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

            Cập nhật bài viết

        </button>

        <a
        href="news.php"
        class="btn btn-secondary px-4">

            Quay lại

        </a>

    </form>

</div>

<?php include 'includes/footer.php'; ?>