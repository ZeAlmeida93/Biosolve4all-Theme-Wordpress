<?php
get_header();
?>
<main class="container" style="padding-top: 120px; padding-bottom: 80px;">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class(); ?>>
      <header style="margin-bottom: 18px;">
        <h1><?php the_title(); ?></h1>
        <p style="opacity:.75;"><?php echo esc_html( get_the_date() ); ?></p>
      </header>

      <?php if ( has_post_thumbnail() ) : ?>
        <div style="margin: 24px 0;">
          <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif; ?>

      <div class="post-content">
        <?php the_content(); ?>
      </div>

      <footer style="margin-top: 40px;">
        <?php the_post_navigation(); ?>
      </footer>
    </article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
