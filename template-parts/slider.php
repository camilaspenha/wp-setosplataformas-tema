
<?php $slider = get_fields($args); ?>

    <div id="<?= $args ?>" class="carousel slide">
      <?php foreach ($slider as $key => $value) { ?>
        <div class="carousel-indicators">
          <?php for ($i=0; $i < count($value); $i++) { ?>
            <button type="button" data-bs-target="#<?= $args ?>" data-bs-slide-to="<?= $i ?>" class="<?= $i == 0 ? 'active' : '' ?>" aria-current="true" aria-label="Slide <?= $i + 1 ?>"></button>
          <?php } ?>
        </div> <!-- end indicators -->

        <div class="carousel-inner">
          <?php foreach ($value as $key => $value) { ?>
            <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">
              <img src="<?= $value['img']['url'] ?>" class="d-block w-100" alt="<?= $value['img']['alt'] ?>">
              <?php if($value['img']['caption']) { ?>
                <div class="carousel-caption">
                  <h5><?= $value['img']['caption'] ?></h5>
                </div><!-- end caption -->
              <?php } ?>
            </div> <!-- end carousel item -->
          <?php } ?>
        </div> <!-- end carousel inner -->

        <button class="carousel-control-prev" type="button" data-bs-target="#<?= $args ?>" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#<?= $args ?>" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        

      <?php } ?>
  </div><!-- end carousel -->
</div><!-- end slider -->