<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


?>

<?php if ( !empty ($atts['berg_title']) ) { ?>
<h3><?php echo esc_attr($atts['berg_title']); ?></h3>
<?php } ?>

<div class="contacts_text">
	<?php foreach ($atts['berg_contacts'] as $contacts): ?>	
		<span class="contacts_ti <?php echo esc_attr($contacts['berg_contacts_icon']); ?>"></span>
		<?php echo do_shortcode($contacts['berg_contacts_text']); ?>
	<?php endforeach; ?>
</div>
<?php  
	if ( $atts['berg_newsletter'] == 1 && function_exists( 'mc4wp_form' ) ) {
		mc4wp_form();
	}
?>
    
