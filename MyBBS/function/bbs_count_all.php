<?php
// DB接続
include('db/connection.php');

try {
    $sql = 'SELECT COUNT(*) FROM boards';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $countAll = $stmt->fetch(PDO::FETCH_NUM);
} catch (PDOException $e) {
    echo "掲示板の件数取得に失敗：" . $e->getMessage() . "\n";
    exit(1);
}