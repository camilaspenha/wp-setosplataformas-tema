<?php
define( 'ASSETS' , get_stylesheet_directory_uri() . '/assets');
?>
  <footer>
    <div class="top">
      <div class="container p-0">
        <div class="row m-auto">
          <div class="col-12 col-lg-3">
            <div class="logo">
              <a class="navbar-brand" href="<?= get_blogInfo('url') ?>">
                <img width="120px" src="<?= get_stylesheet_directory_uri() . '/assets/img/logo_white_icon2.svg' ?>" alt="Logo"></a> 
            </div>
            <div class="slogan">
              <p><?= get_theme_mod('slogan') ?></p>
            </div>
          </div><!-- end col -->

          <div class="col-12 col-lg-2">
            <div class="links">
              <h4>Links</h4>
              <?php
              $args = array(
                'menu' => 'links',
                'container' => 'ul',
                'before' => '<i class="bx bx-chevron-right"></i>',
                'theme_location' => 'my-footer-menu-links',
                'menu_class' => '',
              );
              wp_nav_menu( $args );
            ?> 
            </div>
          </div><!-- end col -->

          <div class="col-12 col-lg-3">
            <div class="links">
              <h4>Plataformas</h4>
              <?php
              $args = array(
                'menu' => 'products',
                'container' => 'ul',
                'before' => '<i class="bx bx-chevron-right"></i>',
                'theme_location' => 'my-footer-menu-products',
                'menu_class' => '',
              );
              wp_nav_menu( $args );
            ?> 
            </div>
          </div><!-- end col -->

          <div class="col-12 col-lg-4">
            <div class="contacts">
              <div class="item">
                <div class="title">
                  <i class="bi bi-envelope-at me-1"></i>
                  <h6>E-mail</h6>
                </div>
                <div class="description">
                  <a aria-label="Link para Envio de E-mail" href="mailto:<?= get_theme_mod('email') ?>"><?= get_theme_mod('email') ?></a>
                </div>
              </div><!-- item -->             

              <div class="item">
                <div class="title">
                  <i class="bi bi-telephone me-1"></i>
                  <h6>Telefone</h6>
                </div>
                <div class="description">
                  <a aria-label="Link para Orçamento via Whatsapp - Abre em nova página" target="_blank" href="<?= get_theme_mod('whatsapp-api') ?>"><?= get_theme_mod('whatsapp') ?></a>
                </div>
              </div><!-- item -->
            </div> <!-- end contacts -->
          </div><!-- end col -->

        </div><!-- end row -->
      </div><!-- end container -->
    </div><!-- end top -->

    <div class="bottom">
      <div class="d-lg-flex justify-content-around align-items-center">
        <div class="copy">
          2024 &copy; Copyright <strong><span><?= get_theme_mod('razao-social') ?></span></strong> - <?= get_theme_mod('cnpj') ?>
        </div>
        <div class="credits">
          <a href="https://sitecriativo.tec.br/" aria-label="Link para Site Criativo - Abre em nova página" target="_blank">
            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/logo_site_criativo.svg' ?>" width="80px" alt="Logo Site Criativo">
          </a>
        </div>
      </div>
    </div><!-- end bottom -->
  </footer>

  <!-- Modal -->
  <div class="modal fade" id="modalOrcamento" tabindex="-1" aria-labelledby="Modal de confirmação do item adicionado ao orçamento" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar confirmação"></button>  
        </div><!-- end modal header -->        
        <div class="modal-body">
          <h6 class="modal-title" id="modalOrcamentoLabel"></h6>
        </div>
      </div><!-- end modal content -->
    </div><!-- end modal dialog -->
  </div> <!-- end modal -->
  
	<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" aria-label="botão voltar para o topo da página">
		<i class="bi bi-arrow-up-short"></i>
	</a>
  
  <!-- Vendor JS Files -->
  <script src="<?= ASSETS . '/vendor/bootstrap/js/bootstrap.bundle.min.js'  ?>"></script>

  <!-- Sclick -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="<?= ASSETS . '/vendor/slick/slick.min.js' ?>"></script>

  <!-- Main JS -->
	<script src="<?= ASSETS . '/vendor/php-email-form/validate.js' ?>"></script>
  <script type="module" src="<?= ASSETS . '/js/dist/script.js'  ?>"></script>

  <!-- Slick Init -->
  <script type="text/javascript">
    $('.multiple-items').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1400,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        }
      ]
    });

    $('.slick_cards_manutencao').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1400,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        }
      ]
    });
  </script>

	</body>
</html>