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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wpuser' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '3Dd8BoAvZw@GhEn!' );

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
define( 'AUTH_KEY',         'j5ABdGs8nK1zD KeXb-Av_9,%1S!`Dx|LeTVs`/dyxP8$*|>wf;F!5=g&_i^wGwm' );
define( 'SECURE_AUTH_KEY',  'p*kAM$GYJXgC5= _{M~:JH#47g?<J+x5 oT[3r3>SKUCV>Q@;bx=%C8^a:a[%~7q' );
define( 'LOGGED_IN_KEY',    'rowE-d[cWOx]MKJP5LF4QAEx)~$nldM+>Mz=Q1OP~wTloUvJgr.jHpDG:)+,KOXv' );
define( 'NONCE_KEY',        '_WQKB(.O->1[jY*wMWq#-^fsnz:H@(}K_d_@S-~`f{)5 g=Q/b~xayXp# kKxKIY' );
define( 'AUTH_SALT',        'gY0QX>(D3nvCiO2HKO^xHEW;P!n;17VF|ZP[>ENh1R++sEW8$p/Mc!si]tvO$N@;' );
define( 'SECURE_AUTH_SALT', 'M![0rcqpN(UpJ?T6hyI6kRL=$a?1t|V$br?)KmN0@-PHX=#L/2U>kHA9v-~!X6/J' );
define( 'LOGGED_IN_SALT',   'RM7l@7rn:veZ{;Lvp.|GM.?.PBTU;OpzG:!6/QnQAV>%48#;Q?Z/}htHQinVM$%6' );
define( 'NONCE_SALT',       'VG;W2J6NI-CL2@4hCGov2]p>=yzVKBEW}Z.o^B!.nPaTAh#)Xb_J8O%(|b}%aXS_' );
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
