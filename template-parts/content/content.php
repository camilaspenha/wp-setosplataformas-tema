<?php if (is_search()) { ?>    
    <div class="card mb-5">
        <div class="card-body p-3">
            <p class="mb-0"><i class="fas fa-search me-1"></i> Resultado da busca para: <span class="text-primary"><?php echo get_search_query(); ?></span></p>
        </div>
    </div>
    <?php } ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
<section>
<div <?php post_class(array('card', 'mb-5')); ?> id="post-<?php the_ID(); ?>">
    <?php if ( has_post_thumbnail() ) : ?>
    <?php 

        $thumbnail = get_the_post_thumbnail_url();
        $image_id = get_post_thumbnail_id(get_the_ID());
        $alt_text = get_post_meta($image_id , '_wp_attachment_image_alt', true);

    ?>
    <a href="<?php echo esc_url( get_permalink() ); ?>"><img src="<?php echo esc_url($thumbnail); ?>" class="card-img-top fadein-img" alt="<?php echo $alt_text; ?>" title="<?php echo $alt_text; ?>"></a>
    <?php endif; ?>
    <div class="card-body p-4">
        <h3 class="card-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
        <p class="text-muted mb-4"><small><?php echo esc_html_e('Published on', 'wp-emawebdesign'); ?> <?php echo get_the_date(); ?></small></p>
        <?php the_excerpt(); ?>
        <div class="button">
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn_primary" role="button">Acesse <i class="fa-solid fa-book-open-reader ms-2"></i></a>
        </div>
    </div>
</div>
</section>
<div class="clearfix"></div>
<?php
endwhile;
?>
<?php if ( $GLOBALS['wp_query']->max_num_pages > 1 ) { ?>
<div class="card mb-5">
    <div class="card-body p-3"> 	
        <nav class="pagination">
            <?php
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( 'Previous', 'wp-emawebdesign' ),
                'next_text' => __( 'Newests', 'wp-emawebdesign' )
            ));
            ?>
            <?php wp_link_pages(); ?>
        </nav>
    </div>
</div>
<?php } ?>
<?php
else :
?>
<div class="card mb-5">
    <div class="card-body p-4">
        <p class="text-muted mb-4"><i class="fa-solid fa-circle-exclamation me-1"></i> <?php echo esc_html_e('No articles found.', 'wp-emawebdesign'); ?></p>
        <p class="text-center"><?php echo esc_html_e('Try a new search.', 'wp-emawebdesign'); ?></p>
    </div>
</div>
<?php
endif;
?>