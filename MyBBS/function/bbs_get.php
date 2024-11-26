<?php
// DB接続
include('db/connection.php');

try {
    if ($conditionCategory != 0) {
        // おすすめ順がクリックされた
        $sql = 'SELECT id, name, comment, post_time, good_count, bad_count FROM boards ORDER BY good_count DESC';
        $stmt = $dbh->prepare($sql);
    }else {
        // TOPページか新着順がクリックされた
        $sql = 'SELECT id, name, comment, post_time, good_count, bad_count FROM boards ORDER BY post_time DESC';
        $stmt = $dbh->prepare($sql);
    }
    $stmt->execute();
    $bbsLists = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "掲示板の一覧取得に失敗：" . $e->getMessage() . "\n";
    exit(1);
}