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
            <div class="button">
              <a href="<?= $args['botao']['link'] ?>" aria-label="Link para rolar a página até a seção <?= $args['botao']['label'] ?>" class="btn btn_primary">
                <?= $args['botao']['label'] ?>
              </a>
            </div>
          <?php endif; ?>
        </div>
      </div> <!-- end col -->
    </div> <!-- end row -->
  </div> <!-- end container -->
</section>