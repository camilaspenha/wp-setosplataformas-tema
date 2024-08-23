<section id="manutencao">
  <div class="container p-0">
    <div class="row m-auto">
      <div class="col-12 top p-0">
        <div class="row m-auto">
            <div class="col-12 col-lg-4 col-xl-3 p-0">
              <div>
                <?php if($args['title']): ?>
                  <div class="title">
                    <h2><?= $args['title'] ?></h2>

                    <?php if($args['subtitle']):?>
                      <p><?= $args['subtitle'] ?></p>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div> <!-- end col -->

            <div class="col-12 col-lg-7 d-flex flex-column justify-content-center p-0">
              <div>          
                <?php if($args['content'] && count($args['content']) > 0): ?>
                  <div class="description">
                    <?php foreach($args['content'] as $p): ?>
                      <p><?= $p['paragraph'] ?></p>
                    <?php endforeach; ?>
                  </div> <!-- end description-->
                <?php endif; ?>
              </div>
            </div> <!-- end col -->
        </div><!-- end row -->
      </div><!--  end col -->

      <!-- Slider  -->
      <div class="col-12 p-0">
        <div class="multiple-items">
          <?php foreach ($args['cards'] as $card) { ?>
            <div>
              <div class="cards manutencao <?= $card['class'] ?>">
                <?php if($card['title']): ?>
                  <div class="title">
                    <h3><?= $card['title'] ?></h3>
                  </div>
                <?php endif; ?>
                
                <?php if($card['content']): ?>
                  <div class="description">
                    <p><?= $card['content']?></p>
                  </div>
                <?php endif; ?>
                
              </div> <!-- end cards manutencao -->
            </div>
          <?php } ?>
        </div><!-- end multiple items -->
      </div><!-- end col -->

      <div class="col-12">
        <?php if($args['button']): ?>
          <div class="button">
            <a href="<?= $args['button']['link']['url'] ?>" class="btn btn_outline_light" aria-label="abre página de Serviços de Manutenção">
              <?= $args['button']['label']?>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</section>