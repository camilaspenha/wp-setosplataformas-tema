<?php

define('_PATHTHEME', get_stylesheet_directory());

require_once(_PATHTHEME . "/framework/tema.menus.php");
require_once(_PATHTHEME . "/framework/tema.scripts.php");
require_once(_PATHTHEME . "/framework/tema.customize.php");
require_once(_PATHTHEME . "/framework/tema.slider.php");
require_once(_PATHTHEME . "/framework/tema.produto.php");
require_once(_PATHTHEME . "/framework/tema.cta.php");

function custom_search_exclude_pages_by_id($query) {
  // Verifica se é a página de busca e se é o query principal
  if ($query->is_search && $query->is_main_query()) {
      // Define o post type como 'post' para buscar apenas posts
      $query->set('post_type', 'page');

      // IDs das páginas a serem excluídas
      $excluded_pages = array(489, 491); // Substitua pelos IDs das páginas que deseja excluir

      // Exclui as páginas pelos IDs
      $query->set('post__not_in', $excluded_pages);
  }
}

add_action('pre_get_posts', 'custom_search_exclude_pages_by_id');


?>