<section id="inner_tabs">
  <div class="container p-0">
    <nav>
      <div class="nav nav-underline flex-column " id="nav-tab" role="tablist">
        <div class="d-md-flex">

        <?php foreach ($args['tabs'] as $key => $tab) { ?>
          <button class="nav-link <?= $key == 0 ? 'active' : '' ?>" id="nav-<?= $tab['id'] ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?= $tab['id'] ?>" type="button" role="tab" aria-controls="nav-<?= $tab['id'] ?>" aria-selected="true">
          <?= $tab['label'] ?>
          </button>
        <?php } ?>
        </div>
      </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">

      <?php foreach ($args['tabs'] as $key => $tab) { ?>
        <div class="tab-pane fade <?= $key == 0 ? 'show active' : '' ?>" id="nav-<?= $tab['id'] ?>" role="tabpanel" aria-labelledby="nav-<?= $tab['id'] ?>-tab" tabindex="0">
          <?php foreach ($tab['content'] as $key => $content) { ?>
            <div class="cards">
              <div class="title">
                <h3><?= $content['title'] ?></h3>
              </div> <!-- end card title -->

              <div class="description">
                <?php foreach ($content['text'] as $key => $item) { ?>
                  <p><?= $item['item'] ?></p>
                <?php } ?>
              </div> <!-- end card description -->
            </div><!-- end tab inner content -->
          <?php } ?>
            
        </div><!-- end tab pane -->
      <?php } ?>

    </div><!-- end tab content -->
  </div>  <!-- end container -->
</section><!-- end inner tabs -->