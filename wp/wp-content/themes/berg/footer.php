<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Berg
 */

?>

<?php if( function_exists('fw_get_db_settings_option') ) { ?>
<!-- Footer -->
<div class="footer <?php if( function_exists('fw_get_db_settings_option') ) { if ( fw_get_db_settings_option('berg_white_txt') == 1 ) {echo 'white_txt';}} ?> bordered_wht_border image_bck" data-color="<?php if( function_exists('fw_get_db_settings_option') ) {echo fw_get_db_settings_option('footer_menublock_back_color');} ?>">
    


    <!-- Container End -->

    <?php 
        if( function_exists('fw_get_db_settings_option') ) {
            if(fw_get_db_settings_option('footer_menu_block') == 'yes'){    
    ?>
    <div class="footer_menu">
        <div class="container">
            
            <div class="row">
                    <?php 
                        $berg_footer_menu = fw_get_db_settings_option('footer_menu/posts/0');


                        $berg_the_post = get_posts(array(
                            'include' => $berg_footer_menu,
                            'post_type' => 'any',
                            'numberposts' => 1,
                            'suppress_filters' => false,
                        ));

                        echo apply_filters('the_content', $berg_the_post[0]->post_content);
                    ?>   

            </div>
            <!--Row End-->
            
        </div>
        <!-- Container End -->
    </div>
    <?php }}; ?>
    


	<!-- Footer Copyrights -->
    <div class="footer_end image_bck <?php if( function_exists('fw_get_db_settings_option') ) {if ( fw_get_db_settings_option('berg_white_txt') == 1 ) {echo 'white_txt';}} ?>"  data-color="<?php if( function_exists('fw_get_db_settings_option') ) {echo fw_get_db_settings_option('footer_back_color');} ?>">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <span class="sub"><?php if( function_exists('fw_get_db_settings_option') ) {echo fw_get_db_settings_option('footer_copyright');} ?></span>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="list-inline social-list">
                        
                        <?php 
                            if( function_exists('fw_get_db_settings_option') ) {
                                if ( !strlen(fw_get_db_settings_option('footer_social/social_facebook'))==0 ){
                        ?>
                            <li>
                                <a href="<?php echo esc_url( fw_get_db_settings_option('footer_social/social_facebook') ); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo esc_html__('Facebook','berg') ?>">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                        <?php }}; ?>

                        <?php 
                            if( function_exists('fw_get_db_settings_option') ) {
                                if ( !strlen(fw_get_db_settings_option('footer_social/social_twitter'))==0 ){
                        ?>
                            <li>
                                <a href="<?php echo esc_url( fw_get_db_settings_option('footer_social/social_twitter') ); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo esc_html__('Twitter','berg') ?>">
                                    <i class="ti-twitter"></i>
                                </a>
                            </li>
                        <?php }}; ?>

                        <?php
                            if( function_exists('fw_get_db_settings_option') ) {
                                if ( !strlen(fw_get_db_settings_option('footer_social/social_google'))==0 ){
                        ?>
                            <li>
                                <a href="<?php echo esc_url( fw_get_db_settings_option('footer_social/social_google') ); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo esc_html__('Google Plus','berg') ?>">
                                    <i class="ti-google"></i>
                                </a>
                            </li>
                        <?php }}; ?>

                        <?php 
                            if( function_exists('fw_get_db_settings_option') ) {
                             if ( !strlen(fw_get_db_settings_option('footer_social/social_pinterest'))==0 ){
                        ?>
                            <li>
                                <a href="<?php echo esc_url( fw_get_db_settings_option('footer_social/social_pinterest') ); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo esc_html__('Pinterest','berg') ?>">
                                    <i class="ti-pinterest"></i>
                                </a>
                            </li>
                        <?php }}; ?>

                        <?php 
                            if( function_exists('fw_get_db_settings_option') ) {
                                if ( !strlen(fw_get_db_settings_option('footer_social/social_linkedin'))==0 ){
                        ?>
                            <li>
                                <a href="<?php echo esc_attr( fw_get_db_settings_option('footer_social/social_linkedin') ); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo esc_html__('LinkedIn','berg') ?>">
                                    <i class="ti-linkedin"></i>
                                </a>
                            </li>
                        <?php }}; ?>

                        <?php
                            if( function_exists('fw_get_db_settings_option') ) {
                                if ( !strlen(fw_get_db_settings_option('footer_social/social_github'))==0 ){
                        ?>
                            <li>
                                <a href="<?php echo esc_url( fw_get_db_settings_option('footer_social/social_github') ); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo esc_html__('Github','berg') ?>">
                                    <i class="ti-github"></i>
                                </a>
                            </li>
                        <?php }}; ?>

                        <?php
                            if( function_exists('fw_get_db_settings_option') ) {
                                if ( !strlen(fw_get_db_settings_option('footer_social/social_vimeo'))==0 ){
                        ?>
                            <li>
                                <a href="<?php echo esc_url( fw_get_db_settings_option('footer_social/social_vimeo') ); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo esc_html__('Vimeo','berg') ?>">
                                    <i class="ti-vimeo"></i>
                                </a>
                            </li>
                        <?php }}; ?>

                        <?php 
                            if( function_exists('fw_get_db_settings_option') ) {
                                if ( !strlen(fw_get_db_settings_option('footer_social/social_instagram'))==0 ){
                        ?>
                            <li>
                                <a href="<?php echo esc_url( fw_get_db_settings_option('footer_social/social_instagram') ); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="<?php echo esc_html__('Instagram','berg') ?>">
                                    <i class="ti-instagram"></i>
                                </a>
                            </li>
                        <?php }}; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyrights End -->


</div>
<!-- Footer End -->
<?php }else { ?>

<!-- Footer -->
<div class="footer white_txt bordered_wht_border image_bck" data-color="#0e0e0e">
   

    <!-- Footer Copyrights -->
    <div class="footer_end">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <span class="sub"><?php echo esc_html__('&copy; Copyright 2018 - The Berg','berg')?></span>
                </div>
                <div class="col-sm-6 text-right">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Copyrights End -->


</div>
<!-- Footer End -->

<?php }; ?>

</div>
<!-- Page End -->

<?php wp_footer(); ?>

</body>
</html>
