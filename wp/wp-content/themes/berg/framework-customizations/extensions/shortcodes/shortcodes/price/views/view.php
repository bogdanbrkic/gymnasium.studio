<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}


?>

<h2><?php echo esc_attr($atts['title']); ?></h2>

<div class="row">
    
    <?php foreach ($atts['berg_price'] as $price): ?>

        <div class="col-md-4 col-sm-6">
            <div class="pricing-table text-center <?php if($price['color_switch']==1) {echo "image_bck";} ?> <?php if($price['white_txt']==1) {echo "white_txt";} ?>" data-color="<?php if($price['color_switch']==1) {echo esc_attr($price['color']);} ?>">
                <h5><?php echo esc_attr($price['price_name']); ?></h5>
                <span class="price"><?php echo esc_attr($price['price_value']); ?></span>
                <p class="lead"><?php echo esc_attr($price['price_subtitle']); ?></p>
                <a class="btn btn-default" href="<?php echo esc_url(get_home_url('/').'/'.$price['price_btn_link']); ?>"><?php echo esc_attr($price['price_btn_name']); ?></a>
                <?php echo do_shortcode($price['price_text']); ?>
            </div>
            <!--end of pricing table-->
        </div>

    <?php endforeach; ?>

</div>

