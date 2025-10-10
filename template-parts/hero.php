<section id="hero" class="d-flex flex-column justify-content-center">
  <div class="container p-0">
    <div class="row m-auto">
      <div class="col-12 d-flex flex-column justify-content-center content">
        <div>
          <div class="boxReverse">
            <?php if($args['titulo']): ?>
              <h1><?= $args['titulo'] ?></h1>
            <?php endif; ?>

            <?php if($args['subtitulo']): ?>
              <span><?= $args['subtitulo'] ?></span>
            <?php endif; ?>
          </div><!-- end boxReverse -->
            
            <?php if($args['descricao']): ?>
              <p><?= $args['descricao'] ?></p>
            <?php endif; ?>

            <?php if($args['botao'] && $args['botao']['label']): ?>
              <div class="hero_btnContainer">
                <div class="button">
                       <a href="<?= get_theme_mod('whatsapp-api') ?>" target="_blank" aria-label="Link para Orçamento via Whatsapp - Abre em nova página" class="btn btn_primary">
                  <i class="bi bi-whatsapp"></i>
                  <span class="ms-2"> Solicite Orçamento </span>
                </a>    
              </div>
              <div class="button">
                
                <a href="<?= $args['botao']['link'] ?>" aria-label="Link para rolar a página até a seção <?= $args['botao']['label'] ?>" class="btn btn_outline_light">
                  <?= $args['botao']['label'] ?>
                </a>   
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div> <!-- end col -->
    </div> <!-- end row -->
  </div> <!-- end container -->
</section>