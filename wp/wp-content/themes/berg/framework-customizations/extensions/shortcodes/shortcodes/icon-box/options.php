<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'icon_box_title'   => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'berg' ),
	),

	'berg_icon_box' => array(
		'label'         => esc_html__( 'Icon Box', 'berg' ),
		'popup-title'   => esc_html__( 'Add/Edit Review', 'berg' ),
		'desc'          => esc_html__( 'Here you can add, remove and edit your Review', 'berg' ),
		'type'          => 'addable-popup',
		'template'      => '{{=title}}',
		'popup-options' => array(
			'title'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title of the Box', 'berg' ),
			),
			'content' => array(
				'type'  => 'textarea',
				'label' => esc_html__( 'Content', 'berg' ),
				'desc'  => esc_html__( 'Enter the desired content', 'berg' ),
			),
			'icon'    => array(
				'type'  => 'icon',
				'set' => 'themify-icons',
				'label' => esc_html__('Choose an Icon', 'berg'),
			)
		)
	)
	
);