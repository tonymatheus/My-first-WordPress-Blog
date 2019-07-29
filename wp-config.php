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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'projetoBlog' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '^1G()V0)F:c+<q{@)9yK$&[8(F^-.@eRE:H{:ZI*vT-K=TX+WMtwm6%6miX4G:h8' );
define( 'SECURE_AUTH_KEY',  'v{3~OR2M{)Xj>kc*KNFNB$&DzDQ/),G!2v6(_6$IzK+EoJf{X0oTZy;dd6Ls^2a#' );
define( 'LOGGED_IN_KEY',    '*Ffw*bJ!|VhiW3A3-uYn~2b`C5{;+4)qV$7Ise-{iJ/i3b#trc@>*Bw2l o$l#&N' );
define( 'NONCE_KEY',        'R<A9CK(#eEc 9G{KXcs%3!WnuOt@%9C0~KS79W2F=j0 Sqt^4$2YwCAi.5h=}zs8' );
define( 'AUTH_SALT',        '1RD;N9v%L9iXz_ixuv%_5i{:0+XN>*%7adSm1z^mYgk+9@3$2[DLU$S.L0R46 _+' );
define( 'SECURE_AUTH_SALT', '99U+!yC 1d#w*0frt7>ylXRJ*,uuO];Y2-/T jepbsCD%OS(bd^+%*6A{O4 ^c|N' );
define( 'LOGGED_IN_SALT',   '#%c]<tp }I-dp`2mMxO_1#k{oj_w<PQa-JscU2kx7,@v3e,j^RR|)ny0Y&G;!>W`' );
define( 'NONCE_SALT',       '4t9cG_;o,sK2}FdF,64,?wCQE0_LlRHs6/0%=uG@REvxD}SRy^y8$`n?4~3w(|oN' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
