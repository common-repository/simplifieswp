<?php 
/*
* Egendefinert logo veg pålogging
*/
function my_custom_login_logo() {
	
		$LogoURL = HF_PLUGIN_URL . 'images/logon_logo.png';
		if (get_option('logo_url') != '') {
			 $LogoURL = get_option('logo_url'); 
		}
		
    echo '<style type="text/css">
        h1 a { background-image:url('. $LogoURL .') !important; }
    </style>';
}
add_action('login_head', 'my_custom_login_logo');

// Endrer linken til logo påloggingen
function put_my_url(){
	return (get_site_url()); 
}
add_filter('login_headerurl', 'put_my_url');













