<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


?>


<div class="simple_title">                       
    <div class="simple_block white_txt">
        <h3 class="wow fadeInUp"><?php echo esc_attr($atts['berg_time_title']); ?></h3>
        <h4 class="wow fadeInUp subtitle" data-wow-delay="0.4s"><?php echo esc_attr($atts['berg_time_subtitle']); ?></h4>
        
        <!-- Stat -->
        <div class="simple_stat clearfix" data-color="<?php echo esc_attr($atts['berg_time_days_color']); ?>">
            

			<?php foreach ($atts['berg_time'] as $time): ?>	

		    	<div class="stat_item">
	                <b><?php echo esc_attr($time['day_name']); ?></b>
	                <?php echo esc_attr($time['day_start']); ?>
	                <br />
	                <?php echo esc_attr($time['day_end']); ?>
	            </div>

			<?php endforeach; ?>

           
        </div>
    </div>               
</div>




    
