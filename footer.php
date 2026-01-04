<?php
  $lang = function_exists( 'biosolve4all_get_lang' ) ? biosolve4all_get_lang() : 'pt';
  $is_en = $lang === 'en';
  $newsletter_label = $is_en ? 'SUBSCRIBE TO OUR NEWSLETTER' : 'SUBSCREVA A NOSSA NEWSLETTER';
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
<a class="footer__privacy" href="https://biosolve4all.com/wp-content/uploads/2025/policies/privacy-policy.pdf" target="_blank"><?php echo esc_html( $privacy_label ); ?></a>
<span>©BioSolve4All</span>
</div>
</footer>

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
   const contactForm = document.getElementById("contact-form");
   if (contactForm) {
   contactForm.addEventListener("submit", async function (event) {
    event.preventDefault();

    let phoneInput = document.getElementById("phone").value.trim();

    // Remove all non-numeric characters except "+"
    let cleanedPhone = phoneInput.replace(/[^0-9+]/g, "");

    // Ensure it includes the country code
    if (!cleanedPhone.startsWith("+")) {
        cleanedPhone = "+351" + cleanedPhone; // Defaults to Portugal if missing
    }

    let formData = {
        "email": document.getElementById("email").value,
        "attributes": {
            "NOME": document.getElementById("firstName").value,
            "SOBRENOME": document.getElementById("lastName").value,
            "SMS": cleanedPhone, // Now formatted correctly
            "MENSAGEM": document.getElementById("message").value
        },
        "listIds": [6], // Substitua 6 pelo ID correto da sua lista
        "updateEnabled": true // Atualiza o contato se já existir
    };

    let responseMessage = document.getElementById("response-message");

    try {
        let response = await fetch("https://api.brevo.com/v3/contacts", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "api-key": "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"
            },
            body: JSON.stringify(formData)
        });

        let result = await response.json();

        if (response.ok) {
            responseMessage.innerText = "<?php echo esc_js( $contact_success ); ?>";
            responseMessage.style.color = "green";
        } else {
            responseMessage.innerText = "<?php echo esc_js( $contact_error_server ); ?>" + (result.message || "");
            responseMessage.style.color = "red";
        }
    } catch (error) {
        responseMessage.innerText = "<?php echo esc_js( $contact_error_general ); ?>";
        responseMessage.style.color = "red";
    }
});
}

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
