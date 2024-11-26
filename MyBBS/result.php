<?php

// タイトル
$title = "コメント違反報告の完了ページ";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['ihan_name']) && !empty($_POST['ihan_comment']) && !empty($_POST['ihan_category']) && !empty($_POST['description'])) {
    // POST情報を変数に格納
    $ihan_name = $_POST['ihan_name'];
    $ihan_comment = $_POST['ihan_comment'];
    $ihan_category = $_POST['ihan_category'];
    $ihan_description = $_POST['description'];

    // 連結代入で入力情報を変数に格納
    $message = "============" . "\n";
    $message .= "報告対象の情報" . "\n";
    $message .= "============" . "\n";
    $message .= "お名前：" . $ihan_name . "\n";
    $message .= "コメント：" . $ihan_comment . "\n";
    $message .= "\n";
    $message .= "============" . "\n";
    $message .= "報告内容" . "\n";
    $message .= "============" . "\n";
    $message .= "報告カテゴリ：" . $ihan_category . "\n";
    $message .= "具体的な説明：" . $ihan_description . "\n";

    $headers = "MIME-Version: 1.0 \n";
    $headers .= "From: " . "" . mb_encode_mimeheader(mb_convert_encoding("Comment violation reporting committee", "ISO-2022-JP", "AUTO")) . "" . "<test2@example.com> \n";
    mb_send_mail(
        "MyBBS@example.com",
        "コメント違反報告の連絡がありました。",
        $message,
        $headers
    );
}
?>

<!DOCTYPE html>
<html lang="ja">

<!-- head要素 -->
<?php include('layout/head.php'); ?>

<body>
    <div class="uk-container uk-container-small">
        <h1 class="uk-heading-small"><?php echo $title; ?></h1>

        <p>
            コメント違反報告ありがとうございます。<br>
            運営側で確認しまして対処させていただきます。
        </p>
        <p>
            <a href="index.php">MyBBSに戻る</a>
        </p>
    </div>
</body>

</html>