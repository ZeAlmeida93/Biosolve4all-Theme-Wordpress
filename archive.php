<?php
get_header();
?>
<main class="container" style="padding-top: 120px; padding-bottom: 80px;">
  <header style="margin-bottom: 32px;">
    <h1><?php the_archive_title(); ?></h1>
    <?php the_archive_description('<div style="opacity:.75;">','</div>'); ?>
  </header>

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class(); ?> style="margin-bottom: 28px;">
        <h2 style="margin-bottom: 6px;">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <p style="opacity:.75; margin-bottom: 10px;"><?php echo esc_html( get_the_date() ); ?></p>
        <div><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; ?>
    <nav class="pagination" style="margin-top: 40px;">
      <?php the_posts_pagination(); ?>
    </nav>
  <?php else: ?>
    <p>Sem conteúdos para mostrar.</p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
