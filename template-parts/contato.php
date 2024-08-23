<section id="contact" class="contact">
  <div class="container p-0" data-aos="fade-up">

    <div class="row m-auto">
      <div class="col-lg-5 p-0">
        <div class="title">
        <h2>Contato</h2>
        </div>
          <div class="info">
            <div class="item d-sm-flex">
              <i class="bi bi-envelope-at mb-3 me-3"></i>
              <div>
                <h4>Email:</h4>
                <a href="mailto:<?= get_theme_mod('email') ?>" title="Link para Enviar um E-mail"><?= get_theme_mod('email') ?></a>
              </div>
            </div>

            <div class="item d-sm-flex">
              <i class="bi bi-whatsapp mb-3 me-3"></i>
              <div>
                <h4>Whatsapp:</h4>            
                <a href="<?= get_theme_mod('whatsapp-api') ?>" target="_blank" title="Abre Página Externa - Whatsapp Web">
                <?= get_theme_mod('whatsapp'); ?>
              </div>
              </a>
            </div>
          </div>
        </div>

      <div class="col-lg-7 p-0">
      <?php get_template_part( 'template-parts/form');   ?>
      </div>
    </div>

  </div>
</section>