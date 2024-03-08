<?php
$host = "localhost";
$dbname = "xuong";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(3, 2);
} catch (PDOException $PDOException) {
    echo "Kết nối thất bại: " . $PDOException->getMessage();
    die;
}
