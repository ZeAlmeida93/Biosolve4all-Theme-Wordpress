<?php
/**
 * BioSolve4All Theme functions.
 */

if ( ! defined( 'BIOSOLVE_THEME_VERSION' ) ) {
  define( 'BIOSOLVE_THEME_VERSION', '1.0.0' );
}

function biosolve4all_get_lang() {
  $query_lang = isset( $_GET['lang'] ) ? sanitize_key( wp_unslash( $_GET['lang'] ) ) : '';
  if ( $query_lang === 'en' || $query_lang === 'pt' ) {
    return $query_lang;
  }
  $request_uri = isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : '';
  $path = wp_parse_url( $request_uri, PHP_URL_PATH );
  if ( $path && preg_match( '#^/en(/|$)#', $path ) ) {
    return 'en';
  }
  return 'pt';
}

function biosolve4all_is_en() {
  return biosolve4all_get_lang() === 'en';
}

function biosolve4all_language_attributes( $output ) {
  if ( ! biosolve4all_is_en() ) {
    return $output;
  }

  if ( strpos( $output, 'lang=' ) !== false ) {
    return preg_replace( '/lang="[^"]*"/', 'lang="en-US"', $output );
  }

  return trim( $output ) . ' lang="en-US"';
}
add_filter( 'language_attributes', 'biosolve4all_language_attributes' );

function biosolve4all_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu', 'biosolve4all' ),
    )
  );
}
add_action( 'after_setup_theme', 'biosolve4all_setup' );

function biosolve4all_enqueue_assets() {
  $uri = get_template_directory_uri();

  // Main compiled CSS from the original repo
  wp_enqueue_style( 'biosolve-main', $uri . '/style/main.css', array(), BIOSOLVE_THEME_VERSION );

  // External libs used by the original HTML
  wp_enqueue_style( 'biosolve-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2' );
  wp_enqueue_style( 'biosolve-flickity', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css', array(), '2.2.2' );

  // Google Fonts (Figtree)
  wp_enqueue_style( 'biosolve-figtree', 'https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap', array(), null );
  wp_enqueue_style( 'biosolve-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), null );

  // JS libs
  wp_enqueue_script( 'biosolve-flickity', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js', array(), '2.2.2', true );
  wp_enqueue_script( 'biosolve-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true );
  wp_enqueue_script( 'biosolve-lottie-web', 'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js', array(), '5.9.6', true );
  wp_enqueue_script( 'biosolve-dotlottie', 'https://unpkg.com/@lottiefiles/dotlottie-wc@0.3.0/dist/dotlottie-wc.js', array(), '0.3.0', true );

  // Local scripts from the original repo
  wp_enqueue_script( 'biosolve-main', $uri . '/script/script.js', array(), BIOSOLVE_THEME_VERSION, true );

  // Brevo forms helper (if you end up embedding those forms)
  if ( file_exists( get_template_directory() . '/script/brevo.js' ) ) {
    wp_enqueue_script( 'biosolve-brevo', $uri . '/script/brevo.js', array(), BIOSOLVE_THEME_VERSION, true );
  }
}
add_action( 'wp_enqueue_scripts', 'biosolve4all_enqueue_assets' );

function biosolve4all_add_news_rewrite() {
  add_rewrite_rule( '^en/noticias/?$', 'index.php?pagename=noticias', 'top' );
}
add_action( 'init', 'biosolve4all_add_news_rewrite' );

function biosolve4all_flush_rewrite_rules() {
  biosolve4all_add_news_rewrite();
  flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'biosolve4all_flush_rewrite_rules' );

function biosolve4all_get_deepl_endpoint() {
  if ( ! defined( 'DEEPL_API_KEY' ) || ! DEEPL_API_KEY ) {
    return null;
  }
  $key = (string) DEEPL_API_KEY;
  $is_free = substr( $key, -3 ) === ':fx';
  return $is_free ? 'https://api-free.deepl.com/v2/translate' : 'https://api.deepl.com/v2/translate';
}

function biosolve4all_translate_text( $text, $target_lang = 'EN-GB', $source_lang = 'PT', $context = '' ) {
  if ( ! $text ) {
    return $text;
  }

  $endpoint = biosolve4all_get_deepl_endpoint();
  if ( ! $endpoint ) {
    return $text;
  }

  $cache_key = 'biosolve_deepl_' . md5( $source_lang . '|' . $target_lang . '|' . $context . '|' . $text );
  $cached = get_transient( $cache_key );
  if ( false !== $cached ) {
    return $cached;
  }

  $response = wp_remote_post(
    $endpoint,
    array(
      'timeout' => 12,
      'body' => array(
        'auth_key' => DEEPL_API_KEY,
        'text' => $text,
        'source_lang' => $source_lang,
        'target_lang' => $target_lang,
        'tag_handling' => 'html',
      ),
    )
  );

  if ( is_wp_error( $response ) ) {
    return $text;
  }

  $body = wp_remote_retrieve_body( $response );
  $data = json_decode( $body, true );
  if ( ! is_array( $data ) || empty( $data['translations'][0]['text'] ) ) {
    return $text;
  }

  $translated = (string) $data['translations'][0]['text'];
  set_transient( $cache_key, $translated, WEEK_IN_SECONDS );

  return $translated;
}

// Keep WP from injecting extra p tags in embeds etc (optional; comment out if you rely on auto formatting)
// remove_filter( 'the_content', 'wpautop' );
