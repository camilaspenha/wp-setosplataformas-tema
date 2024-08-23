<?php

/* theme text domain no body */
function minha_classe_personalizada_body_class($classes) {
    $tema_ativo = wp_get_theme();
    $slug_do_tema = $tema_ativo->get('TextDomain');
  
    $classes[] = $slug_do_tema;
    return $classes;
  }
  add_filter('body_class', 'minha_classe_personalizada_body_class');

  /* custom site title */
 function my_custom_site_title($title) {
  if (is_home() || is_front_page()) {
      $title = 'SETOS Plataformas | Alugue Plataformas Elevatórias';
  } elseif (is_single()) {
      $title = get_the_title() . ' | ' . get_bloginfo('name');
  } elseif (is_category()) {
      $title = single_cat_title('', false) . ' | ' . get_bloginfo('name');
  } else {
      $title .=get_the_title() . ' | ' . get_bloginfo('name');
  }
  return $title;
}
add_filter('pre_get_document_title', 'my_custom_site_title');

/* custom favicon */
function my_custom_favicon() {
echo '<link rel="icon" type="image/svg" href="' . get_template_directory_uri() . '/assets/img/icon.svg">';
}
add_action('wp_head', 'my_custom_favicon');

/* customizar */
add_action( 'customize_register', function( $wp_customize ) {

    /*
    Redes Sociais
    ----------------------------------------------------------------*/

    $wp_customize->add_section( 'tema-redes-sociais' , array(
    'title'      => "Redes Sociais",
        'priority'   => 40,
    ) );
  
        //Facebook
        $wp_customize->add_setting( 'social-facebook', array(
            'default'           => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        ) );
        $wp_customize->add_control( 'social-facebook', array(
            'label'    => "Facebook",
            'description' => '',
            'section'  => 'tema-redes-sociais',
            'type' => 'text',
        ) );
  
        //Instagram
        $wp_customize->add_setting( 'social-instagram', array(
            'default'           => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        ) );
        $wp_customize->add_control( 'social-instagram', array(
            'label'    => "Instagram",
            'description' => '',
            'section'  => 'tema-redes-sociais',
            'type' => 'text',
        ) );
        //Linkedin
        $wp_customize->add_setting( 'social-linkedin', array(
            'default'           => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        ) );
        $wp_customize->add_control( 'social-linkedin', array(
            'label'    => "Linkedin",
            'description' => '',
            'section'  => 'tema-redes-sociais',
            'type' => 'text',
        ) );
            
        /*
        Contatos
        ----------------------------------------------------------------*/
        $wp_customize->add_section( 'tema-contatos' , array(
            'title'      => "Contatos",
            'priority'   => 40,
        ) );
            //Whatsapp
            $wp_customize->add_setting( 'whatsapp', array(
                'default'           => '',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
            ) );
            $wp_customize->add_control( 'whatsapp', array(
                'label'    => "Whatsapp",
                'description' => '',
                'section'  => 'tema-contatos',
                'type' => 'text',
            ) );

            //Whatsapp API
            $wp_customize->add_setting( 'whatsapp-api', array(
                'default'           => '',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
            ) );
            $wp_customize->add_control( 'whatsapp-api', array(
                'label'    => "Whatsapp API",
                'description' => '',
                'section'  => 'tema-contatos',
                'type' => 'text',
            ) );

            //E-mail
            $wp_customize->add_setting( 'email', array(
                'default'           => '',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
            ) );
            $wp_customize->add_control( 'email', array(
                'label'    => "E-mail",
                'description' => '',
                'section'  => 'tema-contatos',
                'type' => 'text',
            ) );

        /*
        Footer
        ----------------------------------------------------------------*/
        $wp_customize->add_section( 'tema-footer' , array(
            'title'      => "Footer",
            'priority'   => 40,
        ) );
            //Slogan
            $wp_customize->add_setting( 'slogan', array(
                'default'           => '',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
            ) );
            $wp_customize->add_control( 'slogan', array(
                'label'    => "Slogan",
                'description' => '',
                'section'  => 'tema-footer',
                'type' => 'text',
            ) );   
        
            //Copy
            $wp_customize->add_setting( 'copy', array(
                'default'           => '',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
            ) );
            $wp_customize->add_control( 'copy', array(
                'label'    => "Copyright",
                'description' => '',
                'section'  => 'tema-footer',
                'type' => 'text',
            ) );    

            //Razão Social
            $wp_customize->add_setting( 'razao-social', array(
                'default'           => '',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
            ) );
            $wp_customize->add_control( 'razao-social', array(
                'label'    => "Razão Social",
                'description' => '',
                'section'  => 'tema-footer',
                'type' => 'text',
            ) ); 
            //CNPJ
            $wp_customize->add_setting( 'cnpj', array(
                'default'           => '',
                'sanitize_callback' => 'wp_filter_nohtml_kses'
            ) );
            $wp_customize->add_control( 'cnpj', array(
                'label'    => "CNPJ",
                'description' => '',
                'section'  => 'tema-footer',
                'type' => 'text',
            ) );  
});
?>