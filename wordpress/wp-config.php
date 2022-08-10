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
define( 'DB_NAME', 'vue_wp_data' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'vue_wp_user' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '85khsh89' );

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
define( 'AUTH_KEY',         'j]LKVi$EZy/w`g,,`r5L&4JDJ_VzMC?!op1.`m77H8$@UAQFV=[/dZx<z+smN/vd' );
define( 'SECURE_AUTH_KEY',  'wh7Y(^0YT1{WL mQaxgU6ShLe-OI>);/.}heSD;]cmBYmfZu%.A$~*6WtdKR,<V6' );
define( 'LOGGED_IN_KEY',    'XcG2{NBZms6#]!IwqYV{Ylequo&NLxe0tNY{y;CuBl#n,_hTijLzWe_t?R/Z$S:T' );
define( 'NONCE_KEY',        'B`//UbSMmw9^r}3q>=t^mwR..W|hGqtJ+jP%~FL>Bd~Ug{xuG_WMGMnVLkfb&R?{' );
define( 'AUTH_SALT',        '>Be+(n4X*bG?V)H3TZ0{cpb|Gb/RYA$CGP&1DQU-]rmY[#`ftxqgez5_L|WtF*2w' );
define( 'SECURE_AUTH_SALT', '|le]C@E_1CcB]al>xBxr~ERGd{GAAY[o:a PawP8D2m#V$7F<Y)q@OWfw<`v-f,Z' );
define( 'LOGGED_IN_SALT',   'u;%z6| #b;o.n&aCHWb`74jTum&>O$(3VOxE{C./pm5mC]@z>pzCg4SO3te[t|*@' );
define( 'NONCE_SALT',       'osh}+ /#Dyn-b!DknuH#}NBxIl-hm`7cgkk_-rrhDMb>6mXlo1@1FSM}L k@J7;B' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
