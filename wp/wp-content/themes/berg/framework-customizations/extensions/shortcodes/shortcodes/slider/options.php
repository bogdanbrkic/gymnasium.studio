<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'berg_slider' => array(
		'label'         => esc_html__( 'Slider Items', 'berg' ),
		'popup-title'   => esc_html__( 'Slider Items', 'berg' ),
		'type'          => 'addable-popup',
		'template'      => '{{=title}}',
		'popup-options' => array(
			'title'   => array(
				'label' => esc_html__( 'Title', 'berg' ),
				'type'  => 'text'
			),
			'text'   => array(
				'label' => esc_html__( 'Text', 'berg' ),
				'type'   => 'wp-editor',
				'teeny'  => true,
				'reinit' => true,
			),
			'image' => array(
				'label' => esc_html__( 'Image', 'berg' ),
				'type'  => 'upload'
			),	
		)
	),
	'height100'    => array(
        'type'  => 'switch',
        'value' => 'text',
        'label' => esc_html__('100% Height', 'berg'),
    ),
);