<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Team Member', 'berg' ),
	'description' => esc_html__( 'Add a Team Member', 'berg' ),
	'tab'         => esc_html__( 'Content Elements', 'berg' ),
	'popup_size'  => 'medium'
);