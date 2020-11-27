<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', '');


/** Utilisateur de la base de données MySQL. */
define('DB_USER', '');


/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');


/** Adresse de l’hébergement MySQL. */
define('DB_HOST', '');


/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^8Eq+FzL{;(( )~clS98fa_GERBW1,9b<Kas)D^o~xBcpQEu4mAe+Po&{U3DsYa:');

define('SECURE_AUTH_KEY',  ',81JtA[{<8d;@$0rJDH/6e2;gi+O?HLseTr=y!;`sOKW16a+.=u2izLv?-yy#b&*');

define('LOGGED_IN_KEY',    ',HCu?ETc!E`H -SX@r;/S@pvp0E,$Njj8]w78hQ;C1#C@YYF(Ago=X^LkF}p!XYo');

define('NONCE_KEY',        'ZiSda]9%Vp*z#q ^Bbc@*Ti4}-^LL16d5;fOLjB4ag~%4PQHF-pD-1ripSPADQK!');

define('AUTH_SALT',        '`PH V _aKwVQq7Z6 ~(b#1^m^Y&f.Ap38b(^oG!<LaG|;8Uvn2&/TZ^&kQ.8%/*7');

define('SECURE_AUTH_SALT', '|4mbi8JdwPq@a*Pf)QCbtzNz*%:+lhmGd$g8A4FN&p>iNc.ztrKem8$pK)@lDvSw');

define('LOGGED_IN_SALT',   '^CkdQv%T@/H>c+7zAa%QOkeBG9E[]S(u;`_(38:0euYJW(|LN!gv_KB WO_M3PWv');

define('NONCE_SALT',       'UBi31F&EnD*>.Y`/3QU`mIs(ayo9G2VAA<lF&aiTX3`Cp3k-/mO>6wAEow}!EK$J');

/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'strasb_';


/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');