<?php

echo "欢迎来到YUE.已丽人生活馆";
try {
    $pdo = new PDO('mysql:host=mysql;dbname=mysql', 'root', '123456');
    // 设置 PDO 错误模式为异常
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "连接成功"; 
} catch(PDOException $e) {
    die("连接失败: " . $e->getMessage());
}

?>
