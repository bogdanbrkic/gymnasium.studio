<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<!-- Wrapper -->
<div class="mid_wrapper">

        <?php
            global $post;
            $berg_posts_per_page = $atts['post_count'];
            $berg_posts_category = $atts['posts']['0'];
            $berg_term = get_term( $berg_posts_category, 'project-type' );
            $posts = get_posts(
                array(
                    'numberposts'     => $berg_posts_per_page,
                    'post_type'        => 'portfolio',
                    'project-type' => $berg_term->slug,
                )
            );

            foreach($posts as $post):
                setup_postdata( $post ); 
                $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'big-thumb' );
        ?> 

        <!-- Item -->
        <div class="bordered_block flex_block image_bck bordered_zoom height400">
            <div class="image_over image_bck" data-image="<?php echo esc_url($thumbnail_attributes[0]); ?>"></div>
            <a href="<?php echo esc_url( get_permalink($post->ID) ); ?>" class="box_link"></a>
            <div class="box_content">
                <h3><?php the_title(); ?></h3>
                <p><span class="btn"><?php echo esc_html__('See Project','fw') ?></span></p>
            </div>     
        </div>

            
        <?php 
            endforeach; 
            wp_reset_postdata(); 
        ?>

</div>
<!-- Blog End -->