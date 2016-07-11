<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Berg
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<?php wp_head(); ?>


</head>

<?php
if( function_exists('fw_get_db_settings_option') ) {
	
    /*Body Classes*/
	if(fw_get_db_settings_option('passpartu') == 'no'){
		add_filter( 'body_class', 'no_passpartu' );
		function no_passpartu( $classes = '') {
			$classes[] = 'no_passpartu';
			return $classes;
		}	
	}
	if(fw_get_db_settings_option('rounded') == 'yes'){
		add_filter( 'body_class', 'rounded' );
		function rounded( $classes = '') {
			$classes[] = 'rounded';
			return $classes;
		}	
	}
}
?>


<body <?php body_class(); ?>>

<?php 
if( function_exists('fw_get_db_settings_option') ) { 
    if(fw_get_db_settings_option('passpartu') == 'yes'){?>
<!-- Passpartu -->
<div class="passpartu passpartu_left"></div>
<div class="passpartu passpartu_right"></div>
<div class="passpartu passpartu_top"></div>
<div class="passpartu passpartu_bottom"></div>
<!-- Passpartu End -->
<?php 
    }
}else{?>
<!-- Passpartu -->
<div class="passpartu passpartu_left"></div>
<div class="passpartu passpartu_right"></div>
<div class="passpartu passpartu_top"></div>
<div class="passpartu passpartu_bottom"></div>
<!-- Passpartu End -->
<?php } ?>

<div class="main_page" id="page">

<?php

if( function_exists('fw_get_db_settings_option') ) { 
    if(fw_get_db_settings_option('header_address_display') == 'no'){    
        $header_top = " header_no_tl";
    }else {
        $header_top =  "";
    }
    if(fw_get_db_settings_option('header_type') == 'header_white'){ 
        $header_class = " white_bck";
    }
    if(fw_get_db_settings_option('header_type') == 'header_dark'){  
        $header_class = " white_bck black_bck";
    }
    if(fw_get_db_settings_option('header_type') == 'header_simple'){    
        $header_class = " simple_menu";
    }
}else{
    $header_class =  " white_bck header_no_tl";
    $header_top =  "";
}
        
?>

<?php if( function_exists('fw_get_db_settings_option') && fw_get_db_settings_option('header_type') == 'header_simple' ) {?>
    <div class="head_bck" data-color="#292929"  data-opacity="0.5"></div>
<?php }; ?>


    <!-- Header -->

    <header class="<?php echo esc_attr( $header_class );?> <?php echo esc_attr( $header_top );?>">
       

    	<?php 
			if( function_exists('fw_get_db_settings_option') ) {
                if(fw_get_db_settings_option('header_address_display') == 'yes'){	
		?>
        <!-- Header Top Line -->
        <div class="top_line clearfix">

            <!-- Address -->
            <span class="tl_item">
                <span class="ti ti-location-pin"></span> <?php echo fw_get_db_settings_option('header_address'); ?>
            </span>

            <!-- Mail -->
            <span class="tl_item">
                <span class="ti ti-email"></span> <?php echo fw_get_db_settings_option('header_mail'); ?>
            </span>

            <!-- Phone -->
            <div class="pull-right">
                <span class="tl_item">
                    <span class="ti ti-mobile"></span> <?php echo fw_get_db_settings_option('header_phone'); ?>
                </span>
            </div>
                  
        </div>
        <!-- Top Line End -->
        <?php }}; ?>



        <!-- Logo -->
        <div class="logo pull-left">
        	
        	<?php
                if( function_exists('fw_get_db_settings_option') ) {
            		if(fw_get_db_settings_option('logo_type') == 'image'){
            			echo '<a href="'.home_url( '/' ).'" class="no_border"><img src="' .fw_get_db_settings_option('logo_image/url') . '" alt=""></a>';	
    	        	}else {
    	        		echo '<a href="'.home_url( '/' ).'"><b>' .fw_get_db_settings_option('logo_text'). '</b></a>';
    	        	}
                }else{
                        echo '<a href="'.home_url( '/' ).'"><b>'.esc_html__('Berg','berg').'</b></a>';
                }
	       	?>
            
            	
            
        </div>


        <!-- Header Buttons -->
        <div class="header_btns_wrapper">
             

            <!-- Main Menu Btn -->
            <div class="main_menu"><i class="ti-menu"></i><i class="ti-close"></i></div>
            
            <!-- Sub Menu -->
            <div class="berg_sub_menu">
                <div class="sub_cont primary-navigation" id="primary-navigation">
                    
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                        <?php 
							if( function_exists('fw_get_db_settings_option') ) {
                                if(fw_get_db_settings_option('header_search_display') == 'yes'){	
						?>
                        <!-- Search -->
                        <ul>
                            <li class="right_sub no_arrow sub_min_width menu-item-has-children"><a href="#" class="parents"><i class="ti-search"></i></a>
                                <ul class="search_menu">
                                    <li class="mega_sub bask_menu">
                                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    										<input type="search" class="form-control" placeholder="<?php echo esc_html__( 'Search...', 'berg' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_html__( 'Search for:', 'berg' ) ?>" />
    										<button type="submit" class="se_btn">
                                            	<i class="ti-search"></i>
                                            </button>
    									</form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Search End-->
        				<?php }}; ?>

 

                </div>
            </div>
            <!-- Sub Menu End -->

        </div>
        <!-- Header Buttons End -->
        
        <!-- Up Arrow -->
        <a href="#page" class="up_block go"><i class="fa fa-angle-up"></i></a>

    </header>
    <!-- Header End -->

