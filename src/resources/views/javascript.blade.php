  <script src="https://www.google.com/recaptcha/api.js?render={{ reCAPTCHA_site_key }}"></script>
  <script>
  grecaptcha.ready(function() {
      grecaptcha.execute('{{ reCAPTCHA_site_key }}', {action: '{{ reCAPTCHA_action }}'}).then(function(token) {
          console.log('reCaptcha: executed');
      });
  });
  </script>