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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpressptbr' );

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
define( 'AUTH_KEY',         '-[ zpqdH;9/h(K_bHtV7xA{pf1QK]Xs<DMdue{_q=M/A6.xH-bZJSwe2GO1sDIvn' );
define( 'SECURE_AUTH_KEY',  '[/be;T29QGM2,W~6{I:0D!#i`>z:MOECKW^DR#l.a+T0`pMQW{7Z>k]`v=RJoDt&' );
define( 'LOGGED_IN_KEY',    'C;+wxdHI{@]=?(`g5[@4]f4mw Vh:rp3#ZxdSfWc%OjKGar%lF>pI?2vpRu XG=f' );
define( 'NONCE_KEY',        '^T;/zP)&~3g5MqF^w{`8BAzZv.~)Pd$]!)9Y?[/-J98h-h -om_$)U`Id;j5@uO;' );
define( 'AUTH_SALT',        'n5-3&Cf+x:>OC)3+lKq%w;`(;wZ;4({<)<k :2qhJ1p<Fc1G{1px>]|Vx8}5xoGe' );
define( 'SECURE_AUTH_SALT', 'cQG|8#>r;:|h~m1Yja_SojwY:-V^cA#dbwZQhnCsdN8X+&D8Jk^CG1YGH5=C>_Z{' );
define( 'LOGGED_IN_SALT',   'y6^lk[&]$a5,$#)g(e,6Yw.j=Q]~R 6 BMOvn6S;wrF{j3&O6n@.~*VV+!|V+g7J' );
define( 'NONCE_SALT',       '?-0xr70A;M:pz>=BdEln+3n^3}m+/C.=~EcCFtnQwDRrB2Jlb5.}7Z(a%d!5O4Y;' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
