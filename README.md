## udemy Laravel講座
下記URL講座をもとに作成。

https://www.udemy.com/course/laravel-multi-ec/

## ダウンロード方法

git clone
git clone https://github.com/mokori4242/e-commerce-website.git

git clone ブランチを指定してダウンロードする場合
git clone -b ブランチ名 https://github.com/mokori4242/e-commerce-website.git

もしくはzipファイルでダウンロードしてください。

## インストール方法

- cd laravel_umarche
- composer install
- npm install
- npm run dev


.env.example をコピーして .env ファイルを作成

.envファイルの中の下記をご利用の環境に合わせて変更してください。

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=laravel_umarche
- DB_USERNAME=umarche
- DB_PASSWORD=password123

XAMP/MAMPまたはほかの開発環境でDBを起動した後に

php artisan migrate:fresh --seed

と実行してください。 (データベーステーブルとダミーデータが追加されればOK)

最後に
php artisan key:generate
と入力してキーを生成後、

php artisan serve
で簡易サーバーを立ち上げ、表示確認してください。

## インストール後の実施事項

画像のダミーデータは
public/imagesフォルダ内に
sample1.jpg ～ sample6.jpgとして
保存しています。

php artisan storage:linkで
storageフォルダにリンク後、

storage/app/public/productsフォルダ内に
保存すると表示されます。
(productsフォルダがない場合は作成してください。)

ショップの画像も表示する場合は、
storage/app/public/shopsフォルダを作成し
画像を保存してください。

## 下記、進めていく中でのエラー抜粋

エラー↓
php artisan migrate実行時
Illuminate\Database\QueryExceptionと表示
解決策
my.iniのポート番号と.envのDB_PORTをあわせる
php.iniのextension=pdo_mysqlを有効化する

エラー↓
php artisan tinker 実行時
file_exists(): Unable to find the wrapper "hoa" - did you forget to enable it when you configured PHP?と表示
解決策
ConsoleTput.phpの$paths[] = 'hoa://Library/Terminfo';を無効化する

いきなりgitが使えなくなった - 2022
https://www.nda.co.jp/memo/git_safe_directory/

エラー↓
gitのクローンダウンロード後artisanコマンド使えない
解決策
composer install

エラー↓
php artisan serve 500エラー
解決策
.envがないのでコピーしてくる

エラー↓
git ブランチが確認できない
解決策
リポジトリのメインをクローンして
サンプル:git clone git@github.com:リポジトリ名 ユーザー名/リポジトリ名

「git branch -a」でブランチを確認後

必要なブランチにチェックアウトする
git checkout -b ブランチ名->例:sec05_logoSetting リモートのブランチの場所->例:origin/sec05_logoSetting

※クローン後はシンボリックリンクが解除されているので再度シンボリックリンク作成

エラー↓
git add 時にwaning.CRLF変換させない
解決策
git config --global core.autoCRLF false
※次回から設定をLF指定しておけば良い

エラー↓
grepコマンドがwindowsでは使えない
解決策
findstrを代わりに使う

エラー↓
npm run dev か nmp run prodした際のエラー

  WARNING in ./resources/css/app.css (./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[5].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[5].use[2]!./resources/css/app.css)
  Module Warning (from ./node_modules/postcss-loader/dist/cjs.js):
  Warning

  (4:1) postcss-import: @import must precede all other statements (besides @charset)
解決策
https://biz.addisteria.com/error_child_compilations/#toc2

新規cssをresouce/css/app.cssの中の先頭にする