# laravel-vue-sns-output
Laravelを使ったSNSアプリケーション

フロントは、主にBlade。一部コンポーネントをVueを使用（CSR）。

<hr>

urlはこちら
https://github.com/massu-159/laravel-vue-sns-output

## アプリケーションの仕様

### 1. 仕様
- sns記事投稿
  - sns記事一覧表示
  - sns記事新規投稿処理
  - sns記事更新処理
  - sns記事削除処理
  - sns記事いいね処理
- タグ
  - sns記事タグ付け(最大5個)
  - タグ検索処理
- フォロー
  - フォロー(アンフォロー)
- 認証
  - 会員登録
  - ログイン(ログアウト)
  - パスワード再設定(メール送信)

### 2. 構成技術
- php : ^7.3 | ^8.0
- composer : 2.0
- laravel : ^8.12
- vue : ^2.5
- sass : ^1.20
- axios : ^0.21
- bootstrap : ^4.0

## 備考
ルーティングの一覧を表示するコマンド
```
php artisan route:list
```
