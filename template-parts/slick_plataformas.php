<section id="slick_plataformas">
  <div class="container p-0">
    <div class="title">
      <?php if ($args['title']): ?>
        <h2><?= $args['title'] ?></h2>
      <?php endif; ?>
      <?php if ($args['subtitle']): ?>
        <p><?= $args['subtitle'] ?></p>
      <?php endif; ?>
    </div> <!-- end title -->

    <!-- Slider -->
    <div class="multiple-items">

    <?php foreach($args['plataformas'] as $id){
       $plataforma = get_fields($id); ?>

        <div>
          <div class="cards plataforma">
          <!-- Card Img -->
            <?php if ($plataforma['img']): ?>
              <div class="img">
                <img src="<?= $plataforma['img']['url'] ?>" alt="<?= $plataforma['img']['alt'] ?>">
              </div><!-- end card img -->
            <?php endif; ?>

            <div class="title">
              <h3><?= $plataforma['name'] ?></h3>
            </div> <!-- end card title -->

            <div class="description">
              <p><?= $plataforma['description'] ?></p>
            </div> <!-- end card description -->

            <div class="button">
              <a href="<?= $plataforma['button']['link']['link'] ?>" class="btn btn_outline_primary">
                <?= $plataforma['button']['link']['label'] ?>
              </a>
              <a href="javascript: void(0)" class="btn btn_primary" onclick="setQuote(<?= $plataforma['id'] ?>,'<?= $plataforma['name'] ?>')">
              <?= $plataforma['button']['quote_label'] ?>
              </a>
            </div><!-- end card btn -->

          </div><!-- end card plataforma -->
        </div>

    <?php } ?>
      
    </div> <!-- end multiple items -->

  </div><!-- end container -->
</section>
