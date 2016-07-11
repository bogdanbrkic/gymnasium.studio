<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Berg
 */

get_header(); ?>


<?php 
    if( function_exists('fw_get_db_settings_option') ) {
        /*Header Color or Image Switch*/
        if(fw_get_db_settings_option('header_back') == 'image'){
            $header_back = 'data-image="'.fw_get_db_settings_option('header_img/header_back_img/url').'"';
        }else {
            $header_back = 'data-color="'.fw_get_db_settings_option('header_back_color').'"';
        }
        /*White Text*/
        if(fw_get_db_settings_option('header_wht') == 1) {
            $white = 'white_txt';
        }else {
            $white = '';
        }
        /*Image Overlay*/
        if(fw_get_db_settings_option('header_img/over_display') == 1){

        }
        /*Featured Image*/
        if(fw_get_db_settings_option('header_img/header_fea') == '1' && get_post_thumbnail_id($post->ID) > 0 ){
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'berg_extra_big' );
            $header_back = 'data-image="'.$thumb['0'].'"'; 
        }
    }else{
        /*Default Background*/
        $header_back = 'data-color="#f8f8f8"';
        $white = '';
    }
?>
<!-- Inside Title -->
<div class="inside_title image_bck grey_border  <?php echo esc_attr( $white );?>" <?php echo esc_attr( $header_back );?>>
    
    <?php if (function_exists('fw_get_db_settings_option') && fw_get_db_settings_option('header_img/over_display') == 1 ) {?>
    <?php if (fw_get_db_settings_option('header_back') == 'image' || fw_get_db_settings_option('header_img/header_fea') == '1' ) {?>  
    <!-- Overlay -->
    <div class="over" data-opacity="<?php echo esc_attr(fw_get_db_settings_option('header_img/over_opacity')); ?>" data-color="<?php echo esc_attr(fw_get_db_settings_option('header_img/over_color')); ?>"></div>
    <?php }};?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    <?php the_title(); ?>
                </h1>
            </div>
            <div class="col-md-6 text-right">
            	<?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs('/'); } ?>
            </div>
        </div>
    </div>
</div>
<!-- Inside Title End -->

<?php if ( have_posts() ) : ?>
<?php 
    if( function_exists('fw_get_db_settings_option') ) {
        $berg_blog_width = fw_get_db_settings_option('blog_full_width');
        $blog_sidebar_align = fw_get_db_settings_option('blog_sidebar_align');
        $berg_main_sidebar = "col-md-8";
        $berg_alignment = "berg_sidebar_left";
        $berg_main_sidebar_alignment = "col-md-offset-1";
        

        if ($blog_sidebar_align == "right") {
            $berg_alignment = "berg_sidebar_right col-md-offset-1";
            $berg_main_sidebar_alignment = "";
        }else {
            $berg_main_sidebar_alignment = "col-md-offset-1";
        }
        if ($berg_blog_width == "1") {
            $berg_main_sidebar = "col-md-12";
            $berg_main_sidebar_alignment = "";
            $berg_content_type = "masonry_full";
        }
    }else {
        $berg_main_sidebar = "col-md-8";
        $berg_alignment = "berg_sidebar_left";
        $berg_main_sidebar_alignment = "col-md-offset-1";
        $berg_blog_width = "0";
    }
?>
<!-- Content -->   
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="bordered_block col-sm-12">
                <div class="container">
                    
                    <div class="row">

                        <?php if(!$berg_blog_width == "1") { ?>
                        <!--Sidebar-->
                        <div class="col-md-3 hidden-xs hidden-sm <?php echo esc_attr($berg_alignment); ?>">
                            <?php get_sidebar(); ?>                          
                        </div>
                        <!--Sidebar End-->
                        <?php } ?>
                    
                        <!--Sidebar-->
                        <div class="<?php echo esc_attr($berg_main_sidebar); ?> col-xs-12 <?php echo esc_attr($berg_main_sidebar_alignment); ?>">          

                            <?php while ( have_posts() ) : the_post(); ?>

                                <?php
                                    get_template_part( 'template-parts/content-single', get_post_format() );
                                ?>

                            <?php endwhile; ?>

                            <?php the_posts_navigation(); ?>

                            <?php
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                            ?>

                        </div>
                        <!--Sidebar End-->
                        

                    </div>
                    <!--Row End-->
						
				


                </div>
            </div>
        </div>   
    </div>
</div>
<!-- Content End -->
<?php else : ?>

	<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>


<?php get_footer(); ?>

