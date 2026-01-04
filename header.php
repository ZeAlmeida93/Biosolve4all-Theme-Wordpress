<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="yes" name="mobile-web-app-capable"/>
        <meta content="yes" name="apple-mobile-web-app-capable"/>
        <meta content="Biosolve4All oferece serviços especializados em testes microbiológicos, bioquímicos, biocompatibilidade, consultoria e investigação &amp; desenvolvimento para indústrias multissetoriais." name="description"/>
        <meta content="biotecnologia, testes microbiológicos, testes bioquímicos, biocompatibilidade, consultoria biotecnologia, análise técnica" name="keywords"/>
        <meta content="BioSolve4All - Soluções Especializadas em Biotecnologia" property="og:title"/>
        <meta content="Parceiro especializado em análises técnicas e consultoria em microbiologia, bioquímica e biocompatibilidade para diversos setores industriais." property="og:description"/>
        <meta content="website" property="og:type"/>
        <meta content="https://biosolve4all.com" property="og:url"/>
        <meta content="https://biosolve4all.com/img/og-biosolve.jpg" property="og:image"/>
        <meta content="summary_large_image" name="twitter:card"/>
        <meta content="BioSolve4All - Soluções Especializadas em Biotecnologia" name="twitter:title"/>
        <meta content="Especialistas em testes microbiológicos, bioquímicos, consultoria e desenvolvimento técnico em biotecnologia." name="twitter:description"/>
        <meta content="https://biosolve4all.com/img/twitter-biosolve.jpg" name="twitter:image"/>
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/favicon.png" rel="icon" type="image/png"/>
        <link href="https://fonts.googleapis.com" rel="preconnect"/>
        <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
<nav class="container" id="navbar">
<object data="" type=""><a href="<?php echo esc_url( home_url('/#hero-section') ); ?>"><svg fill="none" height="59" viewbox="0 0 46 59" width="46" xmlns="http://www.w3.org/2000/svg">
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
<li> <a href="https://biosolve4all.com/home#servicos">Quem Somos</a></li>
<li> <a href="https://biosolve4all.com/home#solutions">Serviços</a></li>
<li> <a href="https://biosolve4all.com/home#especialidades">Diferenciação</a></li>
<li> <a href="https://biosolve4all.com/home#processo">Processo</a></li>
<li><a href="https://biosolve4all.com/home#equipa">Equipa</a></li>
<li><a href="https://biosolve4all.com/home#parceiros">Parceiros e Clientes</a></li>
<li><a href="https://biosolve4all.com/home#noticias">Notícias</a></li>
<li class="btn"><a href="https://biosolve4all.com/home#contactos">Contactos</a></li>
</ul>
<div class="mobile-menu">
<input class="checkbox" id="" name="" type="checkbox"/>
<div class="hamburger-lines">
<span class="line line1"></span>
<span class="line line2"></span>
<span class="line line3"></span>
</div>
</div>
</nav>
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
