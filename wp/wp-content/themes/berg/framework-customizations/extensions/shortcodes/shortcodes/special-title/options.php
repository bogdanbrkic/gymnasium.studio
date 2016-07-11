<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'berg_title'         => array(
		'label' => esc_html__( 'Title', 'berg' ),
		'type'  => 'text',
	),
	'berg_subtitle'         => array(
		'label' => esc_html__( 'Subtitle', 'berg' ),
		'type'  => 'text',
	),
	'berg_slider_text_align' => array(
        'type'  => 'image-picker',
        'value' => 'intro_text_lc',
        'label' => esc_html__('Text Alignment', 'berg'),
        'choices' => array(
            'text-left' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tl.gif',
            'text-center' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tc.gif',                
        ),
        'blank' => true, // (optional) if true, images can be deselected
    ),
    'berg_color' => array(
		'label' => esc_html__('Numbers Color', 'berg'),
		'type'  => 'color-picker'
	),
	'berg_title_stat' => array(
		'label'         => esc_html__( 'Other Information', 'berg' ),
		'type'          => 'addable-popup',
		'template'      => '{{=berg_first_line}}',
		'popup-options' => array(
			'berg_numbers'   => array(
				'label' => esc_html__( 'Number', 'berg' ),
				'type'  => 'text'
			),
			'berg_first_line'   => array(
				'label' => esc_html__( 'First Line', 'berg' ),
				'type'  => 'text'
			),
			'berg_second_line'   => array(
				'label' => esc_html__( 'Second Line', 'berg' ),
				'type'  => 'text'
			)
		)
	)
);