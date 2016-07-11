<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
            <div class="col-md-6"><h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'berg' ); ?></h1></div>
            <div class="col-md-6 text-right">
            	<?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs('/'); } ?>
            </div>
        </div>
    </div>
</div>
<!-- Inside Title End -->


<!-- Content -->   
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="bordered_block col-sm-12 grey_border">
                <div class="container">
					
					<div class="row">
                    
                        <!--Sidebar-->
                        <div class="col-md-8 col-xs-12">
                            
                            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'berg' ); ?></p>
							
							<div class="widget">
								<?php get_search_form(); ?>
							</div>

							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>


							<?php
								/* translators: %1$s: smiley */
								$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'berg' ), convert_smilies( ':)' ) ) . '</p>';
								the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
							?>

							<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

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



<?php get_footer(); ?>

