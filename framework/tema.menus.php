<?php
 /*
	* Main Nav Menu
  */
  function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );
  
  /*
   * Footer Links
   */
  function wpb_footer_new_menu_links() {
    register_nav_menu('my-footer-menu-links',__( 'My Footer Menu Links' ));
  }
  add_action( 'init', 'wpb_footer_new_menu_links' );
  
  /*
   * Footer Products
   */
   function wpb_footer_new_menu_products() {
    register_nav_menu('my-footer-menu-products',__( 'My Footer Menu Products' ));
  }
  add_action( 'init', 'wpb_footer_new_menu_products' );