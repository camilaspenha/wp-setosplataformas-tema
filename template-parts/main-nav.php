<?php
$current_page = get_queried_object();
 if ($current_page) {
  $current_id = $current_page->ID;
 }
 // Obter todas as páginas
$args = array(
  'post_type' => 'page',
  'posts_per_page' => -1,
  'post_status' => 'publish',
  'post_parent' => 0,
  'orderby' => 'ID',
  'order' => 'ASC',
);
$query = new WP_Query($args);
$pages = array();

// Obter dados de cada página
if ($query->have_posts()) {
  while ($query->have_posts()) {
      $query->the_post();
      
      $page_id = get_the_ID();
      $page_title = get_the_title();
      $page_url = get_permalink();
      
      // Obter páginas filhas
      $child_args = array(
          'post_type' => 'page',
          'posts_per_page' => -1,
          'post_status' => 'publish',
          'post_parent' => $page_id,
          'orderby' => $page_title,
          'order' => 'ASC',
      );
      $child_query = new WP_Query($child_args);
      
      $children = array();
      if ($child_query->have_posts()) {
          while ($child_query->have_posts()) {
              $child_query->the_post();

              $children[] = array(
                  'id' => get_the_ID(),
                  'name' => get_the_title(),
                  'url' => get_permalink()
              );
          }
          wp_reset_postdata();
      }
      
      switch ($page_id) {
        case '7':
          $home[] = array(
            'id' => $page_id,
            'name' => $page_title,
            'url' => $page_url,
            'children' => $children,
            'class' =>  $page_id == $current_id ? 'active' : '',
            'aria-current' => $page_id == $current_id ? 'aria-current = "page" ' : ''
          );
          break;
        case '67':
          $contato[] = array(
            'id' => $page_id,
            'name' => $page_title,
            'url' => $page_url,
            'children' => $children,
            'class' =>  $page_id == $current_id ? 'active' : '',
            'aria-current' => $page_id == $current_id ? 'aria-current = "page" ' : ''
          );
          break;
        case '489':
            $plataformas[] = array(
              'id' => $page_id,
              'name' => $page_title,
              'url' => $page_url,
              'children' => $children,
              'class' =>  $page_id == $current_id ? 'active' : '',
              'aria-current' => $page_id == $current_id ? 'aria-current = "page" ' : ''
            );
            break;
          case '491':
              $servicos[] = array(
                'id' => $page_id,
                'name' => $page_title,
                'url' => $page_url,
                'children' => $children,
                'class' =>  $page_id == $current_id ? 'active' : '',
                'aria-current' => $page_id == $current_id ? 'aria-current = "page" ' : ''
              );
              break;       
      }
  }
  wp_reset_postdata();
}
?>
<header class="fixed-top">
  <div class="container p-0">
    <div class="row m-auto">
      <div class="col-12 d-flex align-items-baseline justify-content-between p-0">
        <div class="logo">
            <a aria-label="link para o início" class="navbar-brand" href="<?= get_blogInfo('url') ?>">
              <img width="140px" src="<?= get_stylesheet_directory_uri() . '/assets/img/logo_white_icon2.svg'  ?>" alt="Logo Setos Plataformas Elevatórias">
            </a> 
        </div><!-- end logo -->
        <div class="d-flex justify-content-end align-items-center">
          <nav class="navbar navbar-expand-lg bg-dark order-last order-lg-0" data-bs-theme="dark">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav">

                    <li class="nav-item ">
                      <a class="nav-link <?= $home[0]['class'] ?>" <?= $home[0]['aria-current'] ?> href="<?= $home[0]['url'] ?>">Home</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Plataformas
                      </a>
                      <ul class="dropdown-menu">             
                        <?php foreach ($plataformas[0]['children'] as $child) : ?>
                          <li><a class="dropdown-item" href="<?= $child['url'] ?>"><?= $child['name'] ?></a></li>
                        <?php endforeach; ?>  
                      </ul>
                    </li>

                     <?php foreach ($servicos as $servico) : ?>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <?= $servico['name'] ?>
                        </a>
                        <ul class="dropdown-menu">             
                          <?php foreach ($servicos[0]['children'] as $child) : ?>
                            <li><a class="dropdown-item" href="<?= $child['url'] ?>"><?= $child['name'] ?></a></li>
                          <?php endforeach; ?>  
                        </ul>
                      </li>
                    <?php endforeach; ?>
                    
                    <li class="nav-item ">
                      <a class="nav-link <?= $contato[0]['class'] ?>" <?= $contato[0]['aria-current'] ?> href="<?= $contato[0]['url'] ?>">Contato</a>
                    </li>
                  </ul><!-- end navbar ul -->
                </div><!-- end off canvas body -->
              </div> <!-- end offcanvas -->
            </div><!-- end container -->
          </nav>
          <a href="<?= get_theme_mod('whatsapp-api') ?>" target="_blank" aria-label="Link para Orçamento via Whatsapp - Abre em nova página" class="btn btn_primary">
            <i class="bi bi-whatsapp"></i>
            <span class="ms-2 d-none d-lg-inline"> Orçamento </span>
          </a>
        </div>
      </div><!-- end col -->
    </div><!-- end row -->
  </div><!-- end container -->
</header>