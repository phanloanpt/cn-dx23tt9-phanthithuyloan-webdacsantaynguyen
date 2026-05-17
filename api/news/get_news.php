<?php

header("Content-Type: application/json");

include '../config/database.php';

$sql = "SELECT * FROM news ORDER BY id DESC";

$result = $conn->query($sql);

$data = [];

while($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

?>