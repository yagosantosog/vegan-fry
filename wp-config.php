<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'ifsuldeminas' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3h)I+G<vx-aEgib-M$Ee2jlaM*B;doV._9mgi%:No)+LDI&) M:_`l<-gP`e d8(' );
define( 'SECURE_AUTH_KEY',  'Di~P{s`r;4Z0w>CY &en*(^H5^BNLGGS0)*tSi8p_EmUa^Fn=k%iT*ubO.U.{Uq;' );
define( 'LOGGED_IN_KEY',    ']Xj(Z|7`5Zj|C|G+#oPgUXS:I=9deUk[u:DJ CL@IoeB^)7fgRod>/}En5=JU%wg' );
define( 'NONCE_KEY',        'LZ4KZYBj9Ol7m.Bi~&vz>KlAgRO@yE+119%3_b>A4KV=WAj6$Toh%2@_pFB;*gED' );
define( 'AUTH_SALT',        'pE&+A&S%A#s&x-${S80`~+9S&O&)~V-z}J53J&+N0o$Cvnl&vksb%V4r{7!2[=Iy' );
define( 'SECURE_AUTH_SALT', '`&NPE1H7#R+{d^IZ-pY,Aj!@8Ig7NC4J[ }g|GvA8 ;v=;z1oW72~wo9C`bbu*lA' );
define( 'LOGGED_IN_SALT',   '}39^4k?~tx%J%Y==[o#DXg]z>?3oq?,+)(a`JXHQjEX(5G56f:$274Vmt4F|xp(g' );
define( 'NONCE_SALT',       'TO:!; ;_YS-(eRJr$4;@|@Qvg><O:c9}OL1(:{kT(M^J+;@i#$.MMiy8fxtjHI^Q' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
