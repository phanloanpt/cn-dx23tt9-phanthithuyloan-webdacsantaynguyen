<?php
session_start();

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "123456"){

        $_SESSION['admin'] = $username;

        header("Location: dashboard.php");
        exit();

    }else{

        $error = "Sai tài khoản hoặc mật khẩu";

    }

}
?>

<!doctype html>
<html lang="vi">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Admin Login</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
rel="stylesheet"
>

</head>

<body class="bg-light">

<div class="container">

<div class="row justify-content-center mt-5">

<div class="col-md-4">

<div class="card shadow">

<div class="card-body">

<h3 class="text-center mb-4">
ADMIN LOGIN
</h3>

<?php if(isset($error)): ?>

<div class="alert alert-danger">

<?= $error ?>

</div>

<?php endif; ?>

<form method="POST">

<div class="mb-3">

<label>
Tài khoản
</label>

<input
type="text"
name="username"
class="form-control"
required
>

</div>

<div class="mb-3">

<label>
Mật khẩu
</label>

<input
type="password"
name="password"
class="form-control"
required
>

</div>

<button
type="submit"
name="login"
class="btn btn-success w-100"
>

Đăng nhập

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</body>
</html>