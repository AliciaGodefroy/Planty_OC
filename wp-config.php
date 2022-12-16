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
define( 'AUTH_KEY',         'wR(0,2>/g@y=8+zk*I=?;+I*2W#j%-J#?s>S)CmNv+I{J)(B7&t^9CR%(>oU)6aW' );
define( 'SECURE_AUTH_KEY',  'pAmuF/enX^C*yCFb1MlWg[bZMP#U6Gb^m02ZLvNO~,u3!X}oamQKfe_Ju?{HJy?^' );
define( 'LOGGED_IN_KEY',    ' *`GoNKr4SZR$zR{IFn@sUY?`~VYw<$Zb57dx?MsZJi1D:je`/W}WU}O,lY`D&1-' );
define( 'NONCE_KEY',        'mDW,CP5&t4I}9e|v|3UQk{2TXzw`[S{),ZUj^K|ED@db9[HEH]D-9PoK^?I4!A,V' );
define( 'AUTH_SALT',        ':lufxqgRoq}IjNqi!(]267WSGDqcIwY*XH#G]>{A`]tc5~1I{%_}qzV<N6uGW-J/' );
define( 'SECURE_AUTH_SALT', 'O#IwbqR<5Gqa_`)UAq;7;zgC/rxxglD R?}w3K;^BN:w:=@HtNjRD3Rou!PFHiKC' );
define( 'LOGGED_IN_SALT',   'eI-HXMr|wZme-@oI#j4-#Y9-sx<|}wP_~~RYrbJ{4JQ%,cUb]nTi_8/][7qlP-;X' );
define( 'NONCE_SALT',       '5Xu aZ6==/_zZZu[Yn$+[f+/R.?I0wp0k_=.|q^yj?zTxu(SK%@riC790YPaHiTn' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'w5hyu_';

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
