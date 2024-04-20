<?php
    // 空文字で初期化
    $name = "";
    $email = "";
    $textarea = "";

    // 3つのpostされた値が空でないかチェック
    if ($_POST["name"] && $_POST["email"] && $_POST["textarea"]) {

        // 受け取った値で再初期化
        $name = $_POST["name"];
        $email = $_POST["email"];
        $textarea = $_POST["textarea"];

        // 入力情報を整形して変数に格納
        // 連結代入 (.=) を使用することで上書きを回避
        $message = "お名前：" . $name . "\n";
        $message .= "メールアドレス：" . $email . "\n";
        $message .= "お問い合わせ内容：" . $textarea . "\n";

        $headers = "MIME-Version: 1.0 \n";
        $headers .= "From: " .
            "" . mb_encode_mimeheader(mb_convert_encoding("Test User", "ISO-2022-JP","AUTO")) . "" .
            "<test2@example.com> \n";
        mb_send_mail(
            "test@example.com",
            "Test Mail",
            $message,
            $headers
        );
    }
?>
<html>
    <head>
        <title>お問い合わせ</title>
    </head>
    <body>
        <h1>お問い合わせ</h1>
        <p>開発用仮想環境のワークショップです.</p>
        <form action="." method="post">
            お名前 <br>
            <input type="text" name="name"> <br>
            メールアドレス <br>
            <input type="email" name="email"> <br>
            お問い合わせ内容 <br>
            <textarea name="textarea" cols="30" rows="10"></textarea> <br>
            <br>
            <input type="submit" value="送信">
        </form>
        <?php
            echo "<p>$message</p>"
        ?>
        <p><a href=".">Reset</a></p>
    </body>
</html>