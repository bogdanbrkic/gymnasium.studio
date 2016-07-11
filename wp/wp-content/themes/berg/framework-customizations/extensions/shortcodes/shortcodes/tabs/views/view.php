<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $tabs_id = uniqid('fw-tabs-'); ?>
<?php
/*
 * the `.fw-tabs-container` div also supports
 * a `tabs-justified` class, that strethes the tabs
 * to the width of the whole container
 */
?>
<?php if($atts['tabs_type'] == "choice-1") { ?>
<div class="fw-tabs-container" id="<?php echo esc_attr($tabs_id); ?>">
	<div class="fw-tabs">
		<ul>
			<?php foreach ($atts['tabs'] as $key => $tab) : ?>
				<li><a href="#<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>"><?php echo $tab['tab_title']; ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php foreach ( $atts['tabs'] as $key => $tab ) : ?>
		<div class="fw-tab-content" id="<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>">
			<p><?php echo do_shortcode( $tab['tab_content'] ) ?></p>
		</div>
	<?php endforeach; ?>
</div>
<?php } ?>

<?php if($atts['tabs_type'] == "choice-2") { ?>

<div class="fw-tabs-container image_tabs image_tabs_large tabs">
	<div class="fw-tabs">
	    <ul class="tabs-ul list-inline">
	    	<?php foreach ($atts['tabs'] as $key => $tab) : ?>
				<li><a href="#<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>"><span class="ti <?php echo $tab['icon']; ?>"></span><?php echo $tab['tab_title']; ?></a></li>
			<?php endforeach; ?>
	    </ul>
    </div>
    <?php foreach ( $atts['tabs'] as $key => $tab ) : ?>
		<div class="fw-tab-content" id="<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>">
			<p><?php echo do_shortcode( $tab['tab_content'] ) ?></p>
		</div>
	<?php endforeach; ?>
</div>

<?php } ?>

<?php if($atts['tabs_type'] == "choice-3") { ?>
<div class="fw-tabs-container image_tabs tabs">
	<div class="fw-tabs">
	    <ul class="tabs-ul list-inline">
	    	<?php foreach ($atts['tabs'] as $key => $tab) : ?>
				<li><a href="#<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>"><span class="ti <?php echo $tab['icon']; ?>"></span><?php echo $tab['tab_title']; ?></a></li>
			<?php endforeach; ?>
	    </ul>
    </div>
    <?php foreach ( $atts['tabs'] as $key => $tab ) : ?>
		<div class="fw-tab-content" id="<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>">
			<p><?php echo do_shortcode( $tab['tab_content'] ) ?></p>
		</div>
	<?php endforeach; ?>
</div>
<?php } ?>