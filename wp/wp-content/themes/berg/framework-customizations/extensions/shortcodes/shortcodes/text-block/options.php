<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'wp-editor',
		'teeny'  => true,
		'reinit' => true,
		'label'  => esc_html__( 'Content', 'berg' ),
		'desc'   => esc_html__( 'Enter some content for this texblock', 'berg' )
	),
);
