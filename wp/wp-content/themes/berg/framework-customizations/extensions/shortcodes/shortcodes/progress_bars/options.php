<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'title'   => array(
        'type'  => 'text',
        'label' => esc_html__( 'Title', 'berg' ),
    ),
	'bar_add' => array(
        'label'         => esc_html__( 'Bar', 'berg' ),
        'type'          => 'addable-popup',
        'template'      => '{{=title}}',
        'popup-options' => array(
            'title'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'berg' ),
			),
			'value'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Value', 'berg' ),
			),
        )
    ),
    'berg_slider_text_align' => array(
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
    'bar_color' => array(
        'type'  => 'color-picker',
        'value' => '#292929',
        'label' => esc_html__('Bar Color', 'berg')
    ),
    'rounded'    => array(
        'type'  => 'switch',
        'value' => 'text',
        'label' => esc_html__('Rounded', 'berg'),
    ),
    'thin'    => array(
        'type'  => 'switch',
        'value' => 'text',
        'label' => esc_html__('Thin', 'berg'),
    ),

	
	
);