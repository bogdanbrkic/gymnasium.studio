<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'berg_white_txt' => array(
		'label'        => esc_html__('White Text', 'berg'),
		'type'         => 'switch',
	),
	'berg_column_padding' => array(
		'label'        => esc_html__('Padding in Block', 'berg'),
		'type'         => 'switch',
	),
	'berg_bordered' => array(
		'label'        => esc_html__('Slider In Block', 'berg'),
		'type'         => 'switch',
	),
	'berg_block_border' => array(
	    'type'  => 'radio',
	    'value' => 'no',
	    'label' => esc_html__('Block Border', 'berg'),
	    'choices' => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
	        'no_border' => esc_html__('No Border', 'berg'),
	        'grey_border' => esc_html__('Grey Border', 'berg'),
	        'bordered_wht_border' => esc_html__('White Border', 'berg'),
	    ),
	    // Display choices inline instead of list
	    'inline' => true,
	),
	'background_color' => array(
		'label' => esc_html__('Background Color', 'berg'),
		'desc'  => esc_html__('Please select the background color', 'berg'),
		'type'  => 'color-picker'
	),
	'background_image' => array(
		'label'   => esc_html__('Background Image', 'berg'),
		'desc'    => esc_html__('Please select the background image', 'berg'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => esc_html__('Background Video', 'berg'),
		'desc'  => esc_html__('Insert Video URL to embed this video', 'berg'),
		'type'  => 'text'
	),
	'over_display' => array(
        'type'  => 'switch',
        'label' => esc_html__('Display Over', 'berg')
    ),
    'over_color' => array(
	    'type'  => 'color-picker',
	    'value' => '#000',
	    'label' => esc_html__('Over Color', 'berg')
	),
	'over_opacity'   => array(
		'label' => esc_html__( 'Opacity', 'berg' ),
		'type'  => 'text',
		'value' => '0.3'
	)
);
