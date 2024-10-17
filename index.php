<?php

echo "欢迎来到YUE.已丽人生活馆\n";
try {
	$pdo = new PDO('mysql:host=mysql;dbname=yueji_test', 'root', '123456');
	// 设置 PDO 错误模式为异常
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "DB连接成功\n";
} catch (PDOException $e) {
	die("DB连接失败: " . $e->getMessage() . "\n");
}

// 开始执行查询
$stmt = $pdo->query('SELECT * FROM dict_city');
while ($row = $stmt->fetch()) {
	// 处理结果
	print_r($row);
	break;
}

$redis = new Redis();
try {
	$redis->connect('redis', 6379);
	echo "REDIS连接成功\n";
} catch (RedisException $e) {
	die("REDIS连接失败: " . $e->getMessage() . "\n");
}

try {
	$redis->set("params", time());
} catch (RedisException $e) {
	die("REDIS写失败: " . $e->getMessage() . "\n");
}
try {
	echo $redis->get("params");
} catch (RedisException $e) {
	die("REDIS读失败: " . $e->getMessage() . "\n");

}


