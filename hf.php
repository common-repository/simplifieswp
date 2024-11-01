<?php
/*
Plugin Name: SimplifiesWP
Plugin URI: http://sylliaas.no/simplifieswp/simplifieswp/
Description: Remove unwanted features from Wordpress.
Version: 1.1
Author: Eirik Martiniussen Sylliaas
Author URI: http://sylliaas.no/
*/


?><?php

/*
* Definisjon av konstanter
*/
define( 'HF_PUGIN_NAME', 'SimplifiesWP');
define( 'HF_PUGIN_URL', 'http://sylliaas.no/simplifieswp/simplifieswp/');
define( 'HF_RSS_STREAM', 'http://sylliaas.no/category/simplifieswp/feed/');
define( 'HF_PUGIN_COMPANY', 'Eirik Martiniussen Sylliaas');
define( 'HF_PUGIN_COMPANY_URL', 'http://sylliaas.no/');
define( 'HF_CURRENT_VERSION', '1.1' );
define( 'HF_PLUGIN_DIRECTORY_NAME', 'simplifieswp');
define( 'HF_PLUGIN_DIRECTORY', WP_PLUGIN_DIR . "/" .HF_PLUGIN_DIRECTORY_NAME . "/");
define( 'HF_PLUGIN_URL', plugins_url('/', __FILE__));
define( 'HF_DEBUG', true);
define( 'LANG_DOMAIN', 'HF' );



//registrer innstillinger
function HF_register_settings() {
	//register settings
	//Logo URL
	register_setting( 'HF-settings-group', 'logo_url' );
	
}
add_action( 'admin_init', 'HF_register_settings' );


// Aktiverer standard innstillinger
function HF_activate() {
	add_option('logo_url', '');
}
register_activation_hook(__FILE__, 'HF_activate');


// Deaktiverer standard innstillinger
function HF_deactivate() {
	// needed for proper deletion of every option
	delete_option('logo_url');
}
register_deactivation_hook(__FILE__, 'HF_deactivate');


// Avinstallerer
function HF_uninstall() {
	# delete all data stored
	delete_option('logo_url');
}
register_uninstall_hook(__FILE__, 'HF_uninstall');


// Debug
function HF_debug() {
	# only run debug on localhost
	if ($_SERVER["HTTP_HOST"]=="localhost" && defined('EPS_DEBUG') && EPS_DEBUG==true) return true;
}


//Bibliotek


//Registrer meny
require_once(HF_PLUGIN_DIRECTORY . "functions/apply_menu.php");
//Laster informasjon om systemet og setter det i bunntekst og div...
require_once(HF_PLUGIN_DIRECTORY . "functions/apply_system_info.php");
//Fjerner WordPress funksjoner som er unødvendige.
require_once(HF_PLUGIN_DIRECTORY . "functions/remove_trash.php");
//Endrer logo ved pålogging
require_once(HF_PLUGIN_DIRECTORY . "functions/change_logon_logo.php");
//Registrer widget
require_once(HF_PLUGIN_DIRECTORY . "functions/apply_dashboard_widgets.php");    
//Endrer mailen og tittlene på mailene som blir sendt fra siden
require_once(HF_PLUGIN_DIRECTORY . "functions/change_mail.php");
//Tillat bruk av media bibliotek - for bruk i egen innstikk
require_once(HF_PLUGIN_DIRECTORY . "functions/apply_media_library.php");
