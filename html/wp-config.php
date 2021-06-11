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
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'wordpress' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '![Cc{q1,ht|ZL`rwg#+D8Cm/>dsSKW$R7Uoz8xDO?p~s!Cg!RMgPDJ ?*tbKO -b' );
define( 'SECURE_AUTH_KEY',  'x2dMMaz;IBq%LvAImZ[_UUz6A~I`4~?|jLt(cy1v@Fj0&3S;.}Z|H(xN3bA*C;MI' );
define( 'LOGGED_IN_KEY',    'K$H+kGDoi>{ :o=CH]61hT63-BBha&i^yJ]QFDu:uG9`9QJcq#g`:b )#>V{ob_W' );
define( 'NONCE_KEY',        'Wn]2v|6 05]eyLTcMmIS>%}>J|v[FGeA>kWR!UiMCr-WmWV5StlEK2]i[$G/EB^t' );
define( 'AUTH_SALT',        'bt6LU3fl<+,bf#{qU^t*6._ax>LQ|[~9k0,)/BPH&YySGFJHw3FX/^Ieu eg;#F[' );
define( 'SECURE_AUTH_SALT', '%~r{ls>-j8U)J(Y95Lq81+(TxGGXr!.IfNqJ;Gfxf(D9&?e]L;`h3)9!Kj=#MWu;' );
define( 'LOGGED_IN_SALT',   '7__#]+@+01;IC4ffrhawkab_MZLiV$F7qdQlR#`m!JWTg?i5y9Rmm.^U[~R1FnDy' );
define( 'NONCE_SALT',       'E5IRc?Elos*VaDqp30=YGdL8<:&[+L:icQsu}t#9AKyZ4?PBWs9O_IK;MN[a)Ux2' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

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
