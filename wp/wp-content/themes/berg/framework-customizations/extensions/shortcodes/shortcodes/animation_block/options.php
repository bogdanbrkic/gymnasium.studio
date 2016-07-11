<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'animation_block' => array(
		'label'         => esc_html__( 'Block', 'berg' ),
		'desc'          => esc_html__( 'Here you can add, remove and edit your Team Member.', 'berg' ),
		'type'          => 'addable-popup',
		'template'      => '{{=title}}',
		'popup-options' => array(
			'icon'    => array(
				'type'  => 'icon',
				'set' => 'themify-icons',
				'label' => esc_html__('Choose an Icon', 'berg'),
			),
			'title'   => array(
				'label' => esc_html__( 'Title', 'berg' ),
				'type'  => 'text'
			),
			'subtitle'   => array(
				'label' => esc_html__( 'Subtitle', 'berg' ),
				'type'  => 'text'
			),
			'desc'  => array(
				'label' => esc_html__( 'Description', 'berg' ),
				'type'  => 'textarea',
				'value' => ''
			),
			'link'   => array(
				'label' => esc_html__( 'Link', 'berg' ),
				'type'  => 'text'
			),		
			'image' => array(
				'label' => esc_html__( 'Image', 'berg' ),
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
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/animation_block/static/img/team1.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/animation_block/static/img/team1b.jpg',
	        ),
	        'team2' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/animation_block/static/img/team2.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/animation_block/static/img/team2b.jpg',
	        ),
	        'team3' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/animation_block/static/img/team3.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/animation_block/static/img/team3b.jpg',
	        ), 
	        'team4' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/animation_block/static/img/team4.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/animation_block/static/img/team4b.jpg',
	        ),
	        'team5' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/animation_block/static/img/team5.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/animation_block/static/img/team5b.jpg',
	        ), 
	        'team6' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/animation_block/static/img/team6.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/animation_block/static/img/team6b.jpg',
	        ),
	        'team7' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/animation_block/static/img/team7.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/animation_block/static/img/team7b.jpg',
	        ),          
        ),
        'blank' => true, // (optional) if true, images can be deselected
    ),


);