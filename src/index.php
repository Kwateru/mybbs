<?php
    $message = "";
    if ($_POST["message"]) {
        $message = $_POST["message"];
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
        <title>Sample Page</title>
    </head>
    <body>
        <h1>Sample Page</h1>
        <p>Please delete this file before start to develop.</p>
        <form action="." method="post">
            <input type="text" name="message">
            <input type="submit" value="送信">
        </form>
        <?php
            echo "<p>$message</p>";
        ?>
        <p><a href=".">Reset</a></p>
    </body>
</html>