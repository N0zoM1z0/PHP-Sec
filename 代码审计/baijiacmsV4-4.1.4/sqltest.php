<?php
$host = 'localhost';  // 或者是数据库的 IP 地址
$username = 'root';
$password = 'Root123';
$dbname = 'baijiacms';

// 创建连接
$conn = new mysqli($host, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} else {
    echo "连接成功!";
}
?>
