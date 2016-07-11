<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}


?>
<div class="simple_title <?php echo esc_attr($atts['berg_slider_text_align']); ?>">
    <h3 class="wow fadeInUp"><?php echo esc_attr($atts['berg_title']); ?></h3>
    <h4 class="wow fadeInUp subtitle" data-wow-delay="0.4s"><?php echo esc_attr($atts['berg_subtitle']); ?></h4>
    <div class="simple_stat" data-color="<?php echo esc_attr($atts['berg_color']); ?>">

        <?php foreach ($atts['berg_title_stat'] as $stat): ?>
            <div class="stat_item"><b><?php echo esc_attr($stat['berg_numbers']); ?></b> <span><?php echo esc_attr($stat['berg_first_line']); ?> <br /><?php echo esc_attr($stat['berg_second_line']); ?></span></div>
        <?php endforeach; ?>

    </div>
</div>
  

