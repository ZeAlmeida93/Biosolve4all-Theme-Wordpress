<?php
/* Front Page Template */
get_header();
$lang = function_exists( 'biosolve4all_get_lang' ) ? biosolve4all_get_lang() : 'pt';
$news_url = $lang === 'en' ? home_url( '/en/noticias/' ) : home_url( '/noticias/' );
?>

<section class="container" id="hero-section">
<div class="banner-container">
<div class="image-slider" id="custom-slider">
<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/hero-section-slide-1.jpg"/>
<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/hero-section-slide-2.jpg"/>
<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/hero-section-slide-3.jpg"/>
<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/hero-section-slide-4.jpg"/>
<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/hero-section-slide-5.jpg"/>
<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/media-background.jpg"/>
</div>
<div class="navigator">
<ul>
<li class="active">Bio-Lab</li>
<li>Bio-Excelência</li>
<li>Bio-Exclusivo</li>
<li>Bio-Eficiência</li>
<li>Bio-Soluções</li>
<li>Bio-Qualidade</li>
</ul>
</div>
<div class="mobile-navigator">
<ul>
<li class="active">Bio-Lab</li>
<li>Bio-Excelência</li>
<li>Bio-Exclusivo</li>
<li>Bio-Eficiência</li>
<li>Bio-Soluções</li>
<li>Bio-Qualidade</li>
</ul>
</div>
</div></section><section class="container" id="servicos">
<div class="quem-somos">
<h3>Quem Somos</h3>
<p>A BioSolve4All visa a valorização e transferência do conhecimento científico, prestando serviços
                especializados e de excelência, com o desenvolvimento de um serviço integrado desde o desenho
                experimental, análise e acompanhamento técnico-científico do desenvolvimento. Prestação de serviços de
                I&amp;D, de análises especializadas e serviços laboratoriais em biotecnologia, para diferentes sectores da
                indústria produtora e transformadora.</p>
</div>
<div class="graph">
<script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.3.0/dist/dotlottie-wc.js" type="module"></script>
<div class="lottie-container"></div> <!-- Placeholder for animation -->
</div>
</section><section class="container" id="spin-off">
<div class="u-minho">
<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/spinoff_uminho_color.png"/>
<p>A BioSolve4All é uma spin-off da UMinho especializada na área de biotecnologia para ensaios e análises
                técnicas para uma indústria multissetorial.</p>
</div>
</section><section class="container" id="solutions">
<div class="solutions">
<object data="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vectors/icon-solutions.svg" type="">
</object>
<h3>Apresentamos Soluções</h3>
<p>Oferecemos respostas precisas para os desafios técnicos e biotecnológicos de múltiplos setores. Dos
                ensaios microbiológicos à biocompatibilidade, passando por consultoria e desenvolvimento, cada resposta
                reflete o nosso compromisso com a excelência e a inovação. Transformamos conhecimento em soluções que
                impulsionam o progresso, sempre com rigor e dedicação ao detalhe.</p>
</div>
<div class="card-wrapper">
<div class="desktop-card">
<h1>01.</h1>
<h3>ENSAIOS ANTIMICROBIANOS</h3>
</div>
<div class="desktop-card">
<h1>02.</h1>
<h3>ENSAIOS BIOCOMPATIBILIDADE</h3>
</div>
<div class="desktop-card">
<h1>03.</h1>
<h3>ENSAIOS QUÍMICOS</h3>
</div>
<div class="desktop-card">
<h1>04.</h1>
<h3>I&amp;D CONSULTADORIA</h3>
</div>
</div>
<div class="mobile-dropdowns">
<div class="card" id="card-1">
<div class="card-header" onclick="toggleDropdown(1)">
<span class="card-number">01.</span>
<span class="card-title">ENSAIOS MICROBIANOS</span>
<span class="card-icon">⌄</span> <!-- Down arrow -->
</div>
<div class="card-content">
<p>ANTIBACTERIANOS</p>
<p>ANTIFÚNGICOS</p>
<p>ANTIVÍRICOS</p>
</div>
</div>
<div class="card" id="card-2">
<div class="card-header" onclick="toggleDropdown(2)">
<span class="card-number">02.</span>
<span class="card-title">BIO COMPATIBILIDADE</span>
<span class="card-icon">⌄</span>
</div>
<div class="card-content">
<p> CITOTOXICIDADE </p>
<p> TOXICIDADE </p>
<p> HEMOCOMPATIBILIDADE </p>
</div>
</div>
<div class="card" id="card-3">
<div class="card-header" onclick="toggleDropdown(3)">
<span class="card-number">03.</span>
<span class="card-title">ENSAIOS BIOQUÍMICOS</span>
<span class="card-icon">⌄</span>
</div>
<div class="card-content">
<p>BIODEGRADABILIDADE</p>
<p>OXIDATIVOS</p>
<p>ODOR</p>
</div>
</div>
<div class="card" id="card-4">
<div class="card-header" onclick="toggleDropdown(4)">
<span class="card-number">04.</span>
<span class="card-title">I&amp;D CONSULTADORIA</span>
<span class="card-icon">⌄</span>
</div>
<div class="card-content">
<p> I&amp;D DE PRODUTOS</p>
<p>  I&amp;D DE PROCESSOS</p>
<p> I&amp;D DE TECNOLOGIAS </p>
<p> FORMAÇÃO</p>
<p> CONFORMIDADE REGULAMENTAR</p>
</div>
</div>
</div>
</section><section class="container" id="especialidades">
<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/consultoria_branco.png"/>
<div class="col large-width">
<h3>O que nos distingue</h3>
</div>
<div class="col">
<div class="wrapper">
<span class="bullet blue">Especialização técnica multissetorial</span>
<span class="bullet blue">Rapidez e flexibilidade</span>
<span class="bullet transparent">Especialização em soluções antimicrobianas e de
                  biocompatibilidade</span>
<span class="bullet transparent">Equipa experiente e multidisciplinar</span>
<span class="bullet blue">Multissectorialidade com adaptação personalizada</span>
<span class="bullet blue">Consultoria técnica e regulamentar integrada</span>
<span class="bullet transparent">Oferta de pacotes de serviços customizados</span>
</div>
</div>
</section><section class="container" id="processo">
<video autoplay="" id="processVideo" loop="" muted="" playsinline="" preload="auto">
<source autoplay="" loop="" media="(min-width: 760px)" muted="" playsinline="" preload="auto" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/animation2.mp4" type="video/mp4"/>
<source autoplay="" loop="" media="(max-width: 759px)" muted="" playsinline="" preload="auto" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/animation2.mp4" type="video/mp4"/>
</video>
</section><section class="container" id="equipa">
<h3>A Equipa</h3>
<div class="team">
<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/biosolve-team_new.jpg"/>
<a class="mobile-linkedin" data="" href="https://www.linkedin.com/in/isabel-carvalho-7579802b4" id="isabel-carvalho" type="">
<svg fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
<rect fill="white" height="20" rx="3" width="20"></rect>
<path clip-rule="evenodd" d="M17 19H3C1.89543 19 1 18.1046 1 17V3C1 1.89543 1.89543 1 3 1H17C18.1046 1 19 1.89543 19 3V17C19 18.1046 18.1046 19 17 19ZM13.9762 16.75H16.75V11.0518C16.75 8.64078 15.3833 7.47504 13.4743 7.47504C11.5645 7.47504 10.7607 8.9623 10.7607 8.9623V7.75H8.0875V16.75H10.7607V12.0255C10.7607 10.7597 11.3434 10.0064 12.4587 10.0064C13.484 10.0064 13.9762 10.7302 13.9762 12.0255V16.75ZM3.25 4.91076C3.25 5.82789 3.98784 6.57152 4.89839 6.57152C5.80894 6.57152 6.54634 5.82789 6.54634 4.91076C6.54634 3.99363 5.80894 3.25 4.89839 3.25C3.98784 3.25 3.25 3.99363 3.25 4.91076ZM6.30552 16.75H3.51807V7.75H6.30552V16.75Z" fill="#5FB8A9" fill-rule="evenodd"></path>
</svg>
</a>
<a class="mobile-linkedin" data="" href="https://www.linkedin.com/in/elisa-rodrigues-781532b/" id="elisa-rodrigues" type="">
<svg fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
<rect fill="white" height="20" rx="3" width="20"></rect>
<path clip-rule="evenodd" d="M17 19H3C1.89543 19 1 18.1046 1 17V3C1 1.89543 1.89543 1 3 1H17C18.1046 1 19 1.89543 19 3V17C19 18.1046 18.1046 19 17 19ZM13.9762 16.75H16.75V11.0518C16.75 8.64078 15.3833 7.47504 13.4743 7.47504C11.5645 7.47504 10.7607 8.9623 10.7607 8.9623V7.75H8.0875V16.75H10.7607V12.0255C10.7607 10.7597 11.3434 10.0064 12.4587 10.0064C13.484 10.0064 13.9762 10.7302 13.9762 12.0255V16.75ZM3.25 4.91076C3.25 5.82789 3.98784 6.57152 4.89839 6.57152C5.80894 6.57152 6.54634 5.82789 6.54634 4.91076C6.54634 3.99363 5.80894 3.25 4.89839 3.25C3.98784 3.25 3.25 3.99363 3.25 4.91076ZM6.30552 16.75H3.51807V7.75H6.30552V16.75Z" fill="#5FB8A9" fill-rule="evenodd"></path>
</svg>
</a>
<a class="mobile-linkedin" data="" href="https://www.linkedin.com/in/mariana-henriques-335b39236/" id="mariana-henriques" type="">
<svg fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
<rect fill="white" height="20" rx="3" width="20"></rect>
<path clip-rule="evenodd" d="M17 19H3C1.89543 19 1 18.1046 1 17V3C1 1.89543 1.89543 1 3 1H17C18.1046 1 19 1.89543 19 3V17C19 18.1046 18.1046 19 17 19ZM13.9762 16.75H16.75V11.0518C16.75 8.64078 15.3833 7.47504 13.4743 7.47504C11.5645 7.47504 10.7607 8.9623 10.7607 8.9623V7.75H8.0875V16.75H10.7607V12.0255C10.7607 10.7597 11.3434 10.0064 12.4587 10.0064C13.484 10.0064 13.9762 10.7302 13.9762 12.0255V16.75ZM3.25 4.91076C3.25 5.82789 3.98784 6.57152 4.89839 6.57152C5.80894 6.57152 6.54634 5.82789 6.54634 4.91076C6.54634 3.99363 5.80894 3.25 4.89839 3.25C3.98784 3.25 3.25 3.99363 3.25 4.91076ZM6.30552 16.75H3.51807V7.75H6.30552V16.75Z" fill="#5FB8A9" fill-rule="evenodd"></path>
</svg>
</a>
<!--a id="pedro-gomes" href='https://www.linkedin.com/in/pedro-gomes-434523240/' class="mobile-linkedin" data="" type="">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="20" height="20" rx="3" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17 19H3C1.89543 19 1 18.1046 1 17V3C1 1.89543 1.89543 1 3 1H17C18.1046 1 19 1.89543 19 3V17C19 18.1046 18.1046 19 17 19ZM13.9762 16.75H16.75V11.0518C16.75 8.64078 15.3833 7.47504 13.4743 7.47504C11.5645 7.47504 10.7607 8.9623 10.7607 8.9623V7.75H8.0875V16.75H10.7607V12.0255C10.7607 10.7597 11.3434 10.0064 12.4587 10.0064C13.484 10.0064 13.9762 10.7302 13.9762 12.0255V16.75ZM3.25 4.91076C3.25 5.82789 3.98784 6.57152 4.89839 6.57152C5.80894 6.57152 6.54634 5.82789 6.54634 4.91076C6.54634 3.99363 5.80894 3.25 4.89839 3.25C3.98784 3.25 3.25 3.99363 3.25 4.91076ZM6.30552 16.75H3.51807V7.75H6.30552V16.75Z" fill="#5FB8A9"/>
                    </svg>

            </a-->
<a class="mobile-linkedin" data="" href="https://www.linkedin.com/in/juliana-cruz-23737a4a/" id="juliana-cruz" type="">
<svg fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
<rect fill="white" height="20" rx="3" width="20"></rect>
<path clip-rule="evenodd" d="M17 19H3C1.89543 19 1 18.1046 1 17V3C1 1.89543 1.89543 1 3 1H17C18.1046 1 19 1.89543 19 3V17C19 18.1046 18.1046 19 17 19ZM13.9762 16.75H16.75V11.0518C16.75 8.64078 15.3833 7.47504 13.4743 7.47504C11.5645 7.47504 10.7607 8.9623 10.7607 8.9623V7.75H8.0875V16.75H10.7607V12.0255C10.7607 10.7597 11.3434 10.0064 12.4587 10.0064C13.484 10.0064 13.9762 10.7302 13.9762 12.0255V16.75ZM3.25 4.91076C3.25 5.82789 3.98784 6.57152 4.89839 6.57152C5.80894 6.57152 6.54634 5.82789 6.54634 4.91076C6.54634 3.99363 5.80894 3.25 4.89839 3.25C3.98784 3.25 3.25 3.99363 3.25 4.91076ZM6.30552 16.75H3.51807V7.75H6.30552V16.75Z" fill="#5FB8A9" fill-rule="evenodd"></path>
</svg>
</a>
<button class="ballpoint" data-name="Isabel Carvalho" onclick="location.href='https://www.linkedin.com/in/isabel-carvalho-7579802b4'">
<span class="circle"></span>
<span class="label">
                    Isabel Carvalho <span class="linkedin-icon">in</span>
</span>
</button>
<button class="ballpoint" data-name="Elisa Rodrigues" onclick="location.href='https://www.linkedin.com/in/elisa-rodrigues-781532b/'">
<span class="circle"></span>
<span class="label"> Elisa Rodrigues
                    <span class="linkedin-icon">in</span>
</span>
</button>
<button class="ballpoint" data-name="Mariana Henriques" onclick="location.href='https://www.linkedin.com/in/mariana-henriques-335b39236/'">
<span class="circle"></span>
<span class="label">
                    Mariana Henriques<span class="linkedin-icon">in</span>
</span>
</button>
<!--button onclick="location.href='https://www.linkedin.com/in/pedro-gomes-434523240/'" class="ballpoint" data-name="Pedro Gomes">
                <span class="circle"></span>
                <span class="label">
                    Pedro Gomes<span class="linkedin-icon">in</span>
                </span>
            </button-->
<button class="ballpoint" data-name="Juliana Cruz" onclick="location.href='https://www.linkedin.com/in/juliana-cruz-23737a4a/'">
<span class="circle"></span>
<span class="label">
                    Juliana Cruz<span class="linkedin-icon">in</span>
</span>
</button>
</div>
<div class="team-footer">
<p>A equipa BioSolve4All está empenhada em trabalhar de forma colaborativa e usar suas diversas perspectivas
                e capacidades para criar soluções inovadoras que fazem a diferença.</p>
</div>
</section><section class="container" id="parceiros">
<h3>Parceiros &amp; Clientes</h3>
<div class="partners-row">
<img alt="" onclick="location.href='https://nitextile.pt'" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/NIT.png"/>
<img alt="" onclick="location.href='https://www.tecminho.uminho.pt/'" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/TECMINHO.png"/>
<img alt="" onclick="location.href='https://besthealth4u.pt/'" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/BH4U.png"/>
<img alt="" onclick="location.href='https://www.uminho.pt/'" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/UM.png"/>
<img alt="" onclick="location.href='https://gaeb.pt/'" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/GAEB.png"/>
<img alt="" onclick="location.href='https://www.healthportugal.com/en/'" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/HCP_partner.png"/>
</div>
<div class="carousel">
<div class="carousel-cell">
<p class="quote">"..profissionais competentes e experientes, cuja dedicação e capacidade de inovação são
                    respeitáveis."</p>
<h3 class="name">Profª Drª Cristina Nogueira Silva</h3>
<p class="title">Vice Presidente da Escola de Medicina da Universidade do Minho</p>
</div>
<div class="carousel-cell">
<p class="quote">"A aliança estratégica com a BioSolve4All fortalece a capacidade da BH4U oferecer
                    soluções médicas avançadas e seguras aos seus clientes."</p>
<h3 class="name">Sónia Ferreira</h3>
<p class="title">Founder &amp; CEO da BestHealth4U</p>
</div>
<div class="carousel-cell">
<p class="quote">"A vossa disponibilidade e partilha de conhecimento foram essenciais para tornar esta experiência valiosa para todos os participantes. Foi um privilégio conhecer de perto o vosso trabalho e aprender com a vossa experiência."</p>
<h3 class="name">Gabriela Barbosa</h3>
<p class="title">GAEB</p>
</div>
</div>
</section><section class="container" id="noticias">
<!--img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/media-background.jpg" alt=""-->
<div class="banner">
<div class="title-structure">
<div id="lottie-news"></div>
<h3>Notícias</h3>
<p>Esteja a par das últimas novidades</p>
<a href="<?php echo esc_url( $news_url ); ?>">
<button>Ver Notícias</button></a>
</div>
</div>
</section><section class="container" id="contactos">
<div class="row">
<div class="contact-image">
<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/lens.jpg"/>
</div>
<div class="form-container">
<h2>Contacte-nos</h2>
<form id="contact-form">
<div class="form-group">
<label for="firstName">Nome *</label>
<input id="firstName" name="firstName" required="" type="text"/>
</div>
<div class="form-group">
<label for="lastName">Apelido *</label>
<input id="lastName" name="lastName" required="" type="text"/>
</div>
<div class="form-group">
<label for="email">Email *</label>
<input id="email" name="email" required="" type="email"/>
</div>
<div class="form-group">
<label for="phone">Telefone/Telemóvel</label>
<input id="phone" name="phone" type="tel"/>
</div>
<div class="form-group">
<label for="message">Mensagem *</label>
<textarea id="message" name="message" required=""></textarea>
</div>
<button type="submit">Contacte-nos</button>
</form>
<p id="response-message"></p>
</div>
</div>
</section><div class="modal">
<div class="modal-content">
<ul>
<li><a href="#servicos">Quem Somos</a></li>
<li><a href="#solutions">Serviços</a></li>
<li> <a href="#especialidades">Diferenciação</a></li>
<li><a href="#processo">Processo</a></li>
<li><a href="#equipa">Equipa</a></li>
<li><a href="#parceiros">Parceiros &amp; Clientes</a></li>
<li><a href="<?php echo esc_url( $news_url ); ?>">Notícias</a></li>
<li><a href="#contactos">Contactos</a></li>
<div>
<a id="mobile-newsletter-menu-overlay">Newsletter</a>
</div>
</ul>
</div>
</div>

<?php get_footer(); ?>
