<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'romoon' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'romoon' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '0000' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KVD`A1j#9![e~i;_V$MySD0(1O_UXA<@EAl}qC?ixH$#gqcy6yEaU8:7Z{=sRxE.' );
define( 'SECURE_AUTH_KEY',  'T+[tnhV%eV))H)|wZ^!L6dR8V1cB9dF0WI3>YoLh+Wq~nqF,!P% b{wC1CSh6@ [' );
define( 'LOGGED_IN_KEY',    'EGjAp.Si|$SrwW)<G&KaXB)EL;KuP[4XC4dl4)AGn}UR8YoL{dVaB%e1-@oiNUpQ' );
define( 'NONCE_KEY',        'hoh>)!U-eJrG/uE}jB9PB:oiX[~6Al+Ef_FL}wTsmj7yG+gz&Lbd1O4L6>/|S[yU' );
define( 'AUTH_SALT',        'Iz{+dV9/57FNDDU*k,KCGaC(=I4n015#?e6a8}hBEIPdF9mas1PDf*uS+z f>)Z@' );
define( 'SECURE_AUTH_SALT', 'wPZRa>6 fWj`5*<az=2^yadllrJLcES+d@Z*[A-/_&=9+0NFD)jnLkgV^&d:Xo]9' );
define( 'LOGGED_IN_SALT',   'x[Q#Wx.Aw,l-|>{d2gNiX| 6+>wr1&;To_=b%>P7~t(!%;cm1SfN]K<jiI7M_o.[' );
define( 'NONCE_SALT',       'gnBss-7)aD:~W#.>j5a;&TPuDw~nG[k0hD?U0j$P@x(fS jy$# >U}Z7v(d{K{za' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'sub';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
