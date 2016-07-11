<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(


	'berg_reviews' => array(
		'label'         => esc_html__( 'Review', 'berg' ),
		'popup-title'   => esc_html__( 'Add/Edit Review', 'berg' ),
		'desc'          => esc_html__( 'Here you can add, remove and edit your Review', 'berg' ),
		'type'          => 'addable-popup',
		'template'      => '{{=review_name}}',
		'popup-options' => array(
			'review_name'   => array(
				'label' => esc_html__( 'Review Name', 'berg' ),
				'type'  => 'text'
			),
			'review_desc'  => array(
				'label' => esc_html__( 'Review Description', 'berg' ),
				'desc'  => esc_html__( 'Enter a few words that describe the person', 'berg' ),
				'type'  => 'textarea',
				'value' => ''
			),			
			'review_image' => array(
				'label' => esc_html__( 'Review Image', 'berg' ),
				'type'  => 'upload'
			),
		)
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
    
	'berg_reviews_type' => array(
        'type'  => 'image-picker',
        'value' => 'review1',
        'label' => esc_html__('Review Type', 'berg'),
        'choices' => array(
            'review1' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/reviews/static/img/review1.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/reviews/static/img/review1b.jpg',
	        ),
	        'review2' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/reviews/static/img/review2.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/reviews/static/img/review2b.jpg',
	        ),
	        'review3' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/reviews/static/img/review3.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/reviews/static/img/review3b.jpg',
	        ), 
	        'review4' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/reviews/static/img/review4.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/reviews/static/img/review4b.jpg',
	        ),
	        'review5' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/reviews/static/img/review5.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/reviews/static/img/review5b.jpg',
	        ),   
	        'review6' => array(
	            'small' => array (
	            	'src' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/reviews/static/img/review6.jpg',
	            	'height' => 40
	            ),
	            'large' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/reviews/static/img/review6b.jpg',
	        ),           
        ),
        'blank' => true, // (optional) if true, images can be deselected
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
	)
);