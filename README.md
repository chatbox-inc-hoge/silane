# silan - silex base component

## 機能

- silex 拡張
- 設定ファイルからsilexの構成を制御できる。

## Usage

````
use Chatbox\Silane;
use Chatbox\Config\Config;

$config = new Config();

$silane = new Silane();
$silane->setConfig($config);
$silane->run();
````

## Schema

silane.silex : silex向け投入データ

silane.controllers : mountに渡されるデータ

silane.providers : registerに渡されるデータ

## Providers

### Chatbox\Silane\Providers\BootEloquentProvider

設定`database.default`からEloquentの初期設定を行う。

### Chatbox\Silane\Providers\RestErrorHandlerProvider

エラー報告の例外変換と、エラーハンドラのJSONレスポンス対応を行う。

## Misc

### Chatbox\Silane\Response\JsonStatusResponse

JSONレスポンスの生成

