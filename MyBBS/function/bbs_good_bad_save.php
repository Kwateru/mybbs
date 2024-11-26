<?php

// DB接続
include('../db/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['id']) && !empty($_POST['icon'])) {
    // POST情報を変数に格納
    $postID = $_POST['id'];
    $btnIcon = $_POST['icon'];

    // DBに登録
    try {
        $sql = 'UPDATE boards SET good_count = CASE WHEN :btnIcon = "heart" THEN good_count + 1 ELSE good_count END,
        bad_count = CASE WHEN :btnIcon = "trash" THEN bad_count + 1 ELSE bad_count END
        WHERE id = :postID';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':btnIcon', $btnIcon);
        $stmt->bindValue(':postID', $postID);
        $stmt->execute();
        header('Location:../index.php');
        exit(0);
    } catch (PDOException $e) {
        echo "評価の登録失敗" . $e->getMessage() . "\n";
    }
}
