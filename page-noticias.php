<?php
get_header();

$lang = function_exists( 'biosolve4all_get_lang' ) ? biosolve4all_get_lang() : 'pt';
$is_en = $lang === 'en';
$title = $is_en ? 'News' : 'Noticias';
$subtitle = $is_en ? 'Latest updates from BioSolve4All' : 'Ultimas atualizacoes da BioSolve4All';
$read_more = $is_en ? 'Read more' : 'Ler mais';
$empty_message = $is_en ? 'No posts yet.' : 'Sem publicacoes ainda.';

$query = new WP_Query(
  array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
  )
);
?>
<main class="container news-page">
  <header class="news-header">
    <h1><?php echo esc_html( $title ); ?></h1>
    <p><?php echo esc_html( $subtitle ); ?></p>
  </header>

  <?php if ( $query->have_posts() ) : ?>
    <div class="news-grid">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <article <?php post_class( 'news-card' ); ?>>
          <a class="news-card__link" href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'large', array( 'class' => 'news-card__image', 'loading' => 'lazy' ) ); ?>
            <?php else : ?>
              <div class="news-card__image news-card__image--placeholder"></div>
            <?php endif; ?>
            <div class="news-card__body">
              <p class="news-card__meta"><?php echo esc_html( get_the_date() ); ?></p>
              <h2 class="news-card__title"><?php the_title(); ?></h2>
              <p class="news-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
              <span class="news-card__cta"><?php echo esc_html( $read_more ); ?></span>
            </div>
          </a>
        </article>
      <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
  <?php else : ?>
    <p><?php echo esc_html( $empty_message ); ?></p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
