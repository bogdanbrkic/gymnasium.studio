<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}


?>


<span class="great_title great_title_big"><?php echo esc_attr($atts['berg_title']); ?></span>  
<h4 class="subtitle"><?php echo esc_attr($atts['berg_subtitle']); ?></h4>
<p class="special_offer_text"><?php echo esc_attr($atts['berg_text']); ?></p>
   


<span>  
<?php foreach ($atts['berg_btns'] as $btns): ?>
    <a href="<?php echo esc_url(get_home_url('/').'/'.$btns['btn_link'] ); ?>" class="btn btn-white"><?php echo esc_attr($btns['btn_name']); ?></a>  
<?php endforeach; ?>
</span>


