<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'berg_team' => array(
		'label'         => esc_html__( 'Team Member', 'berg' ),
		'popup-title'   => esc_html__( 'Add/Edit Team Member', 'berg' ),
		'desc'          => esc_html__( 'Here you can add, remove and edit your Team Member.', 'berg' ),
		'type'          => 'addable-popup',
		'template'      => '{{=team_name}}',
		'popup-options' => array(
			'team_name'   => array(
				'label' => esc_html__( 'Team Member Name', 'berg' ),
				'type'  => 'text'
			),
			'team_prof'   => array(
				'label' => esc_html__( 'Team Member Profession', 'berg' ),
				'type'  => 'text'
			),
			'team_desc'  => array(
				'label' => esc_html__( 'Team Member Description', 'berg' ),
				'desc'  => esc_html__( 'Enter a few words that describe the person', 'berg' ),
				'type'  => 'textarea',
				'value' => ''
			),
			'team_link'   => array(
				'label' => esc_html__( 'Link', 'berg' ),
				'type'  => 'text'
			),		
			'team_image' => array(
				'label' => esc_html__( 'Team Member Image', 'berg' ),
				'type'  => 'upload'
			),
		)
	),

	
	
	'berg_block_height'   => array(
		'label' => esc_html__( 'Block Height', 'berg' ),
		'type'  => 'select',
		'value' => 'height400',
		'choices' => array(
	        '' => '---',
	        'height200' => esc_html__('200px', 'berg'),
	        'height250' => esc_html__('250px', 'berg'),
	        'height300' => esc_html__('300px', 'berg'),
	        'height400' => esc_html__('400px', 'berg'),
	        'height500' => esc_html__('500px', 'berg'),
	        'height600' => esc_html__('600px', 'berg'),
	    ),
	),

	'over_display' => array(
        'type'  => 'switch',
        'label' => esc_html__('Display Over', 'berg')
    ),
    'over_color' => array(
        'type'  => 'color-picker',
        'value' => '#000',
        'label' => esc_html__('Over Color', 'berg')
    ),
    'over_opacity'   => array(
        'label' => esc_html__( 'Opacity', 'berg' ),
        'desc'  => esc_html__('0.0-1', 'berg'),
        'type'  => 'text',
        'value' => '0.3'
    ),

	'berg_team_type' => array(
        'type'  => 'image-picker',
        'value' => 'team1',
        'label' => esc_html__('Team Type', 'berg'),
        'choices' => array(
            'team1' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/team-member/static/img/team1.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/team-member/static/img/team1b.jpg',
	        ),
	        'team2' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/team-member/static/img/team2.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/team-member/static/img/team2b.jpg',
	        ),
	        'team3' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/team-member/static/img/team3.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/team-member/static/img/team3b.jpg',
	        ), 
	        'team4' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/team-member/static/img/team4.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/team-member/static/img/team4b.jpg',
	        ),
	        'team5' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/team-member/static/img/team5.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/team-member/static/img/team5b.jpg',
	        ),           
        ),
        'blank' => true, // (optional) if true, images can be deselected
    ),


);