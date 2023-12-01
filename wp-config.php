<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '$Uvg5y*7DUH*<YBrOY*e[0|]v_3 hI19{G(d^_)7)>F}MUJxn/tL=LYC$_]37J)9' );
define( 'SECURE_AUTH_KEY',  'Vcrp[Tx]%vEWe?O&7$*,u2!~*A?j7pyrKst1}5J$#],0$P[+1c[:+I/rEoV[Frwp' );
define( 'LOGGED_IN_KEY',    '5e;b#hP5,SJ0%SI|,_).IH*H$?6Mo<o>7xPT~|Xkq -[Gz]D@Mwdy2mJA>:Siyx6' );
define( 'NONCE_KEY',        'cEwgQ)47)e38(UuF^;cCNPMDr|^9a^U`WgmoZ0.XW:|2<]yZ,Y;ejh6@+{*p#he+' );
define( 'AUTH_SALT',        'rNi2yBoksuk,-!ro#7Jc4@!)7$Q+}$|:/H.:20erw8[5HY7VBOu)|?}@IyX_5MOI' );
define( 'SECURE_AUTH_SALT', '8P0(>??[%!j/_q^r6<x`(:]a<h~JLn(m|:=:0D`I2 !<goI}#[!?Y>_#:u7-ul:;' );
define( 'LOGGED_IN_SALT',   '0V8zjIR3P{?i`eGYB{=`d#L!O F_1m~c/dgb%wh;4>TZ(UI%WZ#!SdP@F;w^?p9C' );
define( 'NONCE_SALT',       'sU_];F-vDH-2>_E0m>uXjO#!|rp;w++S!sPY;&1f0,@]DGMpxq8t&3qv$6a<F?Wx' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
