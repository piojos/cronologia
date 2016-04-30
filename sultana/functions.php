<?php


	// 	Theme Supports

	add_theme_support( 'post-thumbnails' );
	function remove_customize_page(){
		global $submenu;
		unset($submenu['themes.php'][6]); // remove customize link
	}
	add_action( 'admin_menu', 'remove_customize_page');

	function wpse200296_before_admin_bar_render(){
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('customize');
	}
	add_action( 'wp_before_admin_bar_render', 'wpse200296_before_admin_bar_render' ); 



	/*
	 *  ACF - Options
	 */

		if( function_exists('acf_add_options_page') ) {
			acf_add_options_page(array(
				'page_title' 	=> 'Opciones Generales',
				'menu_title'	=> 'Opciones',
				'menu_slug' 	=> 'theme-general-settings',
				'capability'	=> 'edit_posts',
				'redirect'		=> false
			));
		}
