<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
}

$berg_cover = '';
if($atts['cover'] == 1) {
	$berg_cover = 'no-cover';
}

$bg_video_data_attr    = '';
$section_extra_classes = '';
if ( ! empty( $atts['video'] ) ) {
	$filetype           = wp_check_filetype( $atts['video'] );
	$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
	$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
	$bg_video_data_attr = 'data-wallpaper-options="' . fw_htmlspecialchars( json_encode( array( 'source' => array( $filetype => $atts['video'] ) ) ) ) . '"';
	$section_extra_classes .= ' background-video';
}

$section_style   = ( $bg_color || $bg_image ) ? 'style="' . $bg_color . $bg_image . '"' : '';
$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? 'fw-container-fluid' : 'fw-container';

?>



<section <?php if(!empty($atts['section_id'])) { echo 'id="'.esc_attr($atts['section_id']).'"';} ?> class="image_bck <?php echo esc_attr($berg_cover); ?> <?php if ( $atts['berg_white_txt'] == 1 ) { echo "white_txt"; } ?> boxes<?php if ( $atts['is_fullwidth'] == 1  ) { ?> reviews<?php };?> <?php echo esc_attr($section_extra_classes); ?>" <?php echo do_shortcode($section_style); ?> <?php echo do_shortcode($bg_video_data_attr); ?>>
    <div class="container-fluid">
		
		
    	
    	<?php if ( $atts['is_fullwidth'] == 1  ) { ?>
    	<!--Full Width -->
	    	<?php if ( ! empty( $atts['section_title'] ) ) { ?>
					<!-- Title -->
					<h4 class="sml_abs_title wow fadeInUp"><?php echo esc_attr($atts['section_title']); ?></h4>
			<?php };?>
	    	
	       	<?php echo do_shortcode( $content ); ?>
		
		<?php } else {?>
		<!--Fixed Width -->

		<?php if ( ! empty( $atts['section_title'] ) ) { ?>
				<!-- Title -->
				<h4 class="sml_abs_title wow fadeInUp"><?php echo esc_attr($atts['section_title']); ?></h4>
		<?php };?>
		<div class="row">
            <div class="col-md-12 bordered_block <?php echo esc_attr($atts['berg_section_text_align']); ?> <?php echo esc_attr($atts['berg_block_border']); ?>">

				<?php if ( $atts['over_display'] == 1  ) { ?>
		    	<!-- Overlay -->
		        <div class="over" data-opacity="<?php echo esc_attr($atts['over_opacity']); ?>" data-color="<?php echo esc_attr($atts['over_color']); ?>"></div>
		        <?php };?>

                <div class="container">
					<?php echo do_shortcode( $content ); ?>
                </div>
            </div>
        </div>
       	<?php } ?>

    </div>
</section>

