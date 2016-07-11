<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
$berg_wrapper = 'single_wrapper';
if ($atts['height100'] == 1) {
    $berg_wrapper = 'intro_wrapper';
}else {
    $berg_wrapper = 'single_wrapper';
}

?>

<?php if ($atts['height100'] == 1) { ?>
<!--Wrapper-->
<div class="<?php echo esc_attr($berg_wrapper); ?>">

    <?php foreach ($atts['berg_slider'] as $slider): 
        if ( empty( $slider['image'] ) ) {
            $image = get_template_directory_uri().'/images/no_image.jpg';
        } else {
            $image = fw_resize( $slider['image']['attachment_id'], '1200', '', true );
        }
    ?>
        <div class="single_slider_item image_bck" data-image="<?php echo esc_attr($image); ?>">
            <div class="slider_txt">
                <div class="slider_title"><?php echo esc_attr($slider['title']); ?></div>
                <?php echo do_shortcode($slider['text']); ?>
            </div>
        </div>
    <?php endforeach; ?>
    
</div>
<!--Wrapper End-->

<?php }else { ?>
<!--Wrapper-->
<div class="<?php echo esc_attr($berg_wrapper); ?>">

    <?php foreach ($atts['berg_slider'] as $slider): 
        if ( empty( $slider['image'] ) ) {
            $image = get_template_directory_uri().'/images/no_image.jpg';
        } else {
            $image = fw_resize( $slider['image']['attachment_id'], '1200', '', true );
        }
    ?>
        <div class="single_slider_item">
            <img class="item image_bck" src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($slider['title']); ?>">
            <div class="slider_txt">
                <div class="slider_title"><?php echo esc_attr($slider['title']); ?></div>
                <?php echo do_shortcode($slider['text']); ?>
            </div>
        </div>
    <?php endforeach; ?>
    
</div>
<!--Wrapper End-->

<?php } ?>

