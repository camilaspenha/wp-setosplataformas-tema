<?php 
/* Template Name: Page Home */ 
get_header(); 
$fields = get_fields();?>

<?php foreach($fields['home_components'] as $key => $layout){
  switch ($layout['acf_fc_layout']) { 
    case 'hero' : 
      get_template_part( 'template-parts/hero','',$layout);
    break;
    case 'slick_plataformas':
      get_template_part( 'template-parts/slick_plataformas','',$layout);
    break;
    case 'manutencao' :
      get_template_part( 'template-parts/home_manutencao','',$layout);
    break;
    case 'treinamento' :
      get_template_part( 'template-parts/treinamento','',$layout);
    break;
    case 'cta' :
      get_template_part( 'template-parts/cta','',$layout);
    break;
    case 'exibir_contato':
      if($layout['contato'] === 'Exibir')
        get_template_part( 'template-parts/contato');
    break;
    case 'logos' :
      get_template_part( 'template-parts/logos','',$layout);
    break;

    default:
    break;
    }
  }
?>

<?php get_footer(); ?>