<?php
include '../config/database.php';

$id =
isset($_GET['id'])
? (int)$_GET['id']
: 0;

// Lấy bài viết

$sql =
"SELECT * FROM news WHERE id=$id";

$result =
mysqli_query($conn, $sql);

$news =
mysqli_fetch_assoc($result);

// Không tìm thấy bài viết

if(!$news){

    die("Không tìm thấy bài viết");
}
?>

<?php include 'includes/header.php'; ?>

<style>

.news-detail{

    background:white;
    border-radius:20px;
    padding:35px;
    box-shadow:0 0 15px rgba(0,0,0,0.08);
}

.news-image{

    width:100%;
    max-height:500px;
    object-fit:cover;
    border-radius:20px;
}

.news-summary{

    font-size:18px;
    color:#666;
    line-height:1.8;
}

.news-content{

    line-height:2;
    font-size:17px;
}

</style>

<div class="news-detail">

    <a
    href="news.php"
    class="btn btn-success mb-4">

        ← Quay lại quản lý tin tức

    </a>

    <h1 class="fw-bold mb-4">

        <?= $news['title']; ?>

    </h1>

    <img
    src="../assets/images/<?= $news['image']; ?>"
    class="news-image mb-4">

    <p class="news-summary mb-4">

        <?= $news['summary']; ?>

    </p>

    <div class="news-content">

        <?= nl2br($news['content']); ?>

    </div>

    <div class="mt-5">

        <a
        href="index.php"
        class="btn btn-outline-success px-4">

            ← Về Dashboard

        </a>

    </div>

</div>

<?php include 'includes/footer.php'; ?>