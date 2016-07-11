<?php
/**
 * Header Styles.
 *
 * @package Berg
 */
?>

<?php 

if( function_exists('fw_get_db_settings_option') ) {


    $link_color = fw_get_db_settings_option('passpartu_color'); 
    $berg_body_style = fw_get_db_settings_option('font_body/variation');
    if ( $berg_body_style === 'regular' ) {
        $berg_body_style = '400';
    }
    if ( $berg_body_style == 'italic' ) {
        $berg_body_style = '400italic';
    }
    $berg_body_italic  = preg_replace('/[0-9]{1}/', '', $berg_body_style);
    $berg_body_weight = preg_replace('/[^0-9]/', '', $berg_body_style);
    $berg_body_family = fw_get_db_settings_option('font_body/family');
    $berg_body_size = fw_get_db_settings_option('font_body/size');
    $berg_body_line_height = fw_get_db_settings_option('font_body/line-height');
    $berg_title_family = fw_get_db_settings_option('font_title/family');
    $berg_title_style = preg_replace('/[^0-9]/', '', fw_get_db_settings_option('font_title/variation'));
    $berg_title_color = fw_get_db_settings_option('font_titles_sizes/font_small_title/color');

?>

    .passpartu {
        background:<?php echo esc_attr($link_color); ?>;
    } 
    .bordered_block {
        border-right: 10px solid <?php echo esc_attr($link_color); ?>;
        border-top: 10px solid <?php echo esc_attr($link_color); ?>;
        border-bottom: 10px solid <?php echo esc_attr($link_color); ?>;
    } 
    .after_slider_border {
        background: <?php echo esc_attr($link_color); ?>
    }
     .bordered_block:first-child {
        border-left:10px solid <?php echo esc_attr($link_color); ?>;
    }
    .inside_title {
        border-bottom: 10px solid <?php echo esc_attr($link_color); ?>
    }
    .intro_wrapper {
        border-bottom: 10px solid <?php echo esc_attr($link_color); ?>!important
    }
    body  {
        font-family:<?php echo esc_attr($berg_body_family);?>;
        font-weight:<?php echo esc_attr($berg_body_weight);?>;
        font-size:<?php echo esc_attr($berg_body_size);?>px;
        line-height:<?php echo esc_attr($berg_body_line_height);?>px;
        <?php if( !empty ($berg_body_italic)) { ?>font-style:<?php echo esc_attr($berg_body_italic);?>;<?php } ?>
    }
    h2, h1, h2 a, h3 {
        font-family:<?php echo esc_attr($berg_title_family);?>;
        font-size:<?php echo fw_get_db_settings_option('font_titles_sizes/font_big_title/size');?>px;
        line-height:<?php echo fw_get_db_settings_option('font_titles_sizes/font_big_title/line-height');?>px;
        font-weight:<?php echo esc_attr($berg_title_style);?>;
        <?php if (fw_get_db_settings_option('font_title_uppercase') == 1 ) {?>text-transform:uppercase; <?php } ?>
        <?php if (!empty ($berg_title_color)) {?>color:<?php echo esc_attr($berg_title_color);?>; <?php } ?>

    }

    .box_content h3, h4, .footer_menu h3, .menu_item span {
        font-family:<?php echo esc_attr($berg_title_family);?>;
        font-size:<?php echo fw_get_db_settings_option('font_titles_sizes/font_small_title/size');?>px;
        line-height:<?php echo fw_get_db_settings_option('font_titles_sizes/font_small_title/line-height');?>px;
        text-transform:none;
        font-weight:<?php echo esc_attr($berg_title_style);?>;
        <?php if (fw_get_db_settings_option('font_title_uppercase') == 1 ) {?>text-transform:uppercase; <?php } ?>
        <?php if (!empty ($berg_title_color)) {?>color:<?php echo esc_attr($berg_title_color);?>; <?php } ?>
    }
    .menu_item b {
        <?php if (!empty ($berg_title_color)) {?>color:<?php echo esc_attr($berg_title_color);?>; <?php } ?>
        font-weight:bold;
    }
    .great_title {
        font-family:<?php echo esc_attr($berg_title_family);?>;
        font-size:<?php echo fw_get_db_settings_option('font_titles_sizes/font_slider_title/size');?>px;
        line-height:<?php echo fw_get_db_settings_option('font_titles_sizes/font_slider_title/line-height');?>px;
        text-transform: none;
        font-weight:<?php echo esc_attr($berg_title_style);?>;
        <?php if (fw_get_db_settings_option('font_title_uppercase') == 1 ) {?>text-transform:uppercase; <?php } ?>
    }
    .great_subtitle {
        font-family:<?php echo esc_attr($berg_title_family);?>;
        font-size:<?php echo fw_get_db_settings_option('font_titles_sizes/font_slider_subtitle/size');?>px;
        line-height:<?php echo fw_get_db_settings_option('font_titles_sizes/font_slider_subtitle/line-height');?>px;
        text-transform: none;
        font-weight:<?php echo esc_attr($berg_title_style);?>;
        <?php if (fw_get_db_settings_option('font_title_uppercase') == 1 ) {?>text-transform:uppercase; <?php } ?>
    }

    .countdown-amount {
        font-family:<?php echo esc_attr($berg_title_family);?>;
        font-size:<?php echo fw_get_db_settings_option('font_titles_sizes/font_countdown/size');?>px;
        line-height:<?php echo fw_get_db_settings_option('font_titles_sizes/font_countdown/line-height');?>px;
        font-weight:<?php echo esc_attr($berg_title_style);?>;
        <?php if (fw_get_db_settings_option('font_title_uppercase') == 1 ) {?>text-transform:uppercase; <?php } ?>
    }
    .mini_title {
        font-family:<?php echo esc_attr($berg_title_family);?>;
        font-size:<?php echo fw_get_db_settings_option('font_titles_sizes/font_mini_title/size');?>px;
        line-height:<?php echo fw_get_db_settings_option('font_titles_sizes/font_mini_title/line-height');?>px;
        text-transform: none;
        font-weight:<?php echo esc_attr($berg_title_style);?>;
        <?php if (fw_get_db_settings_option('font_title_uppercase') == 1 ) {?>text-transform:uppercase; <?php } ?>
    }
    .sml_abs_title {      
        <?php if (fw_get_db_settings_option('font_title_uppercase') == 1 ) {?>text-transform:uppercase; <?php } ?>
    }

 
<?php } ?>

