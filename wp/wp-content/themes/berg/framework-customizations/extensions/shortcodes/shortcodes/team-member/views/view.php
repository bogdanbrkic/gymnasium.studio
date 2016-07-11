<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


?>

<?php if ( $atts['berg_team_type'] == 'team1' ) { ?>
<!--Wrapper-->
    <div class="mid_wrapper">

        <?php foreach ($atts['berg_team'] as $team):
	        if ( empty( $team['team_image'] ) ) {
	            $image = get_template_directory_uri().'/images/no_image.jpg';
	        } else {
	            $image = fw_resize( $team['team_image']['attachment_id'], '640', '426', true );
	        }
	    ?>
			<!--Item-->
	        <div class="bordered_block flex_block image_bck bordered_zoom <?php echo esc_attr($atts['berg_block_height']); ?>">
	        	<?php if (! empty( $team['team_link'] )) {?>
                	<a href="<?php echo esc_url( $team['team_link'] ); ?>" class="box_link"></a>
                <?php } ?>
	            <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
	            <div class="box_content text-center">
	                <div class="bottom_title hidden_title">
	                    <h3><?php echo esc_attr($team['team_name']); ?></h3>
	                    <p><?php echo esc_attr($team['team_prof']); ?></p>
	                </div> 
	            </div>     
	        </div>

		<?php endforeach; ?>

    </div>
<?php }; ?>


<?php if ( $atts['berg_team_type'] == 'team2' ) { ?>
<!--Wrapper-->
    <div class="mid_wrapper">

        <?php foreach ($atts['berg_team'] as $team):
	        if ( empty( $team['team_image'] ) ) {
	            $image = get_template_directory_uri().'/images/no_image.jpg';
	        } else {
	            $image = fw_resize( $team['team_image']['attachment_id'], '640', '426', true );
	        }
	    ?>

	        <!-- Item -->
            <div class="bordered_block bordered_left text-left flex_block image_bck <?php echo esc_attr($atts['berg_block_height']); ?>">
                
                <?php if ( $atts['over_display'] == 1) {?>
                <!-- Overlay -->
                <div class="over" data-opacity="<?php echo esc_attr($atts['over_opacity']); ?>" data-color="<?php echo esc_attr($atts['over_color']); ?>"></div>
                <?php };?>

                <?php if (! empty( $team['team_link'] )) {?>
                	<a href="<?php echo esc_url( $team['team_link'] ); ?>" class="box_link"></a>
                <?php } ?>
                <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
                <div class="adds_txt sport_txt">
                    <h5 class="relative"><?php echo esc_attr($team['team_name']); ?></h5>
                    <span class="sport_price"><?php echo esc_attr($team['team_prof']); ?></span>   
                </div> 
            </div>

		<?php endforeach; ?>

    </div>
<?php }; ?>

<?php if ( $atts['berg_team_type'] == 'team3' ) { ?>
<!--Wrapper-->
    <div class="mid_wrapper">

        <?php foreach ($atts['berg_team'] as $team):
	        if ( empty( $team['team_image'] ) ) {
	            $image = get_template_directory_uri().'/images/no_image.jpg';
	        } else {
	            $image = fw_resize( $team['team_image']['attachment_id'], '640', '426', true );
	        }
	    ?>
			<!-- Item -->
			<div class="bordered_block flex_block image_bck bordered_over <?php echo esc_attr($atts['berg_block_height']); ?>">
				<?php if (! empty( $team['team_link'] )) {?>
                	<a href="<?php echo  esc_url( $team['team_link'] ); ?>" class="box_link"></a>
                <?php } ?>
                <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
                <div class="box_content text-center">
                    <h3><?php echo esc_attr($team['team_name']); ?></h3>
                    <h5 class="subtitle"><?php echo esc_attr($team['team_prof']); ?></h5>
                    <?php echo esc_attr($team['team_desc']); ?>
                </div>     
            </div>


		<?php endforeach; ?>

    </div>
<?php }; ?>

<?php if ( $atts['berg_team_type'] == 'team4' ) { ?>
<!--Wrapper-->
    <div class="mid_wrapper">

        <?php foreach ($atts['berg_team'] as $team):
	        if ( empty( $team['team_image'] ) ) {
	            $image = get_template_directory_uri().'/images/no_image.jpg';
	        } else {
	            $image = fw_resize( $team['team_image']['attachment_id'], '640', '426', true );
	        }
	    ?>
			
			<!-- Item -->
            <div class="bordered_block flex_block image_bck bordered_zoom bordered_zoom_three bordered_zoom_gold <?php echo esc_attr($atts['berg_block_height']); ?>">
                <?php if (! empty( $team['team_link'] )) {?>
                	<a href="<?php echo esc_url( $team['team_link'] ); ?>" class="box_link"></a>
                <?php } ?>
                <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>"></div>
                <div class="box_content">
                    <h3><?php echo esc_attr($team['team_name']); ?></h3>
                    <h5 class="subtitle"><?php echo esc_attr($team['team_prof']); ?></h5>
                    <?php echo esc_attr($team['team_desc']); ?> 
                </div>     
            </div>

		<?php endforeach; ?>

    </div>
<?php }; ?>


<?php if ( $atts['berg_team_type'] == 'team5' ) { ?>
<!--Wrapper-->
    <div class="mid_wrapper">

        <?php foreach ($atts['berg_team'] as $team):
	        if ( empty( $team['team_image'] ) ) {
	            $image = get_template_directory_uri().'/images/no_image.jpg';
	        } else {
	            $image = fw_resize( $team['team_image']['attachment_id'], '640', '426', true );
	        }
	    ?>

            <!-- Item -->
            <div class="bordered_block flex_block grey_border doctor_item bordered_over bordered_over_blue text-center image_bck <?php echo esc_attr($atts['berg_block_height']); ?>">
                <?php if (! empty( $team['team_link'] )) {?>
                	<a href="<?php echo esc_url(get_home_url('/').'/'.$team['team_link']); ?>" class="box_link"></a>
                <?php } ?>
                <div class="image_over image_bck" data-image="<?php echo esc_attr($image); ?>" data-blend="multiply" data-position="left" data-color="#f4f4f4"></div>
                <div class="box_content text-center">
                    <h3><?php echo esc_attr($team['team_name']); ?></h3>
                    <h5 class="subtitle"><?php echo esc_attr($team['team_prof']); ?></h5>
                    <?php echo esc_attr($team['team_desc']); ?>
                </div>     
            </div>

		<?php endforeach; ?>

    </div>
<?php }; ?>

    
