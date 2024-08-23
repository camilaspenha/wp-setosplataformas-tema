
<?php
function criar_Produto_cpt() {

  $labels = array(
      'name' => _x('Produtos', 'Post Type General Name', 'text_domain'),
      'singular_name' => _x('Produto', 'Post Type Singular Name', 'text_domain'),
      'menu_name' => __('Produtos', 'text_domain'),
      'name_admin_bar' => __('Produto', 'text_domain'),
      'archives' => __('Arquivo de Produtos', 'text_domain'),
      'attributes' => __('Atributos de Produto', 'text_domain'),
      'parent_item_colon' => __('Produto Pai:', 'text_domain'),
      'all_items' => __('Todos os Produtos', 'text_domain'),
      'add_new_item' => __('Adicionar Novo Produto', 'text_domain'),
      'add_new' => __('Adicionar Novo', 'text_domain'),
      'new_item' => __('Novo Produto', 'text_domain'),
      'edit_item' => __('Editar Produto', 'text_domain'),
      'update_item' => __('Atualizar Produto', 'text_domain'),
      'view_item' => __('Ver Produto', 'text_domain'),
      'view_items' => __('Ver Produtos', 'text_domain'),
      'search_items' => __('Procurar Produto', 'text_domain'),
      'not_found' => __('Não encontrado', 'text_domain'),
      'not_found_in_trash' => __('Não encontrado na lixeira', 'text_domain'),
      'featured_image' => __('Imagem Destacada', 'text_domain'),
      'set_featured_image' => __('Definir imagem destacada', 'text_domain'),
      'remove_featured_image' => __('Remover imagem destacada', 'text_domain'),
      'use_featured_image' => __('Usar como imagem destacada', 'text_domain'),
      'insert_into_item' => __('Inserir no Produto', 'text_domain'),
      'uploaded_to_this_item' => __('Enviado para este Produto', 'text_domain'),
      'items_list' => __('Lista de Produtos', 'text_domain'),
      'items_list_navigation' => __('Navegação da lista de Produtos', 'text_domain'),
      'filter_items_list' => __('Filtrar lista de Produtos', 'text_domain'),
  );
  
  $args = array(
      'label' => __('Produto', 'text_domain'),
      'description' => __('Um tipo de post para Produtos', 'text_domain'),
      'labels' => $labels,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
      'taxonomies' => array('service', 'category', 'post_tag'),
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 5,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
      'can_export' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'publicly_queryable' => true,
      'capability_type' => 'post',
  );
  
  register_post_type('Produto', $args);
}

add_action('init', 'criar_Produto_cpt', 0);
