<img src="https://img.shields.io/badge/PHP-ccc.svg?logo=php&style=flat"> <img src="https://img.shields.io/badge/-CSS3-1572B6.svg?logo=css3&style=flat"> <img src="https://img.shields.io/badge/-HTML5-333.svg?logo=html5&style=flat">
<img src="https://img.shields.io/badge/Javascript-276DC3.svg?logo=javascript&style=flat">
<img src="https://img.shields.io/badge/-Windows-0078D6.svg?logo=windows&style=flat">
<img src="https://img.shields.io/badge/-MySQL-336791.svg?logo=mysql&style=flat">
<img src="https://img.shields.io/badge/-Visual%20Studio%20Code-007ACC.svg?logo=visual-studio-code&style=flat">
<img src="https://img.shields.io/badge/-GitHub-181717.svg?logo=github&style=flat">
<img src="https://img.shields.io/badge/-Docker-EEE.svg?logo=docker&style=flat">

![image](https://github.com/user-attachments/assets/8520d622-4b4c-4cec-a7fc-4c7908559f26)

## 1.概要
名前と内容を書くと掲示板に投稿ができます。
<br><br>

## 2.機能要件
- 一覧表示機能
  - 投稿したコメントが一覧に表示される。
  - 最新の投稿が常に上になるように並び替える。
 
- 投稿機能
  - 名前とコメントが最低限投稿できる。
  - 画面遷移なしで更新ができるようにする。

- おすすめ順と新着順の切り替え機能
  - おすすめ順はいいねの数に応じて並び替える。
  - 新着順は最新の日付と時間に応じて並び替える。

- 評価機能
  - コメントにGoodやBadの評価を付ける。
  - 画面遷移なしで更新ができるようにする。

- 通報機能
  - 運営に対象のコメントを報告できるようにする。
  - 実際にメールが送れるように文面なども考える。
<br><br>

## 3.制作期間
20日間
<br><br>

## 4.こだわったポイント
- 削除機能を通報スタイルにしたこと
- アイコンを使用してイメージしやすいようにしたこと
- 投稿や評価機能は非同期処理にしたこと
- 長い文章でレイアウトが崩れないようにしたこと
<br><br>

## 5.仕様動作のイメージ
![画面録画-2025-01-18-123939](https://github.com/user-attachments/assets/390d24a9-35e6-467b-9036-b71db0dd2145)
<br><br>

## 6.機能一覧
| 一覧表示機能 |　投稿機能 |
| ---- | ---- |
| ![画面録画 2025-01-20 005854](https://github.com/user-attachments/assets/5da0b933-78d9-41aa-bde8-b40013c33799) | ![投稿機能](https://github.com/user-attachments/assets/87924450-64a7-403c-815b-69286a88f4dc) |
| すべてのコメントがTOPページに一覧で表示する機能を実装しました。 | 非同期処理で名前とコメントを投稿する機能を実装しました。 |

| カテゴリ選択機能 |　評価機能 |
| ---- | ---- |
| ![カテゴリ選択切り替え機能](https://github.com/user-attachments/assets/df73fc37-75a9-4ec8-a550-34418345bb7f) | ![評価機能](https://github.com/user-attachments/assets/ecd0029e-494c-4a3c-9e10-5ae539bab790) |
| おすすめ順と新着順と切り替えれる機能を実装しました。 | コメントに評価できる機能を実装しました。 |

| 通報機能 | コメント数を表示する機能 |
| ---- | ---- |
| ![通報機能](https://github.com/user-attachments/assets/ee095d75-e6a9-4e51-bf38-b8b82774c444) | ![コメント表示する機能](https://github.com/user-attachments/assets/e6d9bc33-37dd-4442-86cc-e0a3da3644b7) |
| コメントを運営に通報できる機能を実装しました。 | 削除されたコメントはカウントしないが、投稿IDは連番扱いで実装しました。 |

<br><br>


## 7.使用技術
| Category          | Technology Stack    | 
| ----------------- | ------------------- | 
| Frontend          | HTML, CSS（UIkit）, JavaScript | 
| Backend           | PHP                 | 
| Database          | phpMyAdmin          | 
| Environment setup | Docker              | 
| etc.              | Git, GitHub, vscode | 

<br><br>

## 8.今後の展望
 - 返事をする機能
 - デザインを掲示板に寄せる


