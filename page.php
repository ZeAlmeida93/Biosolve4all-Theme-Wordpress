<?php
get_header();
?>
<main class="container" style="padding-top: 120px; padding-bottom: 80px;">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
  endif;
  ?>
</main>
<?php get_footer(); ?>
