<?php
include 'includes/auth.php';
include '../config/database.php';

// LẤY DANH SÁCH USER

$result =
mysqli_query(
    $conn,
    "SELECT * FROM users ORDER BY id DESC"
);
?>

<?php include 'includes/header.php'; ?>

<style>

.user-card{

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

</style>

<div class="user-card">

    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

        <h2 class="fw-bold text-success mb-0">

            Quản lý người dùng

        </h2>

        <a
        href="index.php"
        class="btn btn-outline-success px-4">

            ← Về Dashboard

        </a>

    </div>

    <div class="table-responsive">

        <table class="table table-bordered align-middle">

            <thead>

                <tr>

                    <th width="80">
                        ID
                    </th>

                    <th>
                        Họ tên
                    </th>

                    <th>
                        Email
                    </th>

                    <th width="140">
                        Vai trò
                    </th>

                    <th width="220">
                        Ngày tạo
                    </th>

                </tr>

            </thead>

            <tbody>

                <?php
                while(
                    $row =
                    mysqli_fetch_assoc($result)
                ):
                ?>

                <tr>

                    <td>

                        <?= $row['id'] ?>

                    </td>

                    <td class="fw-semibold">

                        <?= $row['fullname'] ?>

                    </td>

                    <td>

                        <?= $row['email'] ?>

                    </td>

                    <td>

                        <?php
                        if(
                            $row['role'] == 'admin'
                        ):
                        ?>

                        <span class="badge bg-danger px-3 py-2">

                            Admin

                        </span>

                        <?php else: ?>

                        <span class="badge bg-primary px-3 py-2">

                            User

                        </span>

                        <?php endif; ?>

                    </td>

                    <td>

                        <?= $row['created_at'] ?>

                    </td>

                </tr>

                <?php endwhile; ?>

            </tbody>

        </table>

    </div>

</div>

<?php include 'includes/footer.php'; ?>