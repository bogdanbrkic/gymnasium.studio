<?php
/**
 * Template Name: One Page Template
 */ 
get_header(); ?>


<!--Intro-->
<section class="intro" >

    <!-- Down Arrow -->
    <a href="<?php echo esc_url( fw_get_db_settings_option('berg_slider_arrow_link') );  ?>" class="down_block go"><i class="fa fa-angle-down"></i></a>

    <!-- Wrapper -->
    <div class="intro_wrapper">

    	<?php foreach (fw_get_db_settings_option('berg_slider') as $slider):
	        if ( empty( $slider['berg_slider_image'] ) ) {
	            $image = get_template_directory_uri().'/images/no_image.jpg';
	        } else {
	            $image = fw_resize( $slider['berg_slider_image']['attachment_id'], '1400', '', true );
	        }
	    ?>

	        <!-- Item -->
	        <div class="intro_item">

	            <?php if( $slider['over_display'] == 1) { ?>
			    <!-- Overlay -->
			    <div class="over" data-opacity="<?php echo esc_attr($slider['over_opacity']); ?>" data-color="<?php echo esc_attr($slider['over_color']); ?>"></div>
			    <?php };?>

			    <?php if( $slider['slider_video_switch'] == 1) { ?>
			    <!-- Video -->
				<video id="video_background" loop="true" autoplay="autoplay" preload="auto">
					<source type="video/mp4" src="<?php echo esc_attr($slider['slider_video_mp4']); ?>"></source>
					<source type="video/webm" src="<?php echo esc_attr($slider['slider_video_wemb']); ?>"></source>
				</video>
			    <?php };?>

	            <!-- Image -->
	            <div class="into_back image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
	            
	            <!-- Text -->
	            <div class="text_content tc_<?php echo esc_attr($slider['berg_slider_image_layout']); ?>">   
	                <div class="intro_text <?php echo esc_attr($slider['berg_slider_image_layout']); ?> <?php echo esc_attr($slider['berg_slider_text_align']); ?> text_up" data-color="<?php echo esc_attr($slider['berg_slider_title_bold_color']); ?>">
	                    <div class="great_title"><?php echo do_shortcode($slider['berg_slider_title']); ?></div>
	                    <div class="great_subtitle"><?php echo do_shortcode($slider['berg_slider_subtitle']); ?></div>
	                    <div class="into_txt hidden-xs"><?php echo do_shortcode($slider['berg_slider_text']); ?></div>
	                    <div>
	                    	<?php foreach ($slider['berg_slider_btns'] as $btns): ?>
	                    	<a href="<?php echo esc_url(get_home_url('/').'/'.$btns['berg_slider_btns_link']); ?>" class="btn btn-white"><?php echo esc_attr($btns['berg_slider_btns_name']); ?></a>
	                    	<?php endforeach; ?>
	                    </div>
	                </div>           
	            </div>  
	        </div>

		<?php endforeach; ?>


    </div>
    <!-- Wrapper End -->
    
</section>

<!-- Intro End -->

<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php
			get_template_part( 'template-parts/content_onepage', get_post_format() );
		?>

	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>
<?php else : ?>



<?php endif; ?>


<?php get_footer(); ?>

