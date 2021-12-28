<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "dhtl_danhba;

// B1. kết nối tới database server
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);   //Tương đương mysqli_connect

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);    // cú pháp -> truy cập thuộc tính của i đối tượng
}
?>