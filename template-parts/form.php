<form id="quote_form" action="<?= get_stylesheet_directory_uri() . '/assets/forms/contact.php' ?>" method="post" role="form" class="php-email-form mt-4">

<div class="form_header">
  <p>Envie seu pedido de orçamento:</p>
</div><!-- end form header -->

<div class="row m-auto">
  <!-- Nome -->
  <div class="col-12 form-group p-0">
    <input type="text" name="name" class="form-control" id="name" placeholder="Nome Completo" required>
  </div> <!-- end form group -->

  <!-- E-mail -->
  <div class="col-12 form-group mt-3 p-0">
    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
  </div><!-- end form group -->

  <!-- Telefone -->
  <div class="col-12 form-group mt-3 p-0">
    <input type="text" data-js="input" class="form-control" name="phone" id="phone" placeholder="Telefone" required>
  </div><!-- end form group -->

  <!-- Mensagem -->
  <div class="col-12 form-group mt-3 p-0">
    <textarea id="quote_msg" class="form-control" name="message" rows="5" placeholder="Mensagem"></textarea>
  </div> <!-- end form group -->

  <!-- Feedback -->
  <div class="col-12 form_feedback">
    <div class="error-message"></div>
    <!-- Alert Success -->
    <div class="alert alert-success d-none" role="alert">   
      <div>Mensgem enviada, em breve entraremos em contato. Obrigado!</div>
      <button type="button" class="btn-close" aria-label="Fechar Alerta"></button>
    </div><!-- end alert success -->
  </div><!-- end form feedback -->

  <!-- Submit Button -->
  <div class="col-12 button p-0">
    <button type="submit" class="btn btn_primary">
      Solicitar Orçamento <i class="bi bi-send ms-2"></i>
      <div class="loading"></div>
    </button>
  </div><!-- end form button -->
</div> <!-- end row -->
</form>