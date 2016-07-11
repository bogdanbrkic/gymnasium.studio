<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}



?>

<!-- Partners -->

<h2><?php echo esc_attr($atts['title']); ?></h2>

<?php echo do_shortcode($atts['text']); ?>

<!-- Wrapper -->
    <div class="partners_wrapper clearfix">

    <?php foreach ($atts['partners'] as $partners):

        if ( empty( $partners['partners_image'] ) ) {
            $image = get_template_directory_uri().'/images/no_image.jpg';
        } else {
            $image = fw_resize( $partners['partners_image']['attachment_id'], '', '', true );
        }

    ?>  
        <div class="partner_item">
            <?php if ( ! empty( $partners['partners_link'] ) ) { ?>
                <a href="<?php echo esc_url($partners['partners_link']); ?>" target="_blank"> 
                    <img src="<?php echo esc_attr($partners['partners_image']['url']); ?>" alt="<?php echo esc_attr($partners['partners_name']); ?>">
                </a>
            <?php }else {?>
                <img src="<?php echo esc_attr($partners['partners_image']['url']); ?>" alt="<?php echo esc_attr($partners['partners_name']); ?>">
            <?php }?>
        </div>


    <?php endforeach; ?>

</div>
<!-- Partners End -->
