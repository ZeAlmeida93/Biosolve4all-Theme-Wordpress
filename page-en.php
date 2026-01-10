<?php
/* English Page Template (page slug: en) */
get_header();
$lang = function_exists( 'biosolve4all_get_lang' ) ? biosolve4all_get_lang() : 'en';
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
<li>Bio-Excellence</li>
<li>Bio-Exclusive</li>
<li>Bio-Efficiency</li>
<li>Bio-Solutions</li>
<li>Bio-Quality</li>
</ul>
</div>
<div class="mobile-navigator">
<ul>
<li class="active">Bio-Lab</li>
<li>Bio-Excellence</li>
<li>Bio-Exclusive</li>
<li>Bio-Efficiency</li>
<li>Bio-Solutions</li>
<li>Bio-Quality</li>
</ul>
</div>
</div></section><section class="container" id="servicos">
<div class="quem-somos">
<h3>Who We Are</h3>
<p>BioSolve4All aims to valorize and transfer scientific knowledge, providing specialized services
                of excellence, with an integrated service from experimental design to analysis and
                technical-scientific follow-up. We deliver R&amp;D services, specialized analyses, and
                laboratory services in biotechnology for different sectors of the manufacturing and
                processing industry.</p>
</div>
<div class="graph">
<script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.11/dist/dotlottie-wc.js" type="module"></script>
<div class="lottie-container" data-lottie-src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/lottie-animations/en.lottie"></div> <!-- Placeholder for animation -->
</div>
</section><section class="container" id="spin-off">
<div class="u-minho">
<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/spinoff_uminho_color.png"/>
<p>BioSolve4All is a spin-off from UMinho, specialized in biotechnology for testing and technical
                analyses for a multisector industry.</p>
</div>
</section><section class="container" id="solutions">
<div class="solutions">
<object data="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vectors/icon-solutions.svg" type="">
</object>
<h3>We Deliver Solutions</h3>
<p>We provide precise answers to technical and biotechnological challenges across multiple sectors. From
                microbiological tests to biocompatibility, alongside consulting and development, each response
                reflects our commitment to excellence and innovation. We transform knowledge into solutions that
                drive progress, always with rigor and attention to detail.</p>
</div>
<div class="card-wrapper">
<div class="desktop-card">
<h1>01.</h1>
<h3>ANTIMICROBIAL TESTS</h3>
</div>
<div class="desktop-card">
<h1>02.</h1>
<h3>BIOCOMPATIBILITY TESTS</h3>
</div>
<div class="desktop-card">
<h1>03.</h1>
<h3>CHEMICAL TESTS</h3>
</div>
<div class="desktop-card">
<h1>04.</h1>
<h3>R&amp;D CONSULTING</h3>
</div>
</div>
<div class="mobile-dropdowns">
<div class="card" id="card-1">
<div class="card-header" onclick="toggleDropdown(1)">
<span class="card-number">01.</span>
<span class="card-title">MICROBIAL TESTS</span>
<span class="card-icon">⌄</span> <!-- Down arrow -->
</div>
<div class="card-content">
<p>ANTIBACTERIAL</p>
<p>ANTIFUNGAL</p>
<p>ANTIVIRAL</p>
</div>
</div>
<div class="card" id="card-2">
<div class="card-header" onclick="toggleDropdown(2)">
<span class="card-number">02.</span>
<span class="card-title">BIOCOMPATIBILITY</span>
<span class="card-icon">⌄</span>
</div>
<div class="card-content">
<p> CYTOTOXICITY </p>
<p> TOXICITY </p>
<p> HEMOCOMPATIBILITY </p>
</div>
</div>
<div class="card" id="card-3">
<div class="card-header" onclick="toggleDropdown(3)">
<span class="card-number">03.</span>
<span class="card-title">BIOCHEMICAL TESTS</span>
<span class="card-icon">⌄</span>
</div>
<div class="card-content">
<p>BIODEGRADABILITY</p>
<p>OXIDATIVE</p>
<p>ODOR</p>
</div>
</div>
<div class="card" id="card-4">
<div class="card-header" onclick="toggleDropdown(4)">
<span class="card-number">04.</span>
<span class="card-title">R&amp;D CONSULTING</span>
<span class="card-icon">⌄</span>
</div>
<div class="card-content">
<p> PRODUCT R&amp;D</p>
<p> PROCESS R&amp;D</p>
<p> TECHNOLOGY R&amp;D </p>
<p> TRAINING</p>
<p> REGULATORY COMPLIANCE</p>
</div>
</div>
</div>
</section><section class="container" id="especialidades">
<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/consultoria_branco.png"/>
<div class="col large-width">
<h3>What Sets Us Apart</h3>
</div>
<div class="col">
<div class="wrapper">
<span class="bullet blue">Multisector technical expertise</span>
<span class="bullet blue">Speed and flexibility</span>
<span class="bullet transparent">Expertise in antimicrobial and biocompatibility solutions</span>
<span class="bullet transparent">Experienced, multidisciplinary team</span>
<span class="bullet blue">Multisector capability with tailored adaptation</span>
<span class="bullet blue">Integrated technical and regulatory consulting</span>
<span class="bullet transparent">Custom service packages</span>
</div>
</div>
</section><section class="container" id="processo">
<video autoplay="" id="processVideo" loop="" muted="" playsinline="" preload="auto">
<source autoplay="" loop="" media="(min-width: 760px)" muted="" playsinline="" preload="auto" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/animation2.mp4" type="video/mp4"/>
<source autoplay="" loop="" media="(max-width: 759px)" muted="" playsinline="" preload="auto" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/animation2.mp4" type="video/mp4"/>
</video>
</section><section class="container" id="equipa">
<h3>The Team</h3>
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
<p>The BioSolve4All team is committed to working collaboratively and using diverse perspectives
                and capabilities to create innovative solutions that make a difference.</p>
</div>
</section><section class="container" id="parceiros">
<h3>Partners &amp; Clients</h3>
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
<p class="quote">"...competent and experienced professionals, whose dedication and capacity for innovation are admirable."</p>
<h3 class="name">Prof. Dr. Cristina Nogueira Silva</h3>
<p class="title">Vice President, School of Medicine, University of Minho</p>
</div>
<div class="carousel-cell">
<p class="quote">"The strategic alliance with BioSolve4All strengthens BH4U's ability to offer advanced and safe medical solutions to its clients."</p>
<h3 class="name">Sónia Ferreira</h3>
<p class="title">Founder &amp; CEO, BestHealth4U</p>
</div>
<div class="carousel-cell">
<p class="quote">"Your availability and knowledge sharing were essential to make this experience valuable for all participants. It was a privilege to get to know your work up close and learn from your experience."</p>
<h3 class="name">Gabriela Barbosa</h3>
<p class="title">GAEB</p>
</div>
</div>
</section><section class="container" id="noticias">
<!--img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/media-background.jpg" alt=""-->
<div class="banner">
<div class="title-structure">
<div id="lottie-news"></div>
<h3>News</h3>
<p>Stay up to date with the latest news</p>
<a href="<?php echo esc_url( $news_url ); ?>">
<button>View News</button></a>
</div>
</div>
</section><section class="container" id="contactos">
<div class="row">
<div class="contact-image">
<img alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/imgs/lens.jpg"/>
</div>
<div class="form-container">
<h2>Contact Us</h2>
<form id="contact-form">
<div class="form-group">
<label for="firstName">First Name *</label>
<input id="firstName" name="firstName" required="" type="text"/>
</div>
<div class="form-group">
<label for="lastName">Last Name *</label>
<input id="lastName" name="lastName" required="" type="text"/>
</div>
<div class="form-group">
<label for="email">Email *</label>
<input id="email" name="email" required="" type="email"/>
</div>
<div class="form-group">
<label for="phone">Phone/Mobile</label>
<input id="phone" name="phone" type="tel"/>
</div>
<div class="form-group">
<label for="message">Message *</label>
<textarea id="message" name="message" required=""></textarea>
</div>
<button type="submit">Contact Us</button>
</form>
<p id="response-message"></p>
</div>
</div>
</section><div class="modal">
<div class="modal-content">
<ul>
<li><a href="#servicos">Who We Are</a></li>
<li><a href="#solutions">Services</a></li>
<li> <a href="#especialidades">Differentiation</a></li>
<li><a href="#processo">Process</a></li>
<li><a href="#equipa">Team</a></li>
<li><a href="#parceiros">Partners &amp; Clients</a></li>
<li><a href="<?php echo esc_url( $news_url ); ?>">News</a></li>
<li><a href="#contactos">Contact</a></li>
<div>
<a id="mobile-newsletter-menu-overlay">Newsletter</a>
</div>
</ul>
</div>
</div>

<?php get_footer(); ?>
