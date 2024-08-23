<section id="treinamento">
  <div class="container py-5 px-3 px-sm-5 bg-secondary">
    <div class="row m-auto">
      <div class="col-12 col-lg-5 d-flex flex-column justify-content-center p-0 pe-lg-5">
        <div>
          <div class="title">
            <?php if ($args['title']): ?>
              <h2><?= $args['title'] ?></h2>
            <?php endif; ?>
            <?php if ($args['subtitle']): ?>
              <p><?= $args['subtitle'] ?></p>
            <?php endif; ?>
          </div>
          <?php if($args['content']): ?> 
            <div class="description">
              <?php if($args['content']['paragraphs'] && count($args['content']['paragraphs']) > 0) { ?>
                <?php foreach($args['content']['paragraphs'] as $paragraph) { ?>
                  <?php foreach ($paragraph as $p) { ?>
                  <p><?= $p ?></p> 
                  <?php } ?>
                <?php } ?>
              <?php } ?>

              <?php if($args['content']['list_items'] && count($args['content']['list_items']) > 0) { ?>
                <ul>
                  <?php foreach($args['content']['list_items'] as $item) { ?>
                    <?php foreach ($item as $i) { ?>
                    <li><i class="bi bi-check-lg"></i> <?= $i ?></li> 
                    <?php } ?>
                  <?php } ?>
                </ul>
              <?php } ?>
            </div>

            <?php if($args['button']){ ?>
              <div class="button mb-5 mb-lg-0">
                <a aria-label="Acessa página de Treinamentos" href="<?= $args['button']['link'] ?>" class="btn btn_primary"><?= $args['button']['label'] ?> 
                <i class="bi bi-arrow-right"></i>
              </a>
              </div>
            <?php } ?>
          <?php endif; ?>
        </div>
      </div><!-- end col -->
     
      <!-- Slider -->
      <div class="col-12 col-lg-7 p-0">
        <?php if($args['slider_id']){ 
          get_template_part( 'template-parts/slider','',$args['slider_id']); ?>
        <?php } ?>
      </div><!-- end col -->
    </div><!-- end row -->
  </div><!-- end container -->
</section>
