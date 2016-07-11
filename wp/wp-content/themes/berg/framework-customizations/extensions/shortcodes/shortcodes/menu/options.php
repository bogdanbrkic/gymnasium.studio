<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(


	'menu' => array(
		'label'         => esc_html__( 'Cafe Menu', 'berg' ),
		'type'          => 'addable-popup',
		'template'      => '{{=title}}',
		'popup-options' => array(
			'title'   => array(
				'label' => esc_html__( 'Title', 'berg' ),
				'type'  => 'text'
			),
			'menu_item' => array(
				'label'         => esc_html__( 'Cafe Menu', 'berg' ),
				'type'          => 'addable-popup',
				'template'      => '{{=title}}',
				'popup-options' => array(
					'title'   => array(
						'label' => esc_html__( 'Title', 'berg' ),
						'type'  => 'text'
					),
					'price'   => array(
						'label' => esc_html__( 'Price', 'berg' ),
						'type'  => 'text'
					),
					'desc'  => array(
						'label' => esc_html__( 'Description', 'berg' ),
						'type'  => 'textarea',
						'value' => ''
					),			
					'image' => array(
						'label' => esc_html__( 'Image', 'berg' ),
						'type'  => 'upload'
					)
				)
			)
		)
	)
);


