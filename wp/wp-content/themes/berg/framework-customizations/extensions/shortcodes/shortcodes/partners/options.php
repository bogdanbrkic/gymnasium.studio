<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'         => array(
		'label' => esc_html__( 'Title', 'berg' ),
		'value' => 'Partners',
		'type'  => 'text',
	),
	'text' => array(
		'type'   => 'wp-editor',
		'teeny'  => true,
		'reinit' => true,
		'label'  => esc_html__( 'Content', 'berg' ),
		'desc'   => esc_html__( 'Enter some content for this texblock', 'berg' )
	),
	'partners' => array(
		'label'         => esc_html__( 'Partners', 'berg' ),
		'popup-title'   => esc_html__( 'Add/Edit Partner', 'berg' ),
		'type'          => 'addable-popup',
		'template'      => '{{=partners_name}}',
		'popup-options' => array(
			'partners_name'   => array(
				'label' => esc_html__( 'Name', 'berg' ),
				'type'  => 'text'
			),
			'partners_link'   => array(
				'label' => esc_html__( 'Link', 'berg' ),
				'type'  => 'text'
			),
			'partners_image' => array(
				'label' => esc_html__( 'Image', 'berg' ),
				'type'  => 'upload'
			),
		)
	)
);