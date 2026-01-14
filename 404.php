<?php
get_header();
?>
<main class="container not-found-page">
  <div class="not-found__animation" id="lottie-404" aria-hidden="true"></div>
  <h1>This page does not exist or it has been moved</h1>
  <p class="not-found__subtitle">Try returning to the homepage or use the menu to find what you need.</p>
  <a class="not-found__button" href="<?php echo esc_url( home_url( '/' ) ); ?>">Go back to homepage</a>
</main>
<?php get_footer(); ?>
