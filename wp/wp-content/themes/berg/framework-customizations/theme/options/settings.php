<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(

    /*Main Settings*/
    'general'    => array(
        'title'  => esc_html__('Main Settings','berg'),
        'type'  => 'tab',
        'options' => array(
            'passpartu'    => array(
                'type'  => 'switch',
                'value' => 'yes',
                'label' => esc_html__('Passpartu', 'berg'),
                'desc'  => esc_html__('Template Passpartu', 'berg'),
                'left-choice' => array(
                    'value' => 'no',
                    'label' => esc_html__('No', 'berg')
                ),
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => esc_html__('Yes', 'berg')
                )
            ),
            'passpartu_color' => array(
                    'type'  => 'color-picker',
                    'value' => '#e4e4e4',
                    'label' => esc_html__('Passpartu Color', 'berg'),
                    'desc'  => esc_html__('Choose passpartu color', 'berg')
            ),
            'logo_type'    => array(
                'type'  => 'switch',
                'value' => 'text',
                'label' => esc_html__('Type of Logo', 'berg'),
                'desc'  => esc_html__('Choose type of logo', 'berg'),
                'left-choice' => array(
                    'value' => 'text',
                    'label' => esc_html__('Text', 'berg')
                ),
                'right-choice' => array(
                    'value' => 'image',
                    'label' => esc_html__('Image', 'berg')
                )
            ),
            'logo_text' => array(
                'type'  => 'text',
                'value' => 'Berg',
                'label' => esc_html__('Logo Text', 'berg')
            ),
            'logo_image' => array(
                'type'  => 'upload',
                'label' => esc_html__('Logo Image', 'berg'),
                'images_only' => true
            ),
            'rounded'    => array(
                'type'  => 'switch',
                'value' => 'no',
                'label' => esc_html__('Rounded Elements', 'berg'),
                'desc'  => esc_html__('Rounded menu, blocks, buttons etc.', 'berg'),
                'left-choice' => array(
                    'value' => 'no',
                    'label' => esc_html__('No', 'berg')
                ),
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => esc_html__('Yes', 'berg')
                )
            )
        )
    ),
    
    /*Header*/
    'header'    => array(
        'title'  => esc_html__('Header','berg'),
        'type'  => 'tab',
        'options' => array(
            'header_type' => array(
                'type'  => 'image-picker',
                'value' => 'header_white',
                'label' => esc_html__('Header Type', 'berg'),
                'desc'  => esc_html__('Choose header type', 'berg'),
                'choices' => array(
                    'header_white' => get_template_directory_uri() .'/images/admin/header_wht.jpg',
                    'header_dark' => get_template_directory_uri() .'/images/admin/header_dark.jpg',
                    'header_simple' => get_template_directory_uri() .'/images/admin/header_simple.jpg'                  
                ),
                'blank' => false, // (optional) if true, images can be deselected
            ),
            'header_back'    => array(
                'type'  => 'switch',
                'value' => 'color',
                'label' => esc_html__('Header Background', 'berg'),
                'left-choice' => array(
                    'value' => 'color',
                    'label' => esc_html__('Color', 'berg')
                ),
                'right-choice' => array(
                    'value' => 'image',
                    'label' => esc_html__('Image', 'berg')
                )
            ),

            'header_back_color' => array(
                    'type'  => 'color-picker',
                    'value' => '#f8f8f8',
                    'label' => esc_html__('Header Background Color', 'berg'),
            ),
            'header_img' => array(
                'label'         => esc_html__( 'Header Image', 'berg' ),
                'type'          => 'popup',
                'popup-options' => array(
                    'header_back_img' => array(
                        'type'  => 'upload',
                        'label' => esc_html__('Header Background Image', 'berg'),
                        'images_only' => true
                    ),
                    'header_fea'    => array(
                        'type'  => 'switch',
                        'label' => esc_html__('Header Feautured Image', 'berg'),
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
                    ) 
                )
            ),
           
            'header_wht'    => array(
                'type'  => 'switch',
                'label' => esc_html__('Header White Text', 'berg'),
            ),
            'header_address_display'    => array(
                'type'  => 'switch',
                'value' => 'yes',
                'label' => esc_html__('Display Header Address Line', 'berg'),
                'left-choice' => array(
                    'value' => 'yes',
                    'label' => esc_html__('Yes', 'berg')
                ),
                'right-choice' => array(
                    'value' => 'no',
                    'label' => esc_html__('No', 'berg')
                )
            ),
            'header_address' => array(
                'type'  => 'text',
                'value' => 'Australia place nice, RD nice DHA Road, state pace 786',
                'label' => esc_html__('Address', 'berg')
            ),
            'header_mail' => array(
                'type'  => 'text',
                'value' => 'support@theberg.com',
                'label' => esc_html__('E-mail', 'berg')
            ),
            'header_phone' => array(
                'type'  => 'text',
                'value' => '+11 (0) 200 1111 001',
                'label' => esc_html__('Phone', 'berg')
            ),
            'header_search_display'    => array(
                'type'  => 'switch',
                'value' => 'yes',
                'label' => esc_html__('Display Search', 'berg'),
                'left-choice' => array(
                    'value' => 'yes',
                    'label' => esc_html__('Yes', 'berg')
                ),
                'right-choice' => array(
                    'value' => 'no',
                    'label' => esc_html__('No', 'berg')
                )
            ),
        )
    ),

    /*berg_slider*/
    'berg_slider_tab'    => array(
        'title'  => esc_html__('Slider','berg'),
        'type'  => 'tab',
        'options' => array(
            'berg_slider' => array(
                'label'         => esc_html__( 'Slider Items', 'berg' ),
                'type'          => 'addable-popup',
                'template'      => '{{=berg_slider_title}}',
                'popup-options' => array(
                    'berg_slider_image' => array(
                        'label' => esc_html__( 'Image', 'berg' ),
                        'type'  => 'upload'
                    ),
                    'slider_video_switch' => array(
                        'label' => esc_html__('Video', 'berg'),
                        'type' => 'switch',
                    ),
                    'slider_video_mp4' => array(
                        'label' => esc_html__( 'Video Link MP4', 'berg' ),
                        'type'  => 'text',
                        'value' => '',   
                    ),
                    'slider_video_wemb' => array(
                        'label' => esc_html__( 'Video Link WEBM', 'berg' ),
                        'type'  => 'text',
                        'value' => '',   
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
                    'berg_slider_image_layout' => array(
                        'type'  => 'image-picker',
                        'value' => 'intro_text_lc',
                        'label' => esc_html__('Text Layout', 'berg'),
                        'choices' => array(
                            'intro_text_lt' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/sl_lt.gif',
                            'intro_text_lc' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/sl_lc.gif',
                            'intro_text_lb' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/sl_lb.gif',
                            'intro_text_ct' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/sl_ct.gif',
                            'intro_text_cc' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/sl_cc.gif',
                            'intro_text_cb' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/sl_cb.gif',
                            'intro_text_rt' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/sl_rt.gif',
                            'intro_text_rc' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/sl_rc.gif',
                            'intro_text_rb' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/sl_rb.gif',                  
                        ),
                        'blank' => true, // (optional) if true, images can be deselected
                    ),
                    'berg_slider_text_align' => array(
                        'type'  => 'image-picker',
                        'value' => 'intro_text_lc',
                        'label' => esc_html__('Text Alignment', 'berg'),
                        'choices' => array(
                            'text-left' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tl.gif',
                            'text-center' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tc.gif',
                            'text-right' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tr.gif',                
                        ),
                        'blank' => true, // (optional) if true, images can be deselected
                    ),
                    'berg_slider_title'   => array(
                        'label' => esc_html__( 'Title', 'berg' ),
                        'type'   => 'wp-editor',
                        'teeny'  => true,
                        'reinit' => true,
                    ),
                    'berg_slider_title_bold_color' => array(
                            'type'  => 'color-picker',
                            'value' => '',
                            'label' => esc_html__('Title Bold Color', 'berg'),
                    ),
                    'berg_slider_subtitle'   => array(
                        'label' => esc_html__( 'Subtitle', 'berg' ),
                        'type'  => 'text'
                    ),
                    'berg_slider_text'  => array(
                        'label' => esc_html__( 'Text', 'berg' ),
                        'type'  => 'textarea',
                        'value' => ''
                    ),
                    'berg_slider_btns' => array(
                        'label'         => esc_html__( 'Slider Buttons', 'berg' ),
                        'type'          => 'addable-popup',
                        'template'      => '{{=berg_slider_btns_name}}',
                        'popup-options' => array(
                            'berg_slider_btns_name'   => array(
                                'label' => esc_html__( 'Title', 'berg' ),
                                'type'  => 'text'
                            ),
                            'berg_slider_btns_link'   => array(
                                'label' => esc_html__( 'Link', 'berg' ),
                                'type'  => 'text'
                            )   
                        )
                    )       
                )
            ),
            'berg_slider_arrow_link'   => array(
                'label' => esc_html__( 'Down Arrow Link', 'berg' ),
                'value' => '#welcome',
                'type'  => 'text'
            )
        )
    ),

    /*Blog*/
    'blog'    => array(
        'title'  => esc_html__('Blog','berg'),
        'type'  => 'tab',
        'options' => array(
            'blog_type' => array(
                'type'  => 'select',
                'value' => 'choice-1',
                'label' => esc_html__('Blog Type', 'berg'),
                'choices' => array(
                    'choice-1' => esc_html__('Default', 'berg'),
                    'choice-2' => esc_html__('Masonry', 'berg'),
                ),
                'no-validate' => false,
            ),
            'blog_full_width' => array(
                'label' => esc_html__('Full Width', 'berg'),
                'type' => 'switch',
            ),
            'blog_sidebar_align' => array(
                'label' => esc_html__('Sidebar Align', 'berg'),
                'type' => 'switch',
                'left-choice' => array(
                    'value' => 'left',
                    'label' => esc_html__('Left Sidebar', 'berg')
                ),
                'right-choice' => array(
                    'value' => 'right',
                    'label' => esc_html__('Right Sidebar', 'berg')
                )
            ),
        )
    ),

    /*Footer*/
    'footer'    => array(
        'title'  => esc_html__('Footer','berg'),
        'type'  => 'tab',
        'options' => array(
            'footer_copyright' => array(
                'type'  => 'text',
                'value' => 'Copyright 2018 - The Berg',
                'label' => esc_html__('Copyright', 'berg')
            ),

            'footer_back_color' => array(
                    'type'  => 'color-picker',
                    'value' => '#0e0e0e',
                    'label' => esc_html__('Footer Background Color', 'berg'),
            ),


            'footer_menu_block' => array(
                'type'  => 'switch',
                'value' => 'no',
                'label' => esc_html__('Display Footer Menu Block', 'berg'),
                'left-choice' => array(
                    'value' => 'no',
                    'label' => esc_html__('No', 'berg')
                ),
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => esc_html__('Yes', 'berg')
                )
            ),
            'footer_menu' => array (
                'type' => 'popup',
                'label' => esc_html__('Footer Menu', 'berg'),
                'button' => esc_html__('Edit', 'berg'),
                'popup-title' => null,
                'size' => 'small',
                'popup-options' => array(
                    'posts'=> array(
                        'type'  => 'multi-select',
                        'label' => esc_html__('Post', 'berg'),
                        'desc'  => esc_html__('Choose Footer Post', 'berg'),
                        'population' => 'posts',
                        'source' => 'page',
                        'prepopulation' => 10,
                        'limit' => 1,
                    )
                )
            ),
            'footer_menublock_back_color' => array(
                    'type'  => 'color-picker',
                    'value' => '#292929',
                    'label' => esc_html__('Footer Menu Block Background Color', 'berg'),
            ),

            'footer_social' => array(
                'type' => 'popup',
                'label' => esc_html__('Social Buttons', 'berg'),
                'button' => esc_html__('Edit', 'berg'),
                'popup-title' => null,
                'size' => 'small',
                'popup-options' => array(
                    'social_facebook' => array(
                        'type'  => 'text',
                        'value' => 'http://facebook.com',
                        'label' => esc_html__('Facebook', 'berg')
                    ),
                    'social_twitter' => array(
                        'type'  => 'text',
                        'value' => 'http://twitter.com',
                        'label' => esc_html__('Twitter', 'berg')
                    ),
                    'social_google' => array(
                        'type'  => 'text',
                        'value' => 'http://plus.google.com',
                        'label' => esc_html__('Google Plus', 'berg')
                    ),
                    'social_pinterest' => array(
                        'type'  => 'text',
                        'value' => 'http://pinterest.com',
                        'label' => esc_html__('Pinterest', 'berg')
                    ),
                    'social_linkedin' => array(
                        'type'  => 'text',
                        'value' => 'http://linkedin.com/',
                        'label' => esc_html__('Linkedin', 'berg')
                    ),
                    'social_github' => array(
                        'type'  => 'text',
                        'value' => 'http://github.com',
                        'label' => esc_html__('Github', 'berg')
                    ),
                    'social_vimeo' => array(
                        'type'  => 'text',
                        'value' => 'http://vimeo.com',
                        'label' => esc_html__('Vimeo', 'berg')
                    ),
                    'social_instagram' => array(
                        'type'  => 'text',
                        'value' => 'http://instagram.com',
                        'label' => esc_html__('Instagram', 'berg')
                    )
                )
            ),
            
            
        )   
    ),

    /*Typo*/
    'typo'    => array(
        'title'  => esc_html__('Typography','berg'),
        'type'  => 'tab',
        'options' => array(
            'font_body' => array(
                'type'  => 'typography-v2',
                'value' => array(
                    'family' => 'Open Sans',
                    'size'   => 14,
                    'line-height' => 26,
                ),
               'components' => array(
                    'family' => true,
                    'size' => true,
                    'line-height' => true,
                    'color' => false, 
                    'letter-spacing' => false,
                    'style'=>true,
                    'weight' => true,
                    'variations' =>false,
                ),
                'label' => esc_html__('Body Text', 'berg'),
                'desc'  => esc_html__('Description', 'berg'),
            ),
            'font_title' => array(
                'type'  => 'typography-v2',
                'value' => array(
                    'family' => 'Oswald',
                    'color' => '#292929',
                    'style' => 'regular'
                ),
               'components' => array(
                    'family' => true,
                    'size' => false,
                    'line-height' => false,
                    'color' => true, 
                    'letter-spacing' => false,
                ),
                'label' => esc_html__('Title Font', 'berg'),
                'desc'  => esc_html__('Description', 'berg'),
            ),
            'font_titles_sizes' => array (
                'type' => 'popup',
                'label' => esc_html__('Titles Sizes', 'berg'),
                'button' => esc_html__('Edit', 'berg'),
                'popup-title' => null,
                'size' => 'small',
                'popup-options' => array(
                    'font_big_title' => array(
                        'type'  => 'typography-v2',
                        'value' => array(
                            'size'   => 32,
                            'line-height' => 40,
                        ),
                       'components' => array(
                            'family' => false,
                            'size' => true,
                            'line-height' => true,
                            'color' => false, 
                            'letter-spacing' => false,
                        ),
                        'label' => esc_html__('Big Titles', 'berg'),
                    ),
                    'font_small_title' => array(
                        'type'  => 'typography-v2',
                        'value' => array(
                            'family' => 'Oswald',
                            'size'   => 18,
                            'line-height' => 28,
                            'color' => '#292929'
                        ),
                        'components' => array(
                            'family' => false,
                            'size' => true,
                            'line-height' => true,
                            'color' => true, 
                            'letter-spacing' => false,
                        ),
                        'label' => esc_html__('Small Title', 'berg'),
                    ),
                    'font_slider_title' => array(
                        'type'  => 'typography-v2',
                        'value' => array(
                            'family' => 'Oswald',
                            'size'   => 45,
                            'line-height' => 48,
                        ),
                        'components' => array(
                            'family' => false,
                            'size' => true,
                            'line-height' => true,
                            'color' => false, 
                            'letter-spacing' => false,
                        ),
                        'label' => esc_html__('Slider Title', 'berg'),
                    ),
                    'font_slider_subtitle' => array(
                        'type'  => 'typography-v2',
                        'value' => array(
                            'family' => 'Oswald',
                            'size'   => 14,
                            'line-height' => 24,
                        ),
                        'components' => array(
                            'family' => false,
                            'size' => true,
                            'line-height' => true,
                            'color' => false, 
                            'letter-spacing' => false,
                        ),
                        'label' => esc_html__('Slider Subtitle', 'berg'),
                    ),
                    'font_countdown' => array(
                        'type'  => 'typography-v2',
                        'value' => array(
                            'family' => 'Oswald',
                            'size'   => 30,
                            'line-height' => 38,
                        ),
                        'components' => array(
                            'family' => false,
                            'size' => true,
                            'line-height' => true,
                            'color' => false, 
                            'letter-spacing' => false,
                        ),
                        'label' => esc_html__('Countdown', 'berg'),
                    ),
                    'font_mini_title' => array(
                        'type'  => 'typography-v2',
                        'value' => array(
                            'family' => 'Oswald',
                            'size'   => 40,
                            'line-height' => 50,
                        ),
                        'components' => array(
                            'family' => false,
                            'size' => true,
                            'line-height' => true,
                            'color' => false, 
                            'letter-spacing' => false,
                        ),
                        'label' => esc_html__('Mini Title', 'berg'),
                    )
                )
            ),
            'font_title_uppercase'    => array(
                'type'  => 'switch',
                'label' => esc_html__('Title Uppercase', 'berg'),
            )

        )
    )
    
    
    
);
