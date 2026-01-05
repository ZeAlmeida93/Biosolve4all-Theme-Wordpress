<?php
get_header();
?>
<main class="container single-post">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class(); ?>>
      <header class="post-hero">
        <div class="post-hero__row">
          <h1 class="post-hero__title"><?php the_title(); ?></h1>
          <p class="post-hero__date"><?php echo esc_html( get_the_date() ); ?></p>
        </div>
        <?php $excerpt = get_the_excerpt(); ?>
        <?php if ( $excerpt ) : ?>
          <p class="post-hero__subtitle"><?php echo esc_html( $excerpt ); ?></p>
        <?php endif; ?>
      </header>

      <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-hero__media">
          <?php the_post_thumbnail( 'large', array( 'class' => 'post-hero__image', 'loading' => 'lazy' ) ); ?>
        </div>
      <?php endif; ?>

      <div class="post-content post-body">
        <?php the_content(); ?>
      </div>

      <footer class="post-footer">
        <?php the_post_navigation(); ?>
      </footer>
    </article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
