 <?php
  if($args['page_template'] == 'single'){
    $class = 'order-last';
    $col_txt = '7';
    $col_img = '5';
  }
  else{
    $class = 'order-last order-lg-0';
    $col_txt = '5';
    $col_img = '7';
  }
 ?>
 <section id="inner_header">
  <div class="container p-0">
    <div class="row m-auto">
      <div class="col-12 col-lg-<?= $col_txt ?> px-xl-5 d-flex flex-column justify-content-center <?= $class ?>">

      <?php if($args['title']):?>
        <div class="title mt-4 mt-lg-0">
          <h2><?= $args['title'] ?></h2>
          <?php if($args['subtitle']):?>
          <p>especificações</p>
          <?php endif; ?>
        </div> 
      <?php endif; ?>

      <?php if($args['content']):?>
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

        </div> <!-- end description-->
      <?php endif; ?>

        <div class="button">
          <?php if($args['button']):?>
            <?php if($args['button']['anchor']):?>
              <a href="<?= $args['button']['anchor']['link'] ?>" class="btn btn_outline_primary"><?= $args['button']['anchor']['label'] ?></a>
            <?php endif; ?>

            <?php if($args['button']['quote']):?>
              <a href="javascript: void(0)" class="btn btn_primary" onclick="setQuote(<?= $args['button']['quote']['id']?>,'<?=  $args['button']['quote']['name'] ?>')">Orçamento</a>
            <?php endif; ?>

          <?php endif; ?>
        </div><!-- end btn -->
      </div><!-- end col -->

      <div class="col-12 col-lg-<?= $col_img ?> col_img text-center">
        <?php if($args['select'] == 'img'): ?>
            <img src="<?=  $args['img']['url']?> " alt="<?= $args['img']['alt'] ?>">
          <?php endif; ?>

          <?php if($args['select'] == 'slider'): ?>
            <?php if($args['slider_id']){ 
              get_template_part( 'template-parts/slider','',$args['slider_id']); ?>
            <?php } ?>
          <?php endif; ?>

        
      </div><!-- end col -->
    </div><!-- end row -->
  </div><!-- end container -->
</section><!-- end inner header -->