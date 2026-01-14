<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="yes" name="mobile-web-app-capable"/>
    <meta content="yes" name="apple-mobile-web-app-capable"/>
        <script>
          (function () {
            try {
              if (window.localStorage && localStorage.getItem("biosolveLoaderSeen")) {
                document.documentElement.classList.add("loader-seen");
              }
            } catch (e) {}
          })();
        </script>
        <script>
          (function () {
            var path = window.location.pathname || "/";
            var hasQueryLang = /(?:[?&]lang=)(en|pt)(?:&|$)/.test(window.location.search);
            var isEnPath = /^\/en(\/|$)/.test(path);
            if (hasQueryLang || isEnPath) {
              return;
            }

            var timeZone = "";
            try {
              timeZone = Intl.DateTimeFormat().resolvedOptions().timeZone || "";
            } catch (e) {
              timeZone = "";
            }
            var language = (navigator.language || "").toLowerCase();
            var isPortugal = timeZone === "Europe/Lisbon" || language.indexOf("pt") === 0;

            if (!isPortugal) {
              var nextPath = path === "/" ? "/en/" : "/en" + path;
              var nextUrl = nextPath + window.location.search + window.location.hash;
              window.location.replace(nextUrl);
            }
          })();
        </script>
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/favicon.png" rel="icon" type="image/png"/>
        <link href="https://fonts.googleapis.com" rel="preconnect"/>
        <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script>
          window.BIOSOLVE_THEME_URI = "<?php echo esc_js( get_template_directory_uri() ); ?>";
        </script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-theme-uri="<?php echo esc_url( get_template_directory_uri() ); ?>">
<?php wp_body_open(); ?>
<div class="site-loader" id="site-loader" aria-live="polite" aria-busy="true">
  <div class="site-loader__inner">
    <div class="site-loader__lottie" id="site-loader-lottie" aria-hidden="true"></div>
    <span class="site-loader__text">Loading</span>
  </div>
</div>

<header>
<nav class="container" id="navbar">
<?php
  $lang = function_exists( 'biosolve4all_get_lang' ) ? biosolve4all_get_lang() : 'pt';
  $front_page_id = get_option( 'page_on_front' );
  $front_page_url = $front_page_id ? get_permalink( $front_page_id ) : home_url( '/' );
  $switcher_urls = function_exists( 'biosolve4all_get_language_switcher_urls' )
    ? biosolve4all_get_language_switcher_urls()
    : array( 'pt' => $front_page_url, 'en' => home_url( '/en/' ) );
  $lang_pt_url = $switcher_urls['pt'];
  $lang_en_url = $switcher_urls['en'];
  $news_url = $lang === 'en' ? home_url( '/en/noticias/' ) : home_url( '/noticias/' );
  $home_anchor_base = $lang === 'en' ? home_url( '/en/' ) : $front_page_url;
  $nav_items = $lang === 'en'
    ? array(
      array( 'label' => 'Who We Are', 'anchor' => 'servicos' ),
      array( 'label' => 'Services', 'anchor' => 'solutions' ),
      array( 'label' => 'Differentiation', 'anchor' => 'especialidades' ),
      array( 'label' => 'Process', 'anchor' => 'processo' ),
      array( 'label' => 'Team', 'anchor' => 'equipa' ),
      array( 'label' => 'Partners & Clients', 'anchor' => 'parceiros' ),
      array( 'label' => 'News', 'anchor' => 'noticias', 'url' => $news_url ),
      array( 'label' => 'Contact', 'anchor' => 'contactos', 'button' => true ),
    )
    : array(
      array( 'label' => 'Quem Somos', 'anchor' => 'servicos' ),
      array( 'label' => 'Serviços', 'anchor' => 'solutions' ),
      array( 'label' => 'Diferenciação', 'anchor' => 'especialidades' ),
      array( 'label' => 'Processo', 'anchor' => 'processo' ),
      array( 'label' => 'Equipa', 'anchor' => 'equipa' ),
      array( 'label' => 'Parceiros e Clientes', 'anchor' => 'parceiros' ),
      array( 'label' => 'Notícias', 'anchor' => 'noticias', 'url' => $news_url ),
      array( 'label' => 'Contactos', 'anchor' => 'contactos', 'button' => true ),
    );
?>
<object data="" type=""><a href="<?php echo esc_url( home_url( $base_path . '#hero-section' ) ); ?>"><svg fill="none" height="59" viewbox="0 0 46 59" width="46" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_676_1383)">
<path d="M0 41.3595C0 44.6217 1.28847 47.5749 3.37175 49.715C5.45503 51.8526 8.33312 53.1747 11.5148 53.1747V29.5418C5.15636 29.5418 0 34.8327 0 41.3595Z" fill="#5FB8A9"></path>
<path d="M11.5173 11.8177C11.5173 8.55304 10.2288 5.59987 8.14306 3.46224C6.05978 1.32209 3.18169 0 0 0V11.8177C0 18.342 5.15636 23.6355 11.5173 23.6355V11.8177Z" fill="#5FB8A9"></path>
<path d="M28.751 0.0303955C22.3999 0.0303955 17.251 5.31368 17.251 11.8304V23.6304H28.751C35.102 23.6304 40.251 18.3471 40.251 11.8304C40.251 5.31368 35.102 0.0303955 28.751 0.0303955Z" fill="#5FB8A9"></path>
<path d="M31.6246 29.4987H17.249V44.2494C17.249 52.3946 23.684 59 31.6246 59C39.5628 59 46.0003 52.3972 46.0003 44.2494C46.0003 36.1041 39.5653 29.4987 31.6246 29.4987Z" fill="#5FB8A9"></path>
</g>
<defs>
<clippath id="clip0_676_1383">
<rect fill="white" height="59" width="46"></rect>
</clippath>
</defs>
</svg>
</a></object>
<ul>
<?php foreach ( $nav_items as $nav_item ) : ?>
  <li<?php echo ! empty( $nav_item['button'] ) ? ' class="btn"' : ''; ?>>
    <?php
      $nav_url = isset( $nav_item['url'] )
        ? $nav_item['url']
        : trailingslashit( $home_anchor_base ) . '#' . $nav_item['anchor'];
    ?>
    <a href="<?php echo esc_url( $nav_url ); ?>">
      <?php echo esc_html( $nav_item['label'] ); ?>
    </a>
  </li>
<?php endforeach; ?>
</ul>
<div aria-label="Language selector" class="language-switcher" data-language-switcher data-lang-url-en="<?php echo esc_url( $lang_en_url ); ?>" data-lang-url-pt="<?php echo esc_url( $lang_pt_url ); ?>">
<a aria-label="Português" class="lang-option" data-lang="pt" href="<?php echo esc_url( $lang_pt_url ); ?>">PT</a>
<span aria-hidden="true">|</span>
<a aria-label="English" class="lang-option" data-lang="en" href="<?php echo esc_url( $lang_en_url ); ?>">EN</a>
</div>
<div class="mobile-menu">
<input class="checkbox" id="" name="" type="checkbox"/>
<div class="hamburger-lines">
<span class="line line1"></span>
<span class="line line2"></span>
<span class="line line3"></span>
</div>
</div>
</nav>
<div class="modal">
  <div class="modal-content">
    <ul>
      <?php foreach ( $nav_items as $nav_item ) : ?>
        <?php
          $nav_url = isset( $nav_item['url'] )
            ? $nav_item['url']
            : trailingslashit( $home_anchor_base ) . '#' . $nav_item['anchor'];
        ?>
        <li><a href="<?php echo esc_url( $nav_url ); ?>"><?php echo esc_html( $nav_item['label'] ); ?></a></li>
      <?php endforeach; ?>
      <div>
        <a id="mobile-newsletter-menu-overlay">Newsletter</a>
      </div>
    </ul>
  </div>
</div>
<!--div class="mobile-menu-container">
            <ul class="nav-links">
              <li><a href="<?php echo esc_url( home_url('/#servicos') ); ?>">Quem Somos</a></li>
              <li><a href="<?php echo esc_url( home_url('/#especialidades') ); ?>">Serviços</a></li>
              <li><a href="<?php echo esc_url( home_url('/#processo') ); ?>">Processo</a></li>
              <li><a href="<?php echo esc_url( home_url('/#equipa') ); ?>">Equipa</a></li>
              <li><a href="<?php echo esc_url( home_url('/#parceiros') ); ?>">Parceiros e Clientes</a></li>
              <li><a href="#noticias">Notícias</a></li>
              <li><a href="<?php echo esc_url( home_url('/#contactos') ); ?>">Contactos</a></li>


            </ul>
          </div-->
</header>
