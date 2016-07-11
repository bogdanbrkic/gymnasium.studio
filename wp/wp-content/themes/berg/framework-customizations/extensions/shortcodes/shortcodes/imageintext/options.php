<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'berg_textimage_align'    => array(
        'type'  => 'switch',
        'value' => 'simple',
        'label' => esc_html__('Image Alignment', 'berg'),
        'left-choice' => array(
            'value' => 'intro_text_lb',
            'label' => esc_html__('Left', 'berg')
        ),
        'right-choice' => array(
            'value' => 'intro_text_rb',
            'label' => esc_html__('Right', 'berg')
        )
    ),
    'berg_textimage' => array(
		'label' => esc_html__( 'Image', 'berg' ),
		'type'  => 'upload'
	)
);