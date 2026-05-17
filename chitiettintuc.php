<?php
include "config/database.php";
include "includes/header.php";

if (!isset($_GET['id'])) {
    echo "<div class='container py-5'>";
    echo "<div class='alert alert-danger'>";
    echo "Không tìm thấy bài viết!";
    echo "</div>";
    echo "</div>";

    include "includes/footer.php";
    exit;
}

$id = (int)$_GET['id'];

$sql = mysqli_query($conn, "
    SELECT * FROM news
    WHERE id = '$id'
");

$news = mysqli_fetch_assoc($sql);

if (!$news) {
    echo "<div class='container py-5'>";
    echo "<div class='alert alert-danger'>";
    echo "Bài viết không tồn tại!";
    echo "</div>";
    echo "</div>";

    include "includes/footer.php";
    exit;
}
?>

<div class="container py-5">

    <a href="index.php" class="btn btn-success mb-4">
        ← Về trang chủ
    </a>

    <h1 class="fw-bold mb-4">
        <?= $news['title'] ?>
    </h1>

    <img
        src="assets/images/<?= $news['image'] ?>"
        class="img-fluid rounded mb-4 w-100"
        style="max-height:500px; object-fit:cover;"
        alt="<?= $news['title'] ?>"
    >

    <?php if(!empty($news['summary'])): ?>
        <p class="lead text-muted">
            <?= $news['summary'] ?>
        </p>
    <?php endif; ?>

    <div class="lh-lg fs-5">
        <?= nl2br($news['content']) ?>
    </div>

</div>

<?php include "includes/footer.php"; ?>