<?php
  $lang = function_exists( 'biosolve4all_get_lang' ) ? biosolve4all_get_lang() : 'pt';
  $is_en = $lang === 'en';
  $newsletter_label = $is_en ? 'SUBSCRIBE TO OUR NEWSLETTER' : 'SUBSCREVA A NOSSA NEWSLETTER';
  $newsletter_error = $is_en ? 'Your subscription could not be validated.' : 'A sua assinatura não pode ser validada.';
  $newsletter_success = $is_en ? 'You have subscribed successfully.' : 'Você fez a sua assinatura com sucesso.';
  $newsletter_subtitle = $is_en ? 'Subscribe to our newsletter and stay up to date.' : 'Assine a nossa newsletter e mantenha-se atualizado.';
  $newsletter_email_label = $is_en ? 'Enter your email to subscribe' : 'Insira o seu e-mail para fazer a sua assinatura';
  $newsletter_email_help = $is_en
    ? 'Please provide your email to subscribe. For example: abc@xyz.com'
    : 'Forneça o seu e-mail para assinar. Por exemplo: abc@xyz.com';
  $newsletter_optin_label = $is_en
    ? 'I agree to receive newsletters under the appropriate terms and conditions.'
    : 'Eu concordo em receber newsletters com os seus devidos termos e condições.';
  $newsletter_unsubscribe = $is_en
    ? 'You can unsubscribe at any time using the link in our newsletter.'
    : 'Você pode cancelar a assinatura a qualquer momento usando o link na nossa newsletter.';
  $newsletter_button_label = $is_en ? 'SUBSCRIBE' : 'ASSINAR';
  $newsletter_locale = $is_en ? 'en' : 'pt';
  $privacy_label = $is_en ? 'Privacy Policy' : 'Política de Privacidade';
  $brevo_required_code = $is_en ? 'Select a country code' : 'Escolha um código de país';
  $brevo_invalid_message = $is_en
    ? 'The information provided is invalid. Please check the field format and try again.'
    : 'A informação fornecida não é valida. Verifique o formato do campo e tente novamente.';
  $brevo_required_message = $is_en
    ? 'This field cannot be left blank.'
    : 'Este campo não pode ser deixado em branco. ';
  $brevo_selected_list = $is_en ? '{quantity} selected list' : '{quantity} lista selecionada';
  $brevo_selected_lists = $is_en ? '{quantity} selected lists' : '{quantity} listas selecionadas';
  $contact_success = $is_en ? 'Message sent successfully!' : 'Mensagem enviada com sucesso!';
  $contact_error_server = $is_en ? 'Error connecting to the server. ' : 'Erro ao conectar com o servidor. ';
  $contact_error_general = $is_en ? 'Error connecting to the server.' : 'Erro ao conectar com o servidor.';
?>
<footer class="footer">
<div class="footer__container">
<div class="footer__logo">
<img alt="Biosolve4All Logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vectors/footer-logo.svg"/>
</div>
<div class="footer__row">
<div class="footer__info">
<a href="https://maps.app.goo.gl/4gfRPp6s8pAwiYsc9" target="_blank">
<p>
<i class="icon-location"><svg fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M12 12C10.9 12 10 11.1 10 10C10 8.9 10.9 8 12 8C13.1 8 14 8.9 14 10C14 11.1 13.1 12 12 12ZM18 10.2C18 6.57 15.35 4 12 4C8.65 4 6 6.57 6 10.2C6 12.54 7.95 15.64 12 19.34C16.05 15.64 18 12.54 18 10.2ZM12 2C16.2 2 20 5.22 20 10.2C20 13.52 17.33 17.45 12 22C6.67 17.45 4 13.52 4 10.2C4 5.22 7.8 2 12 2Z" fill="#F6F6F6"></path>
</svg>
</i>
                        Praça Conde de Agrolongo, nº123, Edifício Gnration, Braga, 4700-312, Portugal
                    </p></a>
<a href="tel:+351927400719">
<p>
<i class="icon-phone"><svg fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M6.54 5C6.6 5.89 6.75 6.76 6.99 7.59L5.79 8.79C5.38 7.59 5.12 6.32 5.03 5H6.54ZM16.4 17.02C17.25 17.26 18.12 17.41 19 17.47V18.96C17.68 18.87 16.41 18.61 15.2 18.21L16.4 17.02ZM7.5 3H4C3.45 3 3 3.45 3 4C3 13.39 10.61 21 20 21C20.55 21 21 20.55 21 20V16.51C21 15.96 20.55 15.51 20 15.51C18.76 15.51 17.55 15.31 16.43 14.94C16.33 14.9 16.22 14.89 16.12 14.89C15.86 14.89 15.61 14.99 15.41 15.18L13.21 17.38C10.38 15.93 8.06 13.62 6.62 10.79L8.82 8.59C9.1 8.31 9.18 7.92 9.07 7.57C8.7 6.45 8.5 5.25 8.5 4C8.5 3.45 8.05 3 7.5 3Z" fill="#F6F6F6"></path>
</svg>
</i>
                        +351 927 400 719
                    </p></a>
<a href="mailto:geral@biosolve4all.com">
<p>
<i class="icon-email"><svg fill="none" height="24" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6ZM20 6L12 11L4 6H20ZM20 18H4V8L12 13L20 8V18Z" fill="#F6F6F6"></path>
</svg>
</i>
                        geral@biosolve4all.com
                    </p></a>
</div>
<div class="footer__newsletter">
<button class="footer__btn" id="brevo-form-overlay"><?php echo esc_html( $newsletter_label ); ?></button>
</div>
</div>
</div>
<hr class="footer__divider"/>
<div class="footer__bottom">
<a class="footer__social" href="https://www.linkedin.com/company/biosolve4all/posts/?feedView=all" target="_blank">
<i class="icon-linkedin">
<svg fill="none" height="40" viewbox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg">
<rect fill="#F6F6F6" height="40" rx="20" width="40"></rect>
<path clip-rule="evenodd" d="M27 29H13C11.8954 29 11 28.1046 11 27V13C11 11.8954 11.8954 11 13 11H27C28.1046 11 29 11.8954 29 13V27C29 28.1046 28.1046 29 27 29ZM23.9762 26.75H26.75V21.0518C26.75 18.6408 25.3833 17.475 23.4743 17.475C21.5645 17.475 20.7607 18.9623 20.7607 18.9623V17.75H18.0875V26.75H20.7607V22.0255C20.7607 20.7597 21.3434 20.0064 22.4587 20.0064C23.484 20.0064 23.9762 20.7302 23.9762 22.0255V26.75ZM13.25 14.9108C13.25 15.8279 13.9878 16.5715 14.8984 16.5715C15.8089 16.5715 16.5463 15.8279 16.5463 14.9108C16.5463 13.9936 15.8089 13.25 14.8984 13.25C13.9878 13.25 13.25 13.9936 13.25 14.9108ZM16.3055 26.75H13.5181V17.75H16.3055V26.75Z" fill="#33617A" fill-rule="evenodd"></path>
</svg>
</i>
</a>
<a class="footer__privacy" href="https://biosolve4all.com/wp-content/uploads/2026/01/Politica-Privacidade-Bio_REV_11_11_2024.pdf" target="_blank"><?php echo esc_html( $privacy_label ); ?></a>
<span>©BioSolve4All</span>
</div>
</footer>

<div id="newsletter-pop-up">
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
  <div class="sib-form" style="text-align: center; background-color: transparent;">
    <div class="sib-form-container" id="sib-form-container">
      <div class="sib-form-message-panel" id="error-message" style="font-size:16px; text-align:left; font-family:Figtree, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;max-width:540px;">
        <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
          <svg class="sib-icon sib-notification__icon" viewbox="0 0 512 512">
            <path d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z"></path>
          </svg>
          <span class="sib-form-message-panel__inner-text">
            <?php echo esc_html( $newsletter_error ); ?>
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
            <?php echo esc_html( $newsletter_success ); ?>
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
                <p><?php echo esc_html( $newsletter_subtitle ); ?></p>
              </div>
            </div>
          </div>
          <div style="padding: 8px 0;">
            <div class="sib-input sib-form-block">
              <div class="form__entry entry_block">
                <div class="form__label-row">
                  <label class="entry__label" data-required="*" for="EMAIL" style="font-weight: 700; text-align:left; font-size:16px; text-align:left; font-weight:700; font-family:Figtree, sans-serif; color:#33617a;"><?php echo esc_html( $newsletter_email_label ); ?></label>
                  <div class="entry__field">
                    <input autocomplete="off" class="input" data-required="true" id="EMAIL" name="EMAIL" placeholder="EMAIL" required="" style="border-radius:0.7rem;" type="text">
                    </input>
                  </div>
                </div>
                <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Figtree, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
                </label>
                <label class="entry__specification" style="font-size:12px; text-align:left; font-family:Figtree, sans-serif; color:#33617a; text-align:left">
                  <?php echo esc_html( $newsletter_email_help ); ?>
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
                      <span class="checkbox checkbox_tick_positive" style="margin-left:"></span><span style="font-size:14px; text-align:left; font-family:Figtree, sans-serif; color:#3C4858; background-color:transparent;"><p><?php echo esc_html( $newsletter_optin_label ); ?></p><p><br/></p></span> </input></label>
                  </div>
                </div>
                <label class="entry__error entry__error--primary" style="font-size:16px; text-align:left; font-family:Figtree, sans-serif; color:#661d1d; background-color:#ffeded; border-radius:3px; border-color:#ff4949;">
                </label>
                <label class="entry__specification" style="font-size:12px; text-align:left; font-family:Figtree, sans-serif; color:#33617a; text-align:left">
                  <?php echo esc_html( $newsletter_unsubscribe ); ?>
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
                <?php echo esc_html( $newsletter_button_label ); ?>
              </button>
            </div>
          </div>
          <input class="input--hidden" name="email_address_check" type="text" value=""/>
          <input name="locale" type="hidden" value="<?php echo esc_attr( $newsletter_locale ); ?>"/>
        </form>
      </div>
    </div>
  </div>
  <!-- END - We recommend to place the above code where you want the form in your website html  -->
  <!-- End Brevo Form -->
</div>
<noscript>
  <img alt="" height="1" src="https://px.ads.linkedin.com/collect/?pid=8191113&amp;fmt=gif" style="display:none;" width="1">
  </img>
</noscript>

<script>
    window.REQUIRED_CODE_ERROR_MESSAGE = '<?php echo esc_js( $brevo_required_code ); ?>';
    window.LOCALE = '<?php echo esc_js( $lang ); ?>';
    window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "<?php echo esc_js( $brevo_invalid_message ); ?>";

    window.REQUIRED_ERROR_MESSAGE = "<?php echo esc_js( $brevo_required_message ); ?>";

    window.GENERIC_INVALID_MESSAGE = "<?php echo esc_js( $brevo_invalid_message ); ?>";




    window.translation = {
      common: {
        selectedList: '<?php echo esc_js( $brevo_selected_list ); ?>',
        selectedLists: '<?php echo esc_js( $brevo_selected_lists ); ?>'
      }
    };

    var AUTOHIDE = Boolean(0);
  </script>
<script defer="" src="https://sibforms.com/forms/end-form/build/main.js"></script>
<script>
  window.BIOSOLVE_CONTACT = {
    ajaxUrl: "<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>",
    nonce: "<?php echo esc_js( wp_create_nonce( 'biosolve_contact' ) ); ?>",
    successMessage: "<?php echo esc_js( $contact_success ); ?>",
    errorMessage: "<?php echo esc_js( $contact_error_general ); ?>",
    errorServerMessage: "<?php echo esc_js( $contact_error_server ); ?>"
  };
</script>
<script type="text/javascript">
  _linkedin_partner_id = "8191113";
  window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
  window._linkedin_data_partner_ids.push(_linkedin_partner_id);
  </script>
<script type="text/javascript">
  (function(l) {
  if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
  window.lintrk.q=[]}
  var s = document.getElementsByTagName("script")[0];
  var b = document.createElement("script");
  b.type = "text/javascript";b.async = true;
  b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
  s.parentNode.insertBefore(b, s);})(window.lintrk);
  </script>

<?php wp_footer(); ?>
</body>
</html>
