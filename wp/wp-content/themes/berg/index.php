<?php
/**
 * The main template file.
 * @link https://codex.wordpress.org/Template_Hierarchy
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
                    <?php if(is_author()){

                        printf( esc_html__( 'All posts by %s', 'berg' ), get_the_author() );

                    } else if(is_category()) {

                        printf( esc_html__( 'Category: %s', 'berg' ), single_cat_title( '', false ) );

                    } else if(is_date()){

                        if ( is_day() ) :
                            printf( esc_html__( 'Daily Archives: %s', 'berg' ), get_the_date() );

                        elseif ( is_month() ) :
                            printf( esc_html__( 'Monthly Archives: %s', 'berg' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'berg' ) ) );

                        elseif ( is_year() ) :
                            printf( esc_html__( 'Yearly Archives: %s', 'berg' ), get_the_date( _x( 'Y', 'yearly archives date format', 'berg' ) ) );

                        else :
                            _e( 'Archives', 'berg' );

                        endif;
                    } else {
                        wp_title(" | ",true); 
                    } ?>
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

<!-- Content -->   
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="bordered_block col-sm-12 grey_border">
                <div class="container">
					
					<div class="row">
                    
                        <!--Sidebar-->
                        <div class="col-md-8 col-xs-12">
                            
                            

                            <?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>

								<?php

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_format() );
								?>

							<?php endwhile; ?>

							<?php the_posts_navigation(); ?>

                        </div>
                        <!--Sidebar End-->
                        


                        <!--Sidebar-->
                        <div class="col-md-3 hidden-xs hidden-sm col-md-offset-1">
                            

                            <?php get_sidebar(); ?>                          
                            

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
