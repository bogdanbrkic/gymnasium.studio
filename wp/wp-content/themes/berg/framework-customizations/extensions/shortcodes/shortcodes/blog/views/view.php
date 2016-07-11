<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<?php if ($atts['post_type'] == 'post_full' ) { ?>
<!-- Blog -->
<h2><?php echo esc_attr($atts['title']); ?></h2>

<!-- Wrapper -->
<div class="mid_wrapper">
    
        <?php
            global $post;
            $berg_posts_per_page = $atts['post_count'];
            $berg_posts_category = $atts['posts']['0'];
            $posts = get_posts(
                array(
                    'numberposts'     => $berg_posts_per_page,
                    'category' => $berg_posts_category 
                )
            );


            foreach($posts as $post):
                setup_postdata( $post ); 
                $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'berg_big-thumb' );
        ?> 
        
        <!-- Item -->
        <div class="post-snippet">
            <a href="<?php echo esc_url( get_permalink($post->ID) ); ?>" class="bordered_wht_border post_photo">
                <img alt="<?php the_title(); ?>" src="<?php echo esc_url($thumbnail_attributes[0]); ?>" />
            </a>
            <div class="inner">
                <a href="<?php echo esc_url( get_permalink($post->ID) ); ?>">
                    <h4 class="title"><?php the_title(); ?></h4>
                    <span class="date"><?php echo get_the_date('m/d/Y'); ?></span>
                </a>
                <?php the_excerpt(); ?>
            </div>
        </div>

            
        <?php 
            endforeach; 
            wp_reset_postdata(); 
        ?>

</div>
<!-- Blog End -->
<?php } ?>


<?php if ($atts['post_type'] == 'post_titles' ) { ?>
<!-- Blog -->
<h3><?php echo esc_attr($atts['title']); ?></h3>
    
        <ul class="list-unstyled">
        <?php
            global $post;
            $berg_posts_per_page = $atts['post_count'];
            $berg_posts_category = $atts['posts']['0'];
            $posts = get_posts(
                array(
                    'numberposts'     => $berg_posts_per_page,
                    'category'    => $berg_posts_category,
                )
            );

            foreach($posts as $post):
                setup_postdata( $post ); 
        ?> 
        
            <li>
                <a href="<?php echo esc_url( get_permalink($post->ID) ); ?>"><?php the_title(); ?></a>
                <span class="date"><?php echo get_the_date('m/d/Y'); ?></span>
            </li>
                    
        <?php 
            endforeach; 
            wp_reset_postdata(); 
        ?>
        </ul>

<!-- Blog End -->
<?php } ?>