<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'berg_time_title'         => array(
		'label' => esc_html__( 'Title', 'berg' ),
		'value' => 'Working Hours',
		'type'  => 'text'
	),
	'berg_time_subtitle'         => array(
		'label' => esc_html__( 'Subtitle', 'berg' ),
		'value' => 'Timetable',
		'type'  => 'text'
	),
	'berg_time_days_color' => array(
            'type'  => 'color-picker',
            'value' => '',
            'label' => esc_html__('Days Color', 'berg'),
    ),
	'berg_time' => array(
		'label'         => esc_html__( 'Day', 'berg' ),
		'type'          => 'addable-popup',
		'template'      => '{{=day_name}}',
		'popup-options' => array(
			'day_name'   => array(
				'label' => esc_html__( 'Day', 'berg' ),
				'type'  => 'text'
			),
			'day_start'   => array(
				'label' => esc_html__( 'Start Time', 'berg' ),
				'type'  => 'text'
			),
			'day_end'   => array(
				'label' => esc_html__( 'End Time', 'berg' ),
				'type'  => 'text'
			)		
		)
	)

);