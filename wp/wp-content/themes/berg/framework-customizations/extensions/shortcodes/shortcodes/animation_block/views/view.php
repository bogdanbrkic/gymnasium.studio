<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


?>

<?php if ( $atts['berg_team_type'] == 'team1' ) { ?>
<!--Wrapper-->
    <div class="mid_wrapper">

        <?php foreach ($atts['animation_block'] as $anblock):
	        if ( empty( $anblock['image'] ) ) {
	            $image = get_template_directory_uri().'/images/no_image.jpg';
	        } else {
	            $image = fw_resize( $anblock['image']['attachment_id'], '640', '426', true );
	        }
	    ?>
			<!--Item-->
	        <div class="bordered_block flex_block image_bck bordered_zoom <?php echo esc_attr($atts['berg_block_height']); ?>">
	        	<?php if (! empty( $anblock['link'] )) {?>
                	<a href="<?php echo esc_url( $anblock['link'] ); ?>" class="box_link"></a>
                <?php } ?>
	            <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
	            <div class="box_content text-center">
	                <div class="bottom_title hidden_title">
	                    <h3><?php echo esc_attr($anblock['title']); ?></h3>
	                    <p><?php echo esc_attr($anblock['subtitle']); ?></p>
	                </div> 
	            </div>     
	        </div>

		<?php endforeach; ?>

    </div>
<?php }; ?>


<?php if ( $atts['berg_team_type'] == 'team2' ) { ?>
<!--Wrapper-->
    <div class="mid_wrapper">

        <?php foreach ($atts['animation_block'] as $anblock):
	        if ( empty( $anblock['image'] ) ) {
	            $image = get_template_directory_uri().'/images/no_image.jpg';
	        } else {
	            $image = fw_resize( $anblock['image']['attachment_id'], '640', '426', true );
	        }
	    ?>

	        <!-- Item -->
            <div class="bordered_block bordered_left text-left flex_block image_bck <?php echo esc_attr($atts['berg_block_height']); ?>">

                <?php if ( $atts['over_display'] == 1) {?>
                <!-- Overlay -->
                <div class="over" data-opacity="<?php echo esc_attr($atts['over_opacity']); ?>" data-color="<?php echo esc_attr($atts['over_color']); ?>"></div>
                <?php };?>

                <div class="over" data-opacity="0" data-color="#000"></div>
                <?php if (! empty( $anblock['link'] )) {?>
                	<a href="<?php echo esc_url( $anblock['link'] ); ?>" class="box_link"></a>
                <?php } ?>
                <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
                <div class="adds_txt sport_txt">
                    <h5 class="relative"><?php echo esc_attr($anblock['title']); ?></h5>
                    <p><?php echo esc_attr($anblock['subtitle']); ?></p>
                    <span class="sport_price"><?php echo esc_attr($anblock['desc']); ?></span>  
                </div> 
            </div>

		<?php endforeach; ?>

    </div>
<?php }; ?>

<?php if ( $atts['berg_team_type'] == 'team3' ) { ?>
<!--Wrapper-->
    <div class="mid_wrapper">

        <?php foreach ($atts['animation_block'] as $anblock):
	        if ( empty( $anblock['image'] ) ) {
	            $image = get_temple_directory_uri().'/images/no_image.jpg';
	        } else {
	            $image = fw_resize( $anblock['image']['attachment_id'], '640', '426', true );
	        }
	    ?>
			<!-- Item -->
			<div class="bordered_block flex_block image_bck bordered_over <?php echo esc_attr($atts['berg_block_height']); ?>">
				<?php if (! empty( $anblock['link'] )) {?>
                	<a href="<?php echo  esc_url(get_home_url('/').'/'.$anblock['link'] ); ?>" class="box_link"></a>
                <?php } ?>
                <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
                <div class="box_content text-center">
                    <div class="icon"><span class="<?php echo esc_attr($anblock['icon']); ?>"></span></div>
                    <h3><?php echo esc_attr($anblock['title']); ?></h3>
                    <h5 class="subtitle"><?php echo esc_attr($anblock['subtitle']); ?></h5>
                    <?php echo esc_attr($anblock['desc']); ?>
                </div>     
            </div>


		<?php endforeach; ?>

    </div>
<?php }; ?>

<?php if ( $atts['berg_team_type'] == 'team4' ) { ?>
<!--Wrapper-->
    <div class="mid_wrapper">

        <?php foreach ($atts['animation_block'] as $anblock):
	        if ( empty( $anblock['image'] ) ) {
	            $image = get_template_directory_uri().'/images/no_image.jpg';
	        } else {
	            $image = fw_resize( $anblock['image']['attachment_id'], '640', '426', true );
	        }
	    ?>
			
			<!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom bordered_zoom_three bordered_zoom_gold <?php echo esc_attr($atts['berg_block_height']); ?>">
                <?php if (! empty( $anblock['link'] )) {?>
                	<a href="<?php echo esc_url( $anblock['link'] ); ?>" class="box_link"></a>
                <?php } ?>
                <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
                <div class="box_content">
                    <h3><?php echo esc_attr($anblock['title']); ?></h3>
                    <h5 class="subtitle"><?php echo esc_attr($anblock['subtitle']); ?></h5>
                    <?php echo esc_attr($anblock['desc']); ?> 
                </div>     
            </div>

		<?php endforeach; ?>

    </div>
<?php }; ?>


<?php if ( $atts['berg_team_type'] == 'team5' ) { ?>
<!--Wrapper-->
    <div class="mid_wrapper">

        <?php foreach ($atts['animation_block'] as $anblock):
	        if ( empty( $anblock['image'] ) ) {
	            $image = get_template_directory_uri().'/images/no_image.jpg';
	        } else {
	            $image = fw_resize( $anblock['image']['attachment_id'], '640', '426', true );
	        }
	    ?>

            <!-- Item -->
            <div class="bordered_block flex_block grey_border doctor_item bordered_over bordered_over_blue text-center image_bck <?php echo esc_attr($atts['berg_block_height']); ?>">
                <?php if (! empty( $anblock['link'] )) {?>
                	<a href="<?php echo esc_url( $anblock['link'] ); ?>" class="box_link"></a>
                <?php } ?>
                <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>" data-blend="multiply" data-position="left" data-color="#f4f4f4"></div>
                <div class="box_content text-center">
                    <h3><?php echo esc_attr($anblock['title']); ?></h3>
                    <h5 class="subtitle"><?php echo esc_attr($anblock['subtitle']); ?></h5>
                    <?php echo esc_attr($anblock['desc']); ?>
                </div>     
            </div>

		<?php endforeach; ?>

    </div>
<?php }; ?>


<?php if ( $atts['berg_team_type'] == 'team6' ) { ?>
<!--Wrapper-->
    <div class="mid_wrapper">

        <?php foreach ($atts['animation_block'] as $anblock):
            if ( empty( $anblock['image'] ) ) {
                $image = get_template_directory_uri().'/images/no_image.jpg';
            } else {
                $image = fw_resize( $anblock['image']['attachment_id'], '640', '426', true );
            }
        ?>
            
            <!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom <?php echo esc_attr($atts['berg_block_height']); ?>">
                <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
                <?php if (! empty( $anblock['link'] )) {?>
                    <a href="<?php echo esc_url( $anblock['link'] ); ?>" class="box_link"></a>
                <?php } ?>
                <div class="box_content">
                    <h3><?php echo esc_attr($anblock['title']); ?></h3>
                    <p><span class="btn"><?php echo esc_attr($anblock['subtitle']); ?></span></p>
                </div>     
            </div>


        <?php endforeach; ?>

    </div>
<?php }; ?>

<?php if ( $atts['berg_team_type'] == 'team7' ) { ?>
<!--Wrapper-->
    <div class="mid_wrapper">

        <?php foreach ($atts['animation_block'] as $anblock):
            if ( empty( $anblock['image'] ) ) {
                $image = get_template_directory_uri().'/images/no_image.jpg';
            } else {
                $image = fw_resize( $anblock['image']['attachment_id'], '640', '426', true );
            }
        ?>
            <!-- Item -->
            <div class="bordered_block bordered_over <?php echo esc_attr($atts['berg_block_height']); ?>">
                <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
                <h4><span><?php echo esc_attr($anblock['title']); ?></span></h4>
                <div class="box_content text-center">
                    <div class="icon"><span class="ti-thought"></span></div>
                    <h3><?php echo esc_attr($anblock['title']); ?></h3>
                    <?php echo esc_attr($anblock['desc']); ?> 
                </div>     
            </div>


        <?php endforeach; ?>

    </div>
<?php }; ?>

    
