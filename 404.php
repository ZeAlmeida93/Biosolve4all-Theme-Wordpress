<?php
get_header();
$lang = function_exists( 'biosolve4all_get_lang' ) ? biosolve4all_get_lang() : 'pt';
$is_en = $lang === 'en';
$title = $is_en
  ? 'This page does not exist or it has been moved'
  : 'Esta página não existe ou foi movida';
$subtitle = $is_en
  ? 'Try returning to the homepage or use the menu to find what you need.'
  : 'Volte à página inicial ou use o menu para encontrar o que procura.';
$button_label = $is_en ? 'Go back to homepage' : 'Voltar à homepage';
$home_url = $is_en ? home_url( '/en/' ) : home_url( '/' );
?>
<main class="container not-found-page">
  <div class="not-found__animation" id="lottie-404" aria-hidden="true"></div>
  <h1><?php echo esc_html( $title ); ?></h1>
  <p class="not-found__subtitle"><?php echo esc_html( $subtitle ); ?></p>
  <a class="not-found__button" href="<?php echo esc_url( $home_url ); ?>"><?php echo esc_html( $button_label ); ?></a>
</main>
<?php get_footer(); ?>
