<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'S_Coiffure' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p7c(`,(!}m/+hgZX4z|weP-x^+oJ9Li7}OR%4V<j],+`x`Xw!HZ.PeovSvuB{O#R' );
define( 'SECURE_AUTH_KEY',  'pb>X@yX5-u!zhA]1f=02bNMZCMKe.=IR+|>4G&9!ur1JoO;bl9<U]KZhviR<{RN8' );
define( 'LOGGED_IN_KEY',    ' A`owtoc.*^Hx[)dL0wXaOmCC=t@r#sgAc8{CfbMui+8~aU(N?=Mmn$/9LP L7nT' );
define( 'NONCE_KEY',        '3{ EvO~})U/sv-1Jh,q+f]eQcmvuMNpZrIu8_7=lG)[(5(XDYSsAUUIrt+_VF`yq' );
define( 'AUTH_SALT',        'o,)5Xwg?c4eG#ziCOkeJ|Ir4U;  >5Rhxz9Mgdll]LUh}b6):6;Rbo`ZKn%6jtSH' );
define( 'SECURE_AUTH_SALT', 'm.h+a%./VVI58~1nv`weTsQ9(}jJ9Yr`Z;$BiD<LUm[nOLar>4`!OIPv7J3kVlwn' );
define( 'LOGGED_IN_SALT',   'xX2hL`irHS{QMI4]7$C@T7.4n-{]Ye8/zk@:%8c9$kpi:{rf_L2`))koY5#.P[#$' );
define( 'NONCE_SALT',       'J+[]*.kcB(gDjA-P^@&?%D<@E}[?[~k~RW`aR 7S;Oye=8*+DY;>9.jn6wY?yVCB' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'SC_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
