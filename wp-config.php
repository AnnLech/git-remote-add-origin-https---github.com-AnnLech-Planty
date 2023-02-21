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
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '4+5vKE[IyUf-lx=c]Na^;Ovt]|8.c>Yem.apy`ybwnp9CqpNmm0[vO9r;Y$usr}f' );
define( 'SECURE_AUTH_KEY',  '@nr;mX>hN_F a:;nv&E%qwt8Q{pC%?W&Cy5$o;ALv>Q,;`~k5t1[97RoH<(~AOS7' );
define( 'LOGGED_IN_KEY',    'z4`KUZ[s$#eJL/8G9G&qU0o=$HuU5D~r2fv$#S2~et4C]94#>7e;Qx|Y75()nX8z' );
define( 'NONCE_KEY',        'y~)`qnzlqs@!SH1]p:^G~)Zj%dMw(P r6JKY-A2J+(KzEAfg%uj|I0MvR|rXDv<t' );
define( 'AUTH_SALT',        '94mw_>i;{&D[QN<yTm;,2}-9yAPH<`*Ph>)T|D,X<ILnK%^qIfmUlK1,.M9ra*3S' );
define( 'SECURE_AUTH_SALT', '}<{^u7G a&M@p2,cr_Q@S]`h0)h<)BnA9I@ODD tt%HcRTWwe<r?_FjJ0GF(9yu4' );
define( 'LOGGED_IN_SALT',   'Y2YKt/aG}~cFlr:++ zS,tYcucK[;tdkaFaPI~v{;+Inw!dHh#VCOp*F8s=QQ0mF' );
define( 'NONCE_SALT',       'Ah10528fi6KS9INm5V=TILq*ICkaXFL{ $`GT!J?s&=R_CZtv,b#r>&;V6;{EJvb' );
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
