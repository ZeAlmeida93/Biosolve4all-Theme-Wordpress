<?php
/* English Page Template (page slug: en) */
get_header();
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
<a href="https://biosolve4all.com/noticias/">
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
<li><a href="https://biosolve4all.com/noticias/">News</a></li>
<li><a href="#contactos">Contact</a></li>
<div>
<a id="mobile-newsletter-menu-overlay">Newsletter</a>
</div>
</ul>
</div>
</div><div id="newsletter-pop-up">
<!-- Begin Brevo Form -->
<!-- START - We recommend to place the below code in head tag of your website html  -->
<style>
    @font-face {
      font-display: block;
      font-family: Figtree;
      src: url(https://assets.brevo.com/font/Roboto/Latin/normal/normal/7529907e9eaf8ebb5220c5f9850e3811.woff2) format("woff2"), url(https://assets.brevo.com/font/Roboto/Latin/normal/normal/25c678feafdc175a70922a116c9be3e7.woff) format("woff")
    }

    @font-face {
      font-display: fallback;
      font-family: Figtree;
      font-weight: 600;
      src: url(https://assets.brevo.com/font/Roboto/Latin/medium/normal/6e9caeeafb1f3491be3e32744bc30440.woff2) format("woff2"), url(https://assets.brevo.com/font/Roboto/Latin/medium/normal/71501f0d8d5aa95960f6475d5487d4c2.woff) format("woff")
    }

    @font-face {
      font-display: fallback;
      font-family: Figtree;
      font-weight: 700;
      src: url(https://assets.brevo.com/font/Roboto/Latin/bold/normal/3ef7cf158f310cf752d5ad08cd0e7e60.woff2) format("woff2"), url(https://assets.brevo.com/font/Roboto/Latin/bold/normal/ece3a1d82f18b60bcce0211725c476aa.woff) format("woff")
    }

    #sib-container input:-ms-input-placeholder {
      text-align: left;
      font-family: Figtree, sans-serif;
      color: #9bb2bd;
    }

    #sib-container input::placeholder {
      text-align: left;
      font-family: Figtree, sans-serif;
      color: #9bb2bd;
    }

    #sib-container textarea::placeholder {
      text-align: left;
      font-family: Figtree, sans-serif;
      color: #9bb2bd;
    }

    #sib-container a {
      text-decoration: underline;
      color: #2BB2FC;
    }
  </style>
<link href="https://sibforms.com/forms/end-form/build/sib-styles.css" rel="stylesheet"/>
<!--  END - We recommend to place the above code in head tag of your website html -->
<!-- START - We recommend to place the below code where you want the form in your website html  -->
<div class="sib-form" style="text-align: center;
           background-color: transparent;                                 ">
<div class="sib-form-container" id="sib-form-container">
<div class="sib-form-message-panel" id="error-message" style="font-size:16px; text-align:left; font-family:Figtree, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;max-width:540px;">
<div class="sib-form-message-panel__text sib-form-message-panel__text--center">
<svg class="sib-icon sib-notification__icon" viewbox="0 0 512 512">
<path d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z"></path>
</svg>
<span class="sib-form-message-panel__inner-text">
                            Your subscription could not be validated.
                        </span>
</div>
</div>
<div></div>
<div class="sib-form-message-panel" id="success-message" style="font-size:16px; text-align:left; font-family:Figtree, sans-serif; color:#085229; background-color:#e7faf0; border-radius:3px; border-color:#13ce66;max-width:540px;">
<div class="sib-form-message-panel__text sib-form-message-panel__text--center">
<svg class="sib-icon sib-notification__icon" viewbox="0 0 512 512">
<path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z"></path>
</svg>
<span class="sib-form-message-panel__inner-text">
                            You have subscribed successfully.
                        </span>
</div>
</div>
<div></div>
<div class="sib-container--large sib-container--vertical" id="sib-container" style="text-align:center; background-color:rgba(255,255,255,1); max-width:540px; border-radius:24px; border-width:1px; border-color:#C0CCD9; border-style:solid; direction:ltr">
<form action="https://ec3bef76.sibforms.com/serve/MUIFAC-44qAlxzASbiA_fGejm7QyzA0cNzYNstzvkHj7FEFowq9XYICgmTeeLnUgWR-3cCbsovAZUiwm9iM5OwDSr1YJ172YN90f51NA39KXqeESyo1YctB1RA2-qVXPjPMUAs_G-aXObYmetoYqc6WGM0RR4mfuff1exbPeddpUWC3rNuko1otaQ7TKdDH7F6BGkMPOd_10bBrf" data-type="subscription" id="sib-form" method="POST">
<div style="padding: 8px 0;">
<div class="sib-form-block" style="font-size:32px; text-align:left; font-weight:700; font-family:Figtree, sans-serif; color:#33617a; background-color:transparent; text-align:left">
<p>Newsletter</p>
</div>
</div>
<div style="padding: 8px 0;">
<div class="sib-form-block" style="font-size:16px; text-align:left; font-family:Figtree, sans-serif; color:#33617a; background-color:transparent; text-align:left">
<div class="sib-text-form-block">
<p>Subscribe to our newsletter and stay up to date.</p>
</div>
</div>
</div>
<div style="padding: 8px 0;">
<div class="sib-input sib-form-block">
<div class="form__entry entry_block">
<div class="form__label-row">
<label class="entry__label" data-required="*" for="EMAIL" style="font-weight: 700; text-align:left; font-size:16px; text-align:left; font-weight:700; font-family:Figtree, sans-serif; color:#33617a;">Enter your email to subscribe</label>
<div class="entry__field">
<input autocomplete="off" class="input" data-required="true" id="EMAIL" name="EMAIL" placeholder="EMAIL" required="" style="border-radius:0.7rem;" type="text">
</input></div>
</div>
<label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Figtree, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
</label>
<label class="entry__specification" style="font-size:12px; text-align:left; font-family:Figtree, sans-serif; color:#33617a; text-align:left">
                  Please provide your email to subscribe. For example: abc@xyz.com
                </label>
</div>
</div>
</div>
<div style="padding: 8px 0;">
<div class="sib-optin sib-form-block">
<div class="form__entry entry_mcq">
<div class="form__label-row">
<div class="entry__choice" style="">
<label>
<input class="input_replaced" id="OPT_IN" name="OPT_IN" type="checkbox" value="1">
<span class="checkbox checkbox_tick_positive" style="margin-left:"></span><span style="font-size:14px; text-align:left; font-family:Figtree, sans-serif; color:#3C4858; background-color:transparent;"><p>I agree to receive newsletters under the appropriate terms and conditions.</p><p><br/></p></span> </input></label>
</div>
</div>
<label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Figtree, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
</label>
<label class="entry__specification" style="font-size:12px; text-align:left; font-family:Figtree, sans-serif; color:#33617a; text-align:left">
                  You can unsubscribe at any time using the link in our newsletter.
                </label>
</div>
</div>
</div>
<div style="padding: 8px 0;">
<div class="sib-form-block" style="text-align: left">
<button class="sib-form-block__button sib-form-block__button-with-loader" form="sib-form" style="font-size:16px; text-align:left; font-weight:700; font-family:Figtree, sans-serif; color:#FFFFFF; background-color:#33617a; border-radius:20px; border-width:0px;" type="submit">
<svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon" viewbox="0 0 512 512">
<path d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z"></path>
</svg>
                SUBSCRIBE
              </button>
</div>
</div>
<input class="input--hidden" name="email_address_check" type="text" value=""/>
<input name="locale" type="hidden" value="en"/>
</form>
</div>
</div>
</div>
<!-- END - We recommend to place the above code where you want the form in your website html  -->
<!-- START - We recommend to place the below code in footer or bottom of your website html  -->
<script>
    window.REQUIRED_CODE_ERROR_MESSAGE = 'Select a country code';
    window.LOCALE = 'en';
    window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "The information provided is invalid. Please check the field format and try again.";

    window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank.";

    window.GENERIC_INVALID_MESSAGE = "The information provided is invalid. Please check the field format and try again.";

    window.translation = {
      common: {
        selectedList: '{quantity} selected list',
        selectedLists: '{quantity} selected lists'
      }
    };

    var AUTOHIDE = Boolean(0);
  </script>
<script defer="" src="https://sibforms.com/forms/end-form/build/main.js"></script>
<!-- END - We recommend to place the above code in footer or bottom of your website html  -->
<!-- End Brevo Form -->
</div><noscript>
<img alt="" height="1" src="https://px.ads.linkedin.com/collect/?pid=8191113&amp;fmt=gif" style="display:none;" width="1">
</img></noscript>

<?php get_footer(); ?>
