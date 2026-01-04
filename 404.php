<?php
get_header();
?>
<main class="container" style="padding-top: 120px; padding-bottom: 80px;">
  <h1>Página não encontrada</h1>
  <p>Ou foi apagada, ou nunca existiu. Humanos e URLs têm muito em comum.</p>
  <p><a href="<?php echo esc_url( home_url('/') ); ?>">Voltar à homepage</a></p>
</main>
<?php get_footer(); ?>
