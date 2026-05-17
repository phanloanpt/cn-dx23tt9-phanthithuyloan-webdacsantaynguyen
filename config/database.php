<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "dacsantaynguyen1"
);

mysqli_set_charset($conn,"utf8");

if(!$conn){
    die("Kết nối database thất bại");
}

?>