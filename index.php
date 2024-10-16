<?php

echo "欢迎来到YUE.已丽人生活馆";
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "连接成功";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage());
}

?>
