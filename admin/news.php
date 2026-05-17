<?php
include '../config/database.php';

// XÓA TIN TỨC

if(isset($_GET['delete'])){

    $id = (int)$_GET['delete'];

    mysqli_query($conn, "

        DELETE FROM news
        WHERE id=$id

    ");

    header("Location: news.php");
    exit;
}

// LẤY DANH SÁCH TIN

$news =
mysqli_query($conn, "

    SELECT * FROM news
    ORDER BY id DESC

");
?>

<?php include 'includes/header.php'; ?>

<style>

.news-card{

    background:white;
    border-radius:20px;
    padding:25px;
    box-shadow:0 0 15px rgba(0,0,0,0.08);
}

.table{

    vertical-align:middle;
}

.news-image{

    width:90px;
    height:60px;
    object-fit:cover;
    border-radius:10px;
    border:1px solid #ddd;
}

.table thead{

    background:#198754;
    color:white;
}

.table tbody tr:hover{

    background:#f8f9fa;
}

.action-btn{

    min-width:70px;
}

</style>

<div class="news-card">

    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

        <h2 class="fw-bold text-success mb-0">

            Quản lý tin tức

        </h2>

        <a
        href="add-news.php"
        class="btn btn-success px-4">

            <i class="fa-solid fa-plus"></i>

            Thêm tin tức

        </a>

    </div>

    <div class="table-responsive">

        <table class="table table-bordered align-middle">

            <thead>

                <tr>

                    <th width="80">
                        ID
                    </th>

                    <th width="120">
                        Ảnh
                    </th>

                    <th>
                        Tiêu đề
                    </th>

                    <th width="260">
                        Hành động
                    </th>

                </tr>

            </thead>

            <tbody>

                <?php
                while(
                    $row =
                    mysqli_fetch_assoc($news)
                ):
                ?>

                <tr>

                    <td>

                        <?= $row['id'] ?>

                    </td>

                    <td>

                        <img
                        src="../assets/images/<?= $row['image'] ?>"
                        class="news-image">

                    </td>

                    <td class="fw-semibold">

                        <?= $row['title'] ?>

                    </td>

                    <td>

                        <div class="d-flex gap-2 flex-wrap">

                            

                            <a
                            href="edit-news.php?id=<?= $row['id'] ?>"
                            class="btn btn-warning btn-sm action-btn">

                                Sửa

                            </a>

                            <a
                            href="?delete=<?= $row['id'] ?>"
                            class="btn btn-danger btn-sm action-btn"
                            onclick="return confirm('Xóa bài viết này?')">

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