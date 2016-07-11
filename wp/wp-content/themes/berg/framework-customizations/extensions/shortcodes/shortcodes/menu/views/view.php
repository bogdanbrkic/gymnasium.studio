<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


?>

<!--Wrapper-->
<div class="mid_wrapper arrows_top">


    <?php foreach ($atts['menu'] as $menu):?>
        
        <!--Item-->
        <div class="menu_block text-left wow fadeInUp">
            <h3><?php echo esc_attr($menu['title']); ?></h3>
            

            <?php foreach ($menu['menu_item'] as $menu_item):
                if ( empty( $menu_item['image'] ) ) {
                    $image = get_template_directory_uri().'/images/no_image.jpg';
                } else {
                    $image = fw_resize( $menu_item['image']['attachment_id'], '640', '426', true );
                }
            ?>
            <!-- Item -->
            <a href="<?php echo esc_url($image); ?>" class="menu_item lightbox" title="<?php echo esc_attr($menu_item['title']); ?>">
                <span><?php echo esc_attr($menu_item['title']); ?></span> <b><?php echo esc_attr($menu_item['price']); ?></b>
                <p><?php echo esc_attr($menu_item['desc']); ?></p>
            </a>
           
            <?php endforeach; ?>
       

        </div>


    <?php endforeach; ?>
 

</div>
<!--Wrapper End-->