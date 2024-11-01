<?php
/*
* Wordpress Versjon
* Deaktivert
function change_footer_version() {
  return ('Versjon ' . CMSSPESIALISTENVERSION);
}
add_filter( 'update_footer', 'change_footer_version', 9999 );
*/


function remove_footer_admin () {
	echo('Copyright &copy; ' . get_bloginfo('name') . ' ' . date('Y'));
}
add_filter('admin_footer_text', 'remove_footer_admin');
