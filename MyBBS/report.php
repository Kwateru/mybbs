<?php

// タイトル
$title = "コメント違反報告";

// POSTの情報を変数に格納
if (isset($_POST['id'])) {
    $id = htmlspecialchars($_POST['id']);
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
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
            MyBBSで禁止している投稿は、利用規約とコメントポリシーで規定されています。
            コメントポリシーに違反していると思う理由を選択し、問題点をお知らせください。
        </p>
        <p>
            ※報告していただいた内容が、運営者以外の第三者に伝わることはありません。<br>
            ※いただいた報告は、運営者が1件ずつ確認いたします。
        </p>
        <form action="result.php" method="post">
            <legend class="uk-legend">報告対象の情報</legend>
            <div class="uk-margin">
                <input type="text" class="uk-input" name="ihan_name" value="<?php echo '#' . $id . ' ' . $name; ?>" readonly>
            </div>

            <div class="uk-margin">
                <textarea name="ihan_comment" class="uk-textarea" rows="5" readonly><?php echo $comment; ?></textarea>
            </div>

            <legend class="uk-legend">報告内容</legend>

            <div class="uk-margin">
                <label>
                    <input type="radio" name="ihan_category" value="わいせつや暴力的な内容" checked>わいせつや暴力的な内容
                </label>
                <label>
                    <input type="radio" name="ihan_category" value="過度な批判や誹謗中傷、嫌がらせ">過度な批判や誹謗中傷、嫌がらせ
                </label>
                <label>
                    <input type="radio" name="ihan_category" value="いたずら・スパム・重複投稿">いたずら・スパム・重複投稿
                </label>
                <label>
                    <input type="radio" name="ihan_category" value="その他">その他
                </label>
            </div>

            <div class="uk-margin">
                <textarea name="description" class="uk-textarea" rows="5" placeholder="*具体的な説明" required></textarea>
            </div>

            <div class="uk-margin">
                <input type="submit" value="送信" class="uk-button uk-button-primary">
            </div>

        </form>

</body>

</html>