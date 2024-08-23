(function () {
  "use strict";
  
  let forms = document.querySelectorAll('.php-email-form');

  forms.forEach( function(e) {
    e.addEventListener('submit', function(event) {
      event.preventDefault();

      let thisForm = this;

      /**
       * Valida Campos Obrigatórios
       */
      let input_name = thisForm.querySelector('.php-email-form input[name="name"]');
      if(input_name){
        if(input_name.value == ''){
          alert('Por favor, preencha seu nome');
          return false;
        }
      }
      let input_email = thisForm.querySelector('.php-email-form input[name="email"]');
      if(input_email){
        if(input_email.value == ''){
          alert('Por favor, preencha seu e-mail');
          return false;
        }
      }
    
      let action = thisForm.getAttribute('action');

      /*
      let captcha_response = grecaptcha.getResponse();
      console.log(captcha_response);
      
      if(captcha_response.length == 0) {
        thisForm.querySelector('.error-message').classList.add('d-block');
        thisForm.querySelector('.error-message').innerHTML = 'Preencha o Recaptcha';
        return false;
      }
      */

      thisForm.querySelector('.loading').classList.add('d-inline-block');
      thisForm.querySelector('i.bi-send').classList.add('d-none');
      
      thisForm.querySelector('.error-message').classList.remove('d-block');
      thisForm.querySelector('.alert-success').classList.remove('d-flex');
      thisForm.querySelector('.alert-success').classList.add('d-none');

      let formData = new FormData( thisForm );
      php_email_form_submit(thisForm, action, formData);
      
    });
  });

  function php_email_form_submit(thisForm, action, formData) {
    fetch(action, {
      method: 'POST',
      body: formData,
      headers: {'X-Requested-With': 'XMLHttpRequest'}
    })
    .then(response => {
      console.log(response);
      if( response.ok ) {
        return response.status;
      } else {
        throw new Error(`${response.status} ${response.statusText} ${response.url}`); 
      }
    })
    .then(data => {
      thisForm.querySelector('.loading').classList.remove('d-inline-block');
      thisForm.querySelector('i.bi-send').classList.remove('d-none');
     
      console.log(data);
      
      if (data == 200) {
        thisForm.querySelector('.alert-success').classList.remove('d-none');
        thisForm.querySelector('.alert-success').classList.add('d-flex');
        const btn_dismiss = thisForm.querySelector('.btn-close');{
          if(btn_dismiss){
            btn_dismiss.addEventListener('click', function() {
              thisForm.querySelector('.alert-success').classList.remove('d-flex');
              thisForm.querySelector('.alert-success').classList.add('d-none');
            });
          }
        }
        const btn_limpar = thisForm.querySelector('#btn_limpar');
        if(btn_limpar){
          btn_limpar.remove();
        }
        localStorage.removeItem('orcamento');
        //todo atualiza form
        thisForm.reset(); 
      } else {
        throw new Error(data ? data : 'Form submission failed and no error message returned from: ' + action); 
      }
    })
    .catch((error) => {
      displayError(thisForm, error);
    });
  }

  function displayError(thisForm, error) {
    thisForm.querySelector('.loading').classList.remove('d-inline-block');
    thisForm.querySelector('i.bi-send').classList.remove('d-none');
    thisForm.querySelector('.error-message').innerHTML = error;
    thisForm.querySelector('.error-message').classList.add('d-block');
  }
  
})();
