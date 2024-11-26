<?php
// タイトル
$title = "MyBBS";

// カテゴリ絞り込みをGETパラメーターで変数に格納
$conditionCategory = (isset($_GET['category'])) ? $_GET['category'] : 0;

// DBから掲示板の一覧を取得
include('function/bbs_get.php');

// DBから掲示板の全件数を取得
include('function/bbs_count_all.php');

// 長い名前が登録された時に短くする
include('function/util.php');

?>

<!DOCTYPE html>
<html lang="ja">

<!-- head要素 -->
<?php include('layout/head.php'); ?>

<body>
  <div class="uk-container uk-container-small">
    <h1 class="uk-heading-small"><a href="index.php" class="title"><?php echo $title; ?></a></h1>

    <!-- 名前 -->
    <div class="uk-margin">
      <input type="text" id="name" placeholder="名前*" class="uk-input">
    </div>

    <!-- コメント -->
    <div class="uk-margin">
      <textarea name="comment" id="comment" class="uk-textarea" rows="5" placeholder="コメントを書いてね。"></textarea>
    </div>

    <!-- 投稿 -->
    <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" type="button" onclick="sendData()">
      コメントを送信
    </button>

    <!-- コメントの総数 -->
    <div class="uk-margin uk-container uk-flex">
      <strong><span uk-icon="comment" class="uk-icon"></span> コメント<?php echo $countAll[0]; ?>件</strong>
      <div class="uk-flex-auto"></div>
      <!-- カテゴリ選択機能 -->
      <a class="uk-margin-small-right sort_list <?php echo $conditionCategory == 1 ? 'uk-button-primary' : ''; ?>" href="index.php?category=1">おすすめ順</a>
      <span>|</span>
      <a class="uk-margin-small-left sort_list <?php echo $conditionCategory == 0 ? 'uk-button-primary' : ''; ?>" href="index.php?category=0">新着順</a>
    </div>

    <!-- DBから取得した掲示板一覧を表示 -->
    <div class="posts">
      <?php foreach ($bbsLists as $bbsList): ?>
        <?php $nameShort = name_short(htmlspecialchars($bbsList['name']),10); ?>
        <div class="uk-container post">
          <!-- postのヘッダー -->
          <div class="post-header">
            <span>#</span><?php echo htmlspecialchars($bbsList['id']); ?>
            <strong><?php echo $nameShort; ?></strong>
            <span class="pre_post_time"></span><?php echo htmlspecialchars($bbsList['post_time']); ?>
            <form action="report.php" method="post" target="_blank">
              <input type="hidden" name="id" value="<?php echo htmlspecialchars($bbsList['id']); ?>">
              <input type="hidden" name="name" value="<?php echo htmlspecialchars($bbsList['name']); ?>">
              <input type="hidden" name="comment" value="<?php echo nl2br(htmlspecialchars($bbsList['comment'])); ?>">
              <button href="report.php" class="post_report"><span uk-icon="icon: ban; ratio: 0.8" class="uk-icon"></span>非表示/報告</button>
            </form>
          </div>

          <!-- postの内容 -->
          <p class="post_comment"><?php echo nl2br(htmlspecialchars($bbsList['comment'])); ?></p>

          <!-- postの評価 -->
          <div class="buttons" class="uk-flex-right">
            <!-- ハートのアイコン -->
            <button uk-icon="heart" class="uk-icon-button buttons_heart" onclick="count_btn(this)" id="<?php echo htmlspecialchars($bbsList['id']); ?>"></button>
            <!-- ハートのアイコンの数字 -->
            <span class="uk-margin-small-right"><?php echo $bbsList['good_count']; ?></span>

            <!-- ゴミ箱のアイコン -->
            <button uk-icon="trash" class="uk-icon-button buttons_trash" onclick="count_btn(this)" id="<?php echo htmlspecialchars($bbsList['id']); ?>"></button>
            <!-- ゴミ箱のアイコンの数字 -->
            <span><?php echo $bbsList['bad_count']; ?></span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <script src="js/util.js"></script>
  <script src="uikit/dist/js/uikit-icons.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.13/dist/js/uikit-icons.min.js"></script>
</body>

<footer>

</footer>

</html>