<?php 
if($args['id']): 
$cta = get_fields($args['id']);
?>
<section id="cta">
  <div class="container p-0">
    <div class="row m-auto justify-content-center">
      <div class="col-12 p-0">
        <?php if( $cta['title']): ?>
          <div class="title">
            <h2><?= $cta['title'] ?></h2>
          </div>
        <?php endif; ?>
        
        <?php if($cta['subtitle']): ?>
          <div class="description">
            <p><?= $cta['subtitle'] ?></p>
          </div>
        <?php endif; ?>
        
        <?php if($cta['button_label']): ?>
          <div class="button">
            <a href="<?= get_theme_mod('whatsapp-api') ?>" class="btn btn_primary" aria-label="Link para Orçamento via Whatsapp - Abre em nova página" target="_blank">
              <i class="bi bi-whatsapp me-2"></i> <?= $cta['button_label'] ?>
            </a>
          </div>
        <?php endif; ?>
      </div> <!-- end col -->
    </div> <!-- end row -->
  </div><!-- end  container -->
</section>
<?php endif; ?>