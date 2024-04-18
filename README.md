# 必須ソフトウェア
## 仮想化ツール
* Docker
* Docker Compose

## 開発ツール
* Visual Studio Code（以降、VSCode）
    拡張機能
    * Docker
    * PHP Debug
    * PHP Intelephense
    * GitLens

* SourceTree

## その他
* Google Chrome


# 全体ディレクトリ構成

```
./[work_directory]  任意のディレクトリ（VSCodeで開くフォルダ）
    docker/  Docker関連
        :
    src/  ソース格納場所（仮想環境Webサーバのドキュメントルート）
        :
```


# 構築の流れ

## docker起動

VSCodeでフォルダを開いたら、ターミナルを起動し、以下のコマンドを実行する。

```
% docker compose up -d
```

## docker停止

ターミナルから以下のコマンドを実行する。

```
% docker compose stop
```
