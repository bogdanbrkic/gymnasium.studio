<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'         => array(
		'label' => esc_html__( 'Title', 'berg' ),
		'type'  => 'text',
	),
	'posts'=> array(
	    'type'  => 'multi-select',
	    'label' => esc_html__('Category', 'berg'),
	    'desc'  => esc_html__('Choose Blog Category', 'berg'),
	    'population' => 'taxonomy',
	    'source' => 'project-type',
	    'prepopulation' => 10,
        'limit' => 1,
    ),
    'post_count' => array(
		'type'  => 'select',
	    'value' => '5',
	    'label' => esc_html__('Number of Posts', 'berg'),
	    'choices' => array(
	        '0' => esc_html__('Unlimited', 'berg'),
	        '1' => esc_html__('1', 'berg'),
	        '2' => esc_html__('2', 'berg'),
	        '3' => esc_html__('3', 'berg'),
	        '4' => esc_html__('4', 'berg'),
	        '5' => esc_html__('5', 'berg'),
	        '10' => esc_html__('10', 'berg'),
	        '15' => esc_html__('15', 'berg'),
	        '20' => esc_html__('20', 'berg'),
	    )
	)
);