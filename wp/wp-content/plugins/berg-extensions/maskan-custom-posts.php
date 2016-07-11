<?php

	/**
	 * Plugin Name:			Maskan Custom Posts
	 * Plugin URI:			http://themeforest.net/user/maskan
	 * Description:			Post Type
	 * Version:				1.0
	 * Author:				Maskan
	 * Author URI:			http://themeforest.net/user/maskan
	 * License:				GPL-2.0+
	 * License URI:			http://www.gnu.org/licenses/gpl-2.0.txt
	 */

	#-----------------------------------------------------------------#
	# Create Portfolio 
	#-----------------------------------------------------------------# 

	function berg_create_portfolio() {
	    $portfolio_labels = array(
			'name' 				=> __( 'Portfolio', 'taxonomy general name', 'berg'),
			'singular_name' 	=> __( 'Project', 'berg'),
			'search_items' 		=> __( 'Search Projects', 'berg'),
			'all_items' 		=> __( 'Portfolio', 'berg'),
			'parent_item' 		=> __( 'Parent Project', 'berg'),
			'edit_item' 		=> __( 'Edit Project', 'berg'),
			'update_item' 		=> __( 'Update Project', 'berg'),
			'add_new_item' 		=> __( 'Add New Project', 'berg')
		);

		$args = array(
			'labels' 				=> $portfolio_labels,
			'rewrite'      			=> array( 'slug' => 'portfolio', 'with_front' => false ),
			'singular_label' 		=> __('Project', 'berg'),
			'public' 				=> true,
			'publicly_queryable'	=> true,
			'show_ui' 				=> true,
			'hierarchical' 			=> false,
			'menu_position' 		=> 9,
			'menu_icon' 			=> 'dashicons-art',
			'supports' 				=> array('title', 'editor', 'thumbnail', 'comments', 'revisions')
		);


		#-----------------------------------------------------------------#
		# Add taxonomys attached to portfolio 
		#-----------------------------------------------------------------# 

		$category_labels = array(
			'name' 				=> __( 'Portfolio Categories', 'berg'),
			'singular_name' 	=> __( 'Project Category', 'berg'),
			'search_items' 		=>  __( 'Search Project Categories', 'berg'),
			'all_items' 		=> __( 'All Project Categories', 'berg'),
			'parent_item' 		=> __( 'Parent Project Category', 'berg'),
			'edit_item' 		=> __( 'Edit Project Category', 'berg'),
			'update_item' 		=> __( 'Update Project Category', 'berg'),
			'add_new_item' 		=> __( 'Add New Project Category', 'berg'),
		    'menu_name' 		=> __( 'Categories', 'berg')
		); 	

		register_taxonomy("project-type",
			array("portfolio"),
				array(
					'hierarchical' 	=> true,
					'labels' 		=> $category_labels,
					'show_ui' 		=> true,
					'query_var' 	=> true,
					'rewrite' 		=> array( 'slug' => 'project-type'
				)
		));
	  
	    register_post_type( 'portfolio' , $args );  
	}
	add_action('init', 'berg_create_portfolio');



	add_action('init', 'berg_page_taxonomy');
	
	function berg_page_taxonomy(){

		$labels = array(
			'name' 				=> __( 'Categories', 'taxonomy general name', 'berg'),
			'singular_name' 	=> __( 'Page', 'berg'),
			'search_items' 		=> __( 'Search Pages', 'berg'),
			'all_items' 		=> __( 'Pages', 'berg'),
			'parent_item' 		=> __( 'Parent Page', 'berg'),
			'edit_item' 		=> __( 'Edit Page', 'berg'),
			'update_item' 		=> __( 'Update Page', 'berg'),
			'add_new_item' 		=> __( 'Add New Page', 'berg')
		); 
		// параметры
		$args = array(
			'hierarchical' 	=> true,
			'labels' 		=> $labels,
			'show_ui' 		=> true,
			'query_var' 	=> true,
			'rewrite' 		=> array( 'slug' => 'pages-type')
		);
		register_taxonomy('taxonomy', array('page'), $args );
	}

?>