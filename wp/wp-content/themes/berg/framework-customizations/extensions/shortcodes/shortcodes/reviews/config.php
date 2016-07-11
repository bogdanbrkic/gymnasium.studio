<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Reviews', 'berg' ),
	'description' => esc_html__( 'Add a Review', 'berg' ),
	'tab'         => esc_html__( 'Content Elements', 'berg' ),
	'popup_size'  => 'medium'
);