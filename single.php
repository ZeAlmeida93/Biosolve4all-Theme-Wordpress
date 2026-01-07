<?php
get_header();
?>
<main class="container single-post">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
      $lang = function_exists( 'biosolve4all_get_lang' ) ? biosolve4all_get_lang() : 'pt';
      $is_en = $lang === 'en';
      $post_id = get_the_ID();
      $translated_title = $is_en ? get_post_meta( $post_id, 'title_en', true ) : '';
      $translated_excerpt = $is_en ? get_post_meta( $post_id, 'excerpt_en', true ) : '';
      $translated_content = $is_en ? get_post_meta( $post_id, 'content_en', true ) : '';
      $translated_image = $is_en ? get_post_meta( $post_id, 'featured_image_en', true ) : '';

      $title_text = $translated_title ? $translated_title : get_the_title();
      $excerpt_text = $translated_excerpt ? $translated_excerpt : get_the_excerpt();
      if ( ! $translated_excerpt && $translated_content ) {
        $excerpt_text = wp_trim_words( wp_strip_all_tags( $translated_content ), 24 );
      }

      if ( $is_en && ! $translated_title ) {
        $title_text = biosolve4all_translate_text( $title_text, 'EN-GB', 'PT', 'post_title_' . $post_id );
      }

      if ( $is_en && ! $translated_excerpt ) {
        $excerpt_text = biosolve4all_translate_text( wp_strip_all_tags( $excerpt_text ), 'EN-GB', 'PT', 'post_excerpt_' . $post_id );
      }

      $content_to_render = apply_filters( 'the_content', get_the_content() );
      if ( $translated_content ) {
        $content_to_render = apply_filters( 'the_content', $translated_content );
      } elseif ( $is_en ) {
        $content_to_render = biosolve4all_translate_text( $content_to_render, 'EN-GB', 'PT', 'post_content_' . $post_id );
      }
    ?>
    <article <?php post_class(); ?>>
      <header class="post-hero">
        <div class="post-hero__row">
          <h1 class="post-hero__title"><?php echo esc_html( $title_text ); ?></h1>
          <p class="post-hero__date"><?php echo esc_html( get_the_date() ); ?></p>
        </div>
        <?php if ( $excerpt_text ) : ?>
          <p class="post-hero__subtitle"><?php echo esc_html( $excerpt_text ); ?></p>
        <?php endif; ?>
      </header>

      <?php if ( $translated_image || has_post_thumbnail() ) : ?>
        <div class="post-hero__media">
          <?php if ( $translated_image ) : ?>
            <?php if ( is_numeric( $translated_image ) ) : ?>
              <?php echo wp_get_attachment_image( (int) $translated_image, 'large', false, array( 'class' => 'post-hero__image', 'loading' => 'lazy' ) ); ?>
            <?php else : ?>
              <img class="post-hero__image" loading="lazy" src="<?php echo esc_url( $translated_image ); ?>" alt="<?php echo esc_attr( $title_text ); ?>">
            <?php endif; ?>
          <?php else : ?>
            <?php the_post_thumbnail( 'large', array( 'class' => 'post-hero__image', 'loading' => 'lazy' ) ); ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <div class="post-content post-body">
        <?php echo wp_kses_post( $content_to_render ); ?>
      </div>

      <footer class="post-footer">
        <?php the_post_navigation(); ?>
      </footer>
    </article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
