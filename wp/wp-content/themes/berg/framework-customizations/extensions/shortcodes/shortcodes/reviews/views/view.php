<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


?>


<?php if ( $atts['berg_reviews_type'] == 'review1' ) { ?>
<!-- Wrapper -->
<div class="mid_wrapper">

	<?php foreach ($atts['berg_reviews'] as $review):
        if ( empty( $review['review_image'] ) ) {
            $image = get_template_directory_uri().'/images/no_image.jpg';
        } else {
            $image = fw_resize( $review['review_image']['attachment_id'], '640', '426', true );
        }
    ?>
    <!-- Item -->
    <div class="bordered_block flex_block image_bck bordered_zoom bordered_zoom_three <?php echo esc_attr($atts['berg_block_height']); ?>">
        <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
        <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
        <div class="box_content">
            <h3><?php echo esc_attr($review['review_name']); ?></h3>
            <?php echo esc_attr($review['review_desc']); ?>
        </div>     
    </div>

    <?php endforeach; ?>
    
</div>
<!-- Wrapper End -->    
<?php }; ?>

<?php if ( $atts['berg_reviews_type'] == 'review2' ) { ?>
<!-- Wrapper -->
<div class="mid_wrapper">

    <?php foreach ($atts['berg_reviews'] as $review):
        if ( empty( $review['review_image'] ) ) {
            $image = get_template_directory_uri().'/images/no_image.jpg';
        } else {
            $image = fw_resize( $review['review_image']['attachment_id'], '640', '426', true );
        }
    ?>

    <!-- Item -->
    <div class="bordered_block flex_block image_bck bordered_over <?php echo esc_attr($atts['berg_block_height']); ?>">
        <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
        <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
        <h4 class="title_down"><span><?php echo esc_attr($review['review_name']); ?></span></h4>
        <div class="box_content text-center">
            <h3><?php echo esc_attr($review['review_name']); ?></h3>
            <?php echo esc_attr($review['review_desc']); ?>
        </div>
    </div>

    <?php endforeach; ?>
    
</div>
<!-- Wrapper End -->    
<?php }; ?>

<?php if ( $atts['berg_reviews_type'] == 'review3' ) { ?>
<!-- Wrapper -->
<div class="mid_wrapper">

    <?php foreach ($atts['berg_reviews'] as $review):
        if ( empty( $review['review_image'] ) ) {
            $image = get_template_directory_uri().'/images/no_image.jpg';
        } else {
            $image = fw_resize( $review['review_image']['attachment_id'], '640', '426', true );
        }
    ?>

    <!-- Item -->
    <div class="bordered_block flex_block image_bck bordered_left <?php echo esc_attr($atts['berg_block_height']); ?>">
        
        <?php if ( $atts['over_display'] == 1) {?>
        <!-- Overlay -->
        <div class="over" data-opacity="<?php echo esc_attr($atts['over_opacity']); ?>" data-color="<?php echo esc_attr($atts['over_color']); ?>"></div>
        <?php };?>

        <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
        
        <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
        <div class="box_content">
            <p><?php echo esc_attr($review['review_desc']); ?></p>
            <strong><?php echo esc_attr($review['review_name']); ?></strong>
        </div>     
    </div>


    <?php endforeach; ?>
    
</div>
<!-- Wrapper End -->    
<?php }; ?>

<?php if ( $atts['berg_reviews_type'] == 'review4' ) { ?>
<!-- Wrapper -->
<div class="mid_wrapper">

    <?php foreach ($atts['berg_reviews'] as $review):
        if ( empty( $review['review_image'] ) ) {
            $image = get_template_directory_uri().'/images/no_image.jpg';
        } else {
            $image = fw_resize( $review['review_image']['attachment_id'], '640', '426', true );
        }
    ?>

    <!-- Item -->
    <div class="bordered_block flex_block image_bck bordered_over <?php echo esc_attr($atts['berg_block_height']); ?>">
        <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
        <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
        <div class="box_content text-center">
            <h3><?php echo esc_attr($review['review_name']); ?></h3>
            <?php echo esc_attr($review['review_desc']); ?>
        </div>
    </div>

    <?php endforeach; ?>
    
</div>
<!-- Wrapper End -->    
<?php }; ?>


<?php if ( $atts['berg_reviews_type'] == 'review5' ) { ?>
<!-- Wrapper -->
<div class="mid_wrapper">

    <?php foreach ($atts['berg_reviews'] as $review):
        if ( empty( $review['review_image'] ) ) {
            $image = get_template_directory_uri().'/images/no_image.jpg';
        } else {
            $image = fw_resize( $review['review_image']['attachment_id'], '640', '426', true );
        }
    ?>

    <!-- Item -->
    <div class="bordered_block flex_block image_bck bordered_over bordered_over_blue text-center <?php echo esc_attr($atts['berg_block_height']); ?>">
        <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
        <div class="box_quotes"><span class="fa fa-quote-right"></span></div>
        <h4 class="title_down"><span><?php echo esc_attr($review['review_name']); ?></span></h4>
        <div class="box_content text-center">
            <h3><?php echo esc_attr($review['review_name']); ?></h3>
            <?php echo esc_attr($review['review_desc']); ?>
        </div>
    </div>

    <?php endforeach; ?>
    
</div>
<!-- Wrapper End -->    
<?php }; ?>

<?php if ( $atts['berg_reviews_type'] == 'review6' ) { ?>

<span class="fa fa-quote-right great_quotes"></span>
<!-- Wrapper -->
<div class="review_single_wrapper">
    
    <?php foreach ($atts['berg_reviews'] as $review):
        if ( empty( $review['review_image'] ) ) {
            $image = get_template_directory_uri().'/images/no_image.jpg';
        } else {
            $image = fw_resize( $review['review_image']['attachment_id'], '80', '80', true );
        }
    ?>
    
    <div class="reviews_single_item">
        <p><?php echo esc_attr($review['review_desc']); ?></p>
        <small>- <?php echo esc_attr($review['review_name']); ?></small>
        <img src="<?php echo esc_attr($image); ?>">
        </p>
    </div>


    <?php endforeach; ?>
    
</div>
<!-- Wrapper End -->    
<?php }; ?>