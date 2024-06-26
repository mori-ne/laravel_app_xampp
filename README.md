## Laravelプロジェクトのローカルセットアップ方法

忘れないようメモ  
MAMP or XAMPPの場合

1. コンポーザーのインストール

	~~~
	composer install
	~~~



2. .envのdb情報を書き換える  
	XAMP default port:80 mysql:3306  
	MAMP default port:8888 mysql:8889  
	~~~
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=database_name
	DB_USERNAME=username
	DB_PASSWORD=password
	~~~



3. .envの`APP_KEY`を生成
	~~~
	php artisan key:generate
	~~~

4. データベースをマイグレート
	~~~
	php artisan migrate
	~~~

5. seederでダミー情報を書いていれば生成する
	~~~
	php artisan db:seed --class=SeederName
	~~~

6. Laravel Vite（Ver.8~の場合。Laravel Mixは知らない）はnodeを使用してるので、npmをインストール
	~~~
	npm install
	~~~

7. cssライブラリ等もresourceフォルダへビルド
	~~~
	npm run build
	~~~

OK