<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'berg_title'         => array(
		'label' => esc_html__( 'Title', 'berg' ),
		'value' => 'Contacts',
		'type'  => 'text'
	),
	'berg_contacts' => array(
		'label'         => esc_html__( 'Contact Item', 'berg' ),
		'type'          => 'addable-popup',
		'template'      => '{{=berg_contacts_text}}',
		'popup-options' => array(
			'berg_contacts_icon'   => array(
				'label' => esc_html__( 'Icon', 'berg' ),
				'set' => 'themify-icons',
				'type'  => 'icon'
			),
			'berg_contacts_text'   => array(
				'label' => esc_html__( 'Text', 'berg' ),
				'type'   => 'wp-editor',
				'teeny'  => true,
				'reinit' => true,
			)	
		)
	),
	'berg_newsletter' => array(
		'label' => esc_html__( 'Newsletter', 'berg' ),
		'type'  => 'switch'
	)
);