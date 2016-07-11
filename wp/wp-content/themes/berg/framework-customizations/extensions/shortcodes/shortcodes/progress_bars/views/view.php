<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>
	<?php if (!empty($atts['title'])) { ?>
		<h4 class="subtitle"><?php echo esc_attr($atts['title']); ?></h4>
	<?php } ?>
	
	<?php foreach ($atts['bar_add'] as $bar): ?>
		
		<?php if ($atts['thin'] == 1) { ?>
			<span><?php echo esc_attr($bar['title']); ?></span>
            <div class="progress thin_progress <?php if ($atts['rounded'] == 1) { echo "rounded";} ?>"> 
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo esc_attr($bar['value']); ?>" data-color="<?php echo esc_attr($atts['bar_color']); ?>" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
		<?php }else{ ?>
            <div class="progress <?php if ($atts['rounded'] == 1) { echo "rounded";} ?>"> 
	          <div class="progress-bar <?php echo esc_attr($atts['berg_slider_text_align']); ?>" data-color="<?php echo esc_attr($atts['bar_color']); ?>" role="progressbar" aria-valuenow="<?php echo esc_attr($bar['value']); ?>" aria-valuemin="0" aria-valuemax="100">
	            <span><?php echo esc_attr($bar['title']); ?></span>
	          </div>
	        </div>
		<?php } ?>

	<?php endforeach; ?>
	<div class="bar_end"></div>
