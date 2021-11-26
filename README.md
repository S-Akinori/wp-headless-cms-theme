## WordpressのヘッドレスCMS化のためのテーマ
Wordpressは記事管理と表示の両方を行うCMSですが、記事管理だけの役割を持つようにした（ヘッドレス）CMSになります。
フロント側はNext.jsやGatsby.jsなどで作成してください！
サーバーはVercelを想定しています。

### テーマの設定
- zipファイルをアップロードして有効化
- `functions.php`の`deploy_to_vercel`関数の`$url`にVercelで作成したDeploy hooksのapiを入れる

## Wp Theme for headless CMS
This theme is only used for headless WordPress.
Views should be created by Next.js, Gatsby, etc.
You should deploy front pages to Vercel

### Theme Settings
- upload the zip file to Wordpress and activate the theme
- In `functions.php`, set Vercel deploy hooks api to `$url` in `deploy_to_vercel` function.