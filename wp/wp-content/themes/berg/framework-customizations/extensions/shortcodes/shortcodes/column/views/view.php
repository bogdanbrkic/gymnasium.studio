<?php if (!defined('FW')) die('Forbidden');

$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
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
if ( $atts['berg_bordered'] ==1 ) {
	$berg_bordered = "bordered_block no-padding";
}else {
	$berg_bordered = "";
}
?>




<?php if ( $atts['berg_column_padding'] == 1  ) { ?>

<div class="<?php echo esc_attr($class); ?> image_bck bordered_block <?php echo esc_attr($atts['berg_block_border']); ?> <?php if ( $atts['berg_white_txt'] == 1 ) { echo "white_txt"; } ?>" <?php echo do_shortcode($section_style); ?> <?php echo do_shortcode($bg_video_data_attr); ?> >
	
	<?php if ( $atts['over_display'] == 1  ) { ?>
		<!-- Overlay -->
    	<div class="over" data-opacity="<?php echo esc_attr($atts['over_opacity']); ?>" data-color="<?php echo esc_attr($atts['over_color']); ?>"></div>
    <?php };?>
    <div class="simple_block">	
		<?php echo do_shortcode($content); ?>
    </div>

	
</div>

<?php } else {?>
<div class="<?php echo esc_attr($class); ?> <?php echo esc_attr($berg_bordered); ?>">
	<?php echo do_shortcode($content); ?>
</div>
<?php } ?>