<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'         => array(
		'label' => esc_html__( 'Title', 'berg' ),
		'value' => 'Pricing',
		'type'  => 'text',
	),
	'berg_price' => array(
		'label'         => esc_html__( 'Price Blocks', 'berg' ),
		'popup-title'   => esc_html__( 'Add/Edit Price Block', 'berg' ),
		'type'          => 'addable-popup',
		'template'      => '{{=price_name}}',
		'popup-options' => array(
			'price_name'   => array(
				'label' => esc_html__( 'Price Name', 'berg' ),
				'type'  => 'text'
			),
			'price_value'   => array(
				'label' => esc_html__( 'Price Value', 'berg' ),
				'type'  => 'text'
			),
			'price_subtitle'   => array(
				'label' => esc_html__( 'Price Subtitle', 'berg' ),
				'type'  => 'text'
			),
			'price_btn_name'   => array(
				'label' => esc_html__( 'Button Text', 'berg' ),
				'type'  => 'text'
			),
			'price_btn_link'   => array(
				'label' => esc_html__( 'Button Link', 'berg' ),
				'type'  => 'text'
			),
			'price_text'   => array(
				'label' => esc_html__( 'Text', 'berg' ),
				'type'   => 'wp-editor',
				'teeny'  => true,
				'reinit' => true,
			),
			'color_switch' => array(
				'label' => esc_html__('Background Color', 'berg'),
				'type'  => 'switch',
			),
			'color' => array(
			    'type'  => 'color-picker',
			    'value' => '#000',
			    'label' => esc_html__('Background Color', 'berg')
			),
			'white_txt' => array(
				'label' => esc_html__('White Text', 'berg'),
				'type'  => 'switch',
			),
		)
	)
);