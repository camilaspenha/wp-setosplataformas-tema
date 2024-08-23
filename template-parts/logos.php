<?php if($args['logo'] && count($args['logo']) > 0): ?>
<section id="logos">
  <div class="container">
    <div class="text-center d-md-flex justify-content-around flex-wrap">

      <?php foreach($args['logo'] as $logo): ?>
        <img src="<?= $logo['img']['url']; ?>" alt="<?= $logo['img']['alt']; ?>">
      <?php endforeach; ?>
    </div>
    
  </div><!-- end container -->
</section>
<?php endif; ?>