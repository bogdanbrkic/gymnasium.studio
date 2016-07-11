<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Tabs', 'berg' ),
	'description' => esc_html__( 'Add some Tabs', 'berg' ),
	'tab'         => esc_html__( 'Content Elements', 'berg' ),
);