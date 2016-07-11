<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>

<?php if(!$atts['icon_box_title']==""){ ?>
<h3 class="text-center"><?php echo esc_attr($atts['icon_box_title']); ?></h3>
<?php } ?>
<!-- Wrapper -->
<div class="mid_wrapper">

	<?php foreach ($atts['berg_icon_box'] as $icon): ?>	

	    <!-- Item -->
	    <div class="mid_box text-center">
	        <div class="icon"><span class="<?php echo esc_attr($icon['icon']); ?>"></span></div>
	        
	        <h5><?php echo esc_attr($icon['title']); ?></h5>
	        
	        <?php echo esc_attr($icon['content']); ?>
	    </div>


	<?php endforeach; ?>

   
    
</div>
<!-- Wrapper End -->