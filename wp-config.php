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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'unicodatabase' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '+wdyr$#|XfNFIvOp9jw(6(@_;_`o{kDUR/}jFJI ?=92v.5L~GDo_yhSf+s4z59E' );
define( 'SECURE_AUTH_KEY',  'M_PJ1|JFs U<nr9%}J(GNhs=hn(=Y0Jdo^W=gv_<}5^,b#8TovqNv-kY/[VN4qGH' );
define( 'LOGGED_IN_KEY',    '<7mE`>oP6No}n<=-ICBpFG,w V<as;o4mAavl</UYj7xN%XWGWj+%9s<_C1JNr&E' );
define( 'NONCE_KEY',        'LuQ?f 3nk!xT0l&,tpm=0ofQ4-3y+jNv~rfukKIC|+62yy+958nxeo|),m-$8Hc4' );
define( 'AUTH_SALT',        'a1jtAe4~og3#EY#Dh&_bqnG{H^%+,7+{cg>_o($*`c8f;;s?Fkn,c<cTR f:kZN+' );
define( 'SECURE_AUTH_SALT', 'P;c_re)XVh+Alo~R$Z Z/4b~HlMFe$-;Gxjtc#X|vbD8Bqz7=,-Li%H{pN$!S&:=' );
define( 'LOGGED_IN_SALT',   'u;3$9Q7zhW|x8t6Od/+3~)}!jk8?h`4,4iJg8}>B7N^@K^U3L@=/hWD;+K&rAF+-' );
define( 'NONCE_SALT',       'sRG_:sQ<=kEEac6|11AuQ@rQ?{bZ}X)tKNOTqpGKocmp}6((La)8%1NQ- *{wrSZ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ucwp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
