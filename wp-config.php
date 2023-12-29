<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'wordpress' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FOZ{oCajVR2q5tj>n]C 4&9 08xCcQei/FC_E`{DX0anUym5K6svAk/}m`0,q<re' );
define( 'SECURE_AUTH_KEY',  'C^N7m|k1O3Ri3D>o(h#7^n zbGP}APAu gPT,E|zx|15t4(i<-RK8J*RYy=7|gZd' );
define( 'LOGGED_IN_KEY',    'v$]J&:}F%ysz#o@4j*klK0IS2dbZ(fMk6?&_ZM4ZPm3nT%RJb@?}*Tm5<2Z}#IEC' );
define( 'NONCE_KEY',        'DS~aqH[{<<:Dd0cT!6vA?9TFSH}M_X@ iM.qM*&*n2rq^y{*>-gf$<~T/ d[0P@j' );
define( 'AUTH_SALT',        '.-z7n7uUc&n%j+Oc2:dO[n{N%p<94C4AJl:JymixOC^uwF/41mQ.FP$D>8#27qMA' );
define( 'SECURE_AUTH_SALT', 'XV/&5x>097l{.@;flU?]Y(GR@^~2s}iMQ1us.|M<fd`pz@m$hHALimit>lpdrDsW' );
define( 'LOGGED_IN_SALT',   'wBA+`>h@5C&R-Z4%hcg]d@>X._IVH3RD$5oCYP*=[AalBsRa9+!o/i [zEfcvhe[' );
define( 'NONCE_SALT',       '}/@gRe^Z3&AHMlX[]{8OTV;oAtDK8-nzH.(#5a)04J2 yN8E<tEJ>5!+FB|V9jz/' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';