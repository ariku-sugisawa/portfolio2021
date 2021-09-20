# portfolio2021

* 製作期間：2021/09/20 ～ 2021/09/XX

## 開発環境

### ディレクトリ構成

```
root/
└ src/
  ├ common/     - 共用ファイル
  │ ├ css/
  │ │ └ vendor/
  │ ├ scss/
  │ ├ js/
  │ └ └ vendor/
  │ └ img/
  ├ css/
  ├ scss/
  ├ js/
  └ img/
```

### 各ディレクトリの注意点

* CSS/JSの既成ライブラリは`vendor`ディレクトリに配置されており、カスタムメイドのファイルと区別しています。
* `scss`ディレクトリのSassファイルはGulpによって自動的にコンパイルされ、同階層の`css`ディレクトリに出力されます。

## 環境構築

### 依存パッケージインストール

```shell
$ npm install
```

### Gulp + Browsersync起動

```shell
$ npm start
```

または（gulp-cliをグローバルにインストール済みの場合）

```shell
$ gulp
```

## フロントエンド仕様

### 対象ブラウザ

* デスクトップ
  * Google Chrome 最新版
  * Mozilla Firefox 最新版
  * Safari 最新版
  * Microsoft Edge 最新版
  * 【IEはフルサポートしていません】
* モバイル
  * iOS 10+（Safari）
  * Android 4.4+（Google Chrome）

### 使用言語

* HTML5
* Sass（CSS3）
* JavaScript（ECMAScript 5）

### 使用ライブラリ

* [sanitize.css](https://csstools.github.io/sanitize.css/) - デフォルトスタイルの統一
* [CssUserAgent（cssua.js）](http://cssuseragent.org/) - ブラウザ検出
* [Picturefill](https://scottjehl.github.io/picturefill/) - picture要素用polyfill
* [jQuery](https://jquery.com/) - DOM操作と各種プラグインの利用
* [jQuery Easing Plugin](http://gsgd.co.uk/sandbox/jquery/easing/) - 各種イージング関数

### ブレークポイント

* `sp`: ～767px（スマートフォンを想定）
* `pc`: 768px～（タブレット・PCを想定）
