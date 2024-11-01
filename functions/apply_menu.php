<?php


// Legger til meny elementer
function HF_create_menu() {
	
	add_menu_page( 
	__('SimplifiesWP', LANG_DOMAIN),
	__('SimplifiesWP', LANG_DOMAIN),
	'manage_options',
	HF_PLUGIN_DIRECTORY_NAME.'/hf_general_page.php',
	'',
	HF_PLUGIN_URL . 'images/icon.png');
	
	add_submenu_page( 
	HF_PLUGIN_DIRECTORY_NAME.'/hf_general_page.php',
	__("General", LANG_DOMAIN),
	__("General", LANG_DOMAIN),
	'manage_options',
	HF_PLUGIN_DIRECTORY_NAME.'/hf_general_page.php'
	);
		
	add_submenu_page( 
	HF_PLUGIN_DIRECTORY_NAME.'/hf_general_page.php',
	__("Login Image", LANG_DOMAIN),
	__("Login Image", LANG_DOMAIN),
	'manage_options',
	HF_PLUGIN_DIRECTORY_NAME.'/hf_settings_logon_logo_page.php'
	);
	
		add_submenu_page( 
	HF_PLUGIN_DIRECTORY_NAME.'/hf_general_page.php',
	__("About", LANG_DOMAIN),
	__("About", LANG_DOMAIN),
	'manage_options',
	HF_PLUGIN_DIRECTORY_NAME.'/hf_about_page.php'
	);
	
	/*
	// Instillinger Meny
	add_options_page(__('HTML Title 3', LANG_DOMAIN), __("Menu title 3", LANG_DOMAIN), 9,  HF_PLUGIN_DIRECTORY_NAME.'/hf_settings_page.php');
	// or create sub menu page
	$parent_slug="index.php";	# For Dashboard
	#$parent_slug="edit.php";		# For Posts
	// more examples at http://codex.wordpress.org/Administration_Menus
	add_submenu_page( $parent_slug, __("HTML Title 4", LANG_DOMAIN), __("Menu title 4", LANG_DOMAIN), 9, HF_PLUGIN_DIRECTORY_NAME.'/hf_settings_page.php');
	*/
}
add_action( 'admin_menu', 'HF_create_menu' );