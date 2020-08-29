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
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wordpress' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '1234' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'pS4~R%V=|*Zoa;ou}Gemr|2?tc!Q_Ww{}0&E%+#V}j%8>/hL&Mub9:#X#Oj7ZFq2' );
define( 'SECURE_AUTH_KEY',  '[(q-.~6OnUu$+9BAX.p#;0bre)orHv<)1lSfPa2)1`F(<~2#Vj;:B`CB}ZR{cXl0' );
define( 'LOGGED_IN_KEY',    'gSO|nh=5|SM0Gt^3Q3WLH7zE[kIk d4knLF10PHNw[s&Ty;6IM#TNN^N6=yVa6Ex' );
define( 'NONCE_KEY',        'tP~~3e&6!~@~V`Ji`r-e`]K}8pk2Sck`q2awc)sx8~=i<U<#.^aC.yJ?LT{HRsfL' );
define( 'AUTH_SALT',        'yv+De&L5y=f?z41-2,,: 4LTCWmZU!Ld`Ky`OyhZ8`QIM@&+[qE(qGbPCk>l?!Lw' );
define( 'SECURE_AUTH_SALT', 'w5 *b>/a^jNOZm%[S79n-}G_g~ap!yHk)!M=-*>69db93aV9B<c]mG?@)obRIQV6' );
define( 'LOGGED_IN_SALT',   't].9q4hWyItn#}k@|WJCx/L9j)0C.5666o/),3n=Gzms1F+b!)zJZ};o{o=*qoZm' );
define( 'NONCE_SALT',       '>T Rx{:YHslE,}^ tqk8m[/+W-9Zko O>jQR7^K66s4mgqq`@i|:.-I/}>4p5{~c' );

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
