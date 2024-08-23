<?php 
/* Template Name: Page Inner Serviço  */ 
get_header(); 
$fields = get_fields();

foreach($fields['inner_components'] as $key => $layout){
 //count($layout)
 switch ($layout['acf_fc_layout']) {
   case 'hero' : 
     get_template_part( 'template-parts/inner_hero','',$layout);
   break;
   case 'inner_header' : 
       get_template_part( 'template-parts/inner_header','',$layout);
     break;
     case 'inner_tabs' : 
       get_template_part( 'template-parts/inner_tabs','',$layout);
     break;
     case 'cta' :
       get_template_part( 'template-parts/cta','',$layout);
     break;

     case 'slick_plataformas':
       get_template_part( 'template-parts/slick_plataformas','',$layout);
     break;
 
   default:
     break;
 }
}

get_footer(); ?>