<?php 

/*
* Endrer e-post adresse og tittel på mail som sendes fra siden.
*/
add_filter('wp_mail_from', 'new_mail_from');
add_filter('wp_mail_from_name', 'new_mail_from_name');
function new_mail_from($old) {
 return get_bloginfo('admin_email');
}
function new_mail_from_name($old) {
 return get_bloginfo('name');
}