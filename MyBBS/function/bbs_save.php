<?php

// DB接続
include('../db/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name']) && !empty($_POST['comment'])) {
    // POST情報を変数に格納
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    // DBに保存
    try {
        $sql = 'INSERT INTO boards (name, comment) VALUE (:name, :comment)';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':comment', $comment);
        $stmt->execute();
        header('Location:../index.php');
        exit(0);
    } catch (PDOException $e) {
        echo "掲示板の登録失敗" . $e->getMessage() . "\n";
    }
}
