<?php

echo "欢迎来到YUE.已丽人生活馆\n";
try {
    $pdo = new PDO('mysql:host=mysql;dbname=mysql', 'root', '123456');
    // 设置 PDO 错误模式为异常
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "DB连接成功\n"; 
} catch(PDOException $e) {
    die("DB连接失败: " . $e->getMessage()."\n");
}

// 执行查询
    $stmt = $pdo->query('SELECT * FROM user');
    while ($row = $stmt->fetch()) {
        // 处理结果
        print_r($row);
    }

?>
