<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => esc_html__( 'Tabs', 'berg' ),
		'popup-title'   => esc_html__( 'Add/Edit Tab', 'berg' ),
		'desc'          => esc_html__( 'Create your tabs', 'berg' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_title' => array(
				'type'  => 'text',
				'label' => esc_html__('Title', 'berg')
			),
			'icon'    => array(
				'type'  => 'icon',
				'set' => 'themify-icons',
				'label' => esc_html__('Choose an Icon', 'berg'),
			),
			'tab_content' => array(
				'type'  => 'textarea',
				'label' => esc_html__('Content', 'berg')
			)
		),
	),
	'tabs_type' => array(
	    'type'  => 'select',
	    'value' => 'choice-1',
	    'label' => esc_html__('Tabs Type', 'berg'),
	    'choices' => array(
	        'choice-1' => esc_html__('Simple Tab', 'berg'),
	        'choice-2' => esc_html__('Icon Tab', 'berg'),
	        'choice-3' => esc_html__('Mini Icon Tab', 'berg'),
	    ),
	    'no-validate' => false,
	)
);