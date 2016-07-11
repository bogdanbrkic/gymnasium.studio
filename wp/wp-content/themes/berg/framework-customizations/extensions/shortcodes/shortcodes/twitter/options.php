<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'         => array(
		'label' => esc_html__( 'Title', 'berg' ),
		'type'  => 'text',
	),
	'twitter_id'         => array(
		'label' => esc_html__( 'Twitter Widget Id', 'berg' ),
		'type'  => 'text',
	)
);