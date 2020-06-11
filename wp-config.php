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
define( 'DB_NAME', 'newready' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mX[ 3. i~%>TQ:$7G%I}n75uK:e<>m1K;YKk}1H91zxt-o(ukQLKYKEcHbBV5n/:' );
define( 'SECURE_AUTH_KEY',  'xjc0~O8ugP/(<|jo^U8eH<`[<W%{R25Qu>;/YHlxk9x!=`K*13V)Y$<i-d36a#+H' );
define( 'LOGGED_IN_KEY',    '&ns=)$Vud)Ws 1YQ+>xI2P_p%YI{k4CCiq89g2>3y} E_{~qoCLdm on)*pemb)M' );
define( 'NONCE_KEY',        'G#Zzh}O0PT!?)NAADwMGx1&UX48vbgV.F:>Nf,^$`xTysw# i/V]m$/|PjxuK`Ff' );
define( 'AUTH_SALT',        'c^^C&(B.sAK3!:CK@0CX?XxiFt=[E]kk6ABblTo~^*vIO(3ipS~!5/,t|Ql@S <d' );
define( 'SECURE_AUTH_SALT', 'rGW]DZ[tuk<|!^iTxp;RXzoW4DtzO3!ru<yh+B>0Df/K:pfrf4Np#%m/seIdc!Vk' );
define( 'LOGGED_IN_SALT',   '4}1K0X0_n%Y@nl0H*aH(egRL3LHX5Uh^?O}>Bo:0i7zQeslT*EY:R{7U^!-ePAxV' );
define( 'NONCE_SALT',       'C&dajs@5Np{h=[cHFwTiwUfbtW7D^JoT T^6mt~<}{&hWW|rm_cn^RnNq&=d6EeF' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
