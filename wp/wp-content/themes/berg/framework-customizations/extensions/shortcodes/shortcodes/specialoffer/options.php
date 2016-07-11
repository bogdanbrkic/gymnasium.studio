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
	'berg_text'         => array(
		'label' => esc_html__( 'Text', 'berg' ),
		'type'  => 'textarea',
	),
	'berg_btns' => array(
		'label'         => esc_html__( 'Buttons', 'berg' ),
		'type'          => 'addable-popup',
		'template'      => '{{=btn_name}}',
		'popup-options' => array(
			'btn_name'   => array(
				'label' => esc_html__( 'Title', 'berg' ),
				'type'  => 'text'
			),
			'btn_link'   => array(
				'label' => esc_html__( 'Button Link', 'berg' ),
				'type'  => 'text'
			),
		)
	)
);