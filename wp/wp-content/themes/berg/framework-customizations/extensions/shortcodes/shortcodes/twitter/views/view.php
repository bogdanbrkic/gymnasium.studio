<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
?>

<div class="widget">
    <h4><?php echo esc_attr($atts['title']); ?></h4>
    <div class="twitter-feed">
        <div class="tweets-feed" data-widget-id="<?php echo esc_attr($atts['twitter_id']); ?>">
        </div>
    </div>
</div>