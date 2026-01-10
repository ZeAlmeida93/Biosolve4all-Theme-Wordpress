<?php
get_header();

$lang = function_exists( 'biosolve4all_get_lang' ) ? biosolve4all_get_lang() : 'pt';
$is_en = $lang === 'en';
$title = $is_en ? 'News' : 'Noticias';
$subtitle = $is_en ? 'Latest updates from BioSolve4All' : 'Ultimas atualizacoes da BioSolve4All';
$read_more = $is_en ? 'Read more' : 'Ler mais';
$empty_message = $is_en ? 'No posts yet.' : 'Sem publicacoes ainda.';

$query_args = array(
  'post_type' => 'post',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order' => 'DESC',
);

if ( function_exists( 'pll_current_language' ) ) {
  $query_args['lang'] = $lang;
}

$query = new WP_Query( $query_args );
?>
<main class="container news-page">
  <header class="news-header">
    <h1><?php echo esc_html( $title ); ?></h1>
    <p><?php echo esc_html( $subtitle ); ?></p>
  </header>

  <?php if ( $query->have_posts() ) : ?>
    <div class="news-grid">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <?php
          $post_id = get_the_ID();
          $translated_title = $is_en ? get_post_meta( $post_id, 'title_en', true ) : '';
          $translated_excerpt = $is_en ? get_post_meta( $post_id, 'excerpt_en', true ) : '';
          $translated_content = $is_en ? get_post_meta( $post_id, 'content_en', true ) : '';
          $translated_image = $is_en ? get_post_meta( $post_id, 'featured_image_en', true ) : '';
          $post_url = get_permalink( $post_id );
          $post_url = remove_query_arg( 'lang', $post_url );
          if ( $is_en ) {
            $post_url = add_query_arg( 'lang', 'en', $post_url );
          }

          $title_text = $translated_title ? $translated_title : get_the_title();
          $excerpt_text = $translated_excerpt ? $translated_excerpt : get_the_excerpt();
          if ( ! $translated_excerpt && $translated_content ) {
            $excerpt_text = wp_trim_words( wp_strip_all_tags( $translated_content ), 24 );
          }

          if ( $is_en && ! $translated_title ) {
            $title_text = biosolve4all_translate_text( $title_text, 'EN-GB', 'PT', 'news_title_' . $post_id );
          }

          if ( $is_en && ! $translated_excerpt ) {
            $excerpt_text = biosolve4all_translate_text( wp_strip_all_tags( $excerpt_text ), 'EN-GB', 'PT', 'news_excerpt_' . $post_id );
          }
        ?>
        <article <?php post_class( 'news-card' ); ?>>
          <a class="news-card__link" href="<?php echo esc_url( $post_url ); ?>">
            <?php if ( $translated_image ) : ?>
              <?php if ( is_numeric( $translated_image ) ) : ?>
                <?php echo wp_get_attachment_image( (int) $translated_image, 'large', false, array( 'class' => 'news-card__image', 'loading' => 'lazy' ) ); ?>
              <?php else : ?>
                <img class="news-card__image" loading="lazy" src="<?php echo esc_url( $translated_image ); ?>" alt="<?php echo esc_attr( $title_text ); ?>">
              <?php endif; ?>
            <?php elseif ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'large', array( 'class' => 'news-card__image', 'loading' => 'lazy' ) ); ?>
            <?php else : ?>
              <div class="news-card__image news-card__image--placeholder"></div>
            <?php endif; ?>
            <div class="news-card__body">
              <p class="news-card__meta"><?php echo esc_html( biosolve4all_get_localized_date( $post_id ) ); ?></p>
              <h2 class="news-card__title"><?php echo esc_html( $title_text ); ?></h2>
              <p class="news-card__excerpt"><?php echo esc_html( wp_trim_words( $excerpt_text, 24 ) ); ?></p>
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
