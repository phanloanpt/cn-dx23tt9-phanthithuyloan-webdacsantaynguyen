<?php include 'includes/header.php'; include 'config/database.php';
$news = mysqli_query($conn,"SELECT * FROM news ORDER BY id DESC");
?>
<div class="container py-5">
<h2 class="fw-bold mb-4">Tin tức & bài viết</h2>
<div class="row g-4">
<?php while($row=mysqli_fetch_assoc($news)){ ?>
<div class="col-lg-4">
<div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
<img src="assets/images/<?= $row['image'] ?>" class="card-img-top" style="height:250px;object-fit:cover;">
<div class="card-body">
<h5 class="fw-bold"><?= $row['title'] ?></h5>
<p><?= substr(strip_tags($row['content']),0,100) ?>...</p>
<a href="chitiettintuc.php?id=<?= $row['id'] ?>" class="btn btn-success">Xem thêm</a>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
<?php include 'includes/footer.php'; ?>
