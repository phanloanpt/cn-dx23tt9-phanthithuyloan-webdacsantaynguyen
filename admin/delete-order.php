<?php
include '../config/database.php';

if(isset($_GET['id'])){

    $id = (int) $_GET['id'];

    mysqli_query($conn,
        "DELETE FROM orders WHERE id = $id"
    );

}

header("Location: orders.php");
exit;
?>