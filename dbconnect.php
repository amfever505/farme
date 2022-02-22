<?php
$url = parse_url($_SERVER['CLEARDB_DATABASE_URL']);
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$database = substr($url["path"], 1);
// echo $url;

try {
    // $db = new PDO('mysql:dbname=mini_bbs;host=127.0.0.1;charset=utf8','root', '');
    $db = new PDO(
        'mysql:host=' . $server . ';dbname=' . $database . ';charset=utf8mb4',
        $username,
        $password,
    );
} catch (PDOException $e) {
    echo 'DB接続エラー： ' . $e->getMessage();
}
?>
