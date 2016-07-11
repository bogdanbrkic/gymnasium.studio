<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'section_title' => array(
		'label' => esc_html__('Section Title', 'berg'),
		'type'  => 'text'
	),
	'section_id' => array(
		'label' => esc_html__('Section ID', 'berg'),
		'type'  => 'text'
	),
	'is_fullwidth' => array(
		'label'        => esc_html__('Full Width', 'berg'),
		'type'         => 'switch',
	),
	
	'berg_white_txt' => array(
		'label'        => esc_html__('White Text', 'berg'),
		'type'         => 'switch',
	),
	'berg_section_text_align' => array(
        'type'  => 'image-picker',
        'value' => 'intro_text_lc',
        'label' => esc_html__('Text Alignment', 'berg'),
        'choices' => array(
            'text-left' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tl.gif',
            'text-center' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tc.gif',
            'text-right' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tr.gif',                
        ),
        'blank' => true, // (optional) if true, images can be deselected
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
	'cover' => array(
		'label' => esc_html__('Background No Cover', 'berg'),
		'type'  => 'switch',
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
		'desc'  => esc_html__('0.0-1', 'berg'),
		'type'  => 'text',
		'value' => '0.3'
	)
);
