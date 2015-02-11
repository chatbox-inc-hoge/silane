# silan - silex base component

## 機能

- silex ベースのスキャフォルド
- pimpleの中身がカオスになりがちなのでアクセスを制限。
- pimpleをグローバルにしたい誘惑に駆られるので、カプセル化
- 使い勝手の悪いsilex
- いざとなったらスタブ的なことすればなんとかなる(スケーラビリティ!!)


- `$app["hoge"]`で取り出す時の気持ち悪さを解決したい。


## Schema

silane.config : 設定コンテナ

silane.configLoader : 設定コンテナからのローダ

silane.modules

## 使い方

````

class MyApp extends Silane{
	...
}

define("SILANE_DIR")
$app = new MyApp();

$app->deploy("config"); //予約済みモジュールは名前のみでOK
$app->deploy("auth",__DIR__."/../auth/"); //モジュールのマウント

// $app = MyApp::load("config")->deploy("auth",__DIR__."//")

````

## Application

名前空間を持った一つの構成ファイル群

