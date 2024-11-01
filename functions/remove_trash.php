<?php
/*
* Hindrer brukeren i å endre farge på admin-panelet
*/
function admin_color_scheme() {
   global $_wp_admin_css_colors;
   $_wp_admin_css_colors = 0;
}
add_action('admin_head', 'admin_color_scheme');

/*
* Gjør så brukeren ikke kan redigere innstikk og temaer fra nettleseren
*/
function ra_block_tp_edit( $caps, $cap ) {
	if( $cap == 'edit_themes' || $cap == 'edit_plugins' )
		$caps[] = 'do_not_allow';
	return $caps;
}
add_filter( 'map_meta_cap', 'ra_block_tp_edit', 10, 3 );

/*
* Fjerner wordpress relatert hjelp
*/
function wps_admin_bar() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('about');
    $wp_admin_bar->remove_menu('wporg');
    $wp_admin_bar->remove_menu('documentation');
    $wp_admin_bar->remove_menu('support-forums');
    $wp_admin_bar->remove_menu('feedback');
    $wp_admin_bar->remove_menu('view-site');
}
add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );
function hide_help() {
    echo '<style type="text/css">
            #contextual-help-link-wrap { display: none !important; }
          </style>';
}
add_action('admin_head', 'hide_help');

/*
* Fjerner Hei, før brukernavnet øverst i høyre hjørne.
*/
function replace_howdy( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Howdy, ', '', $my_account->title );   // 'Text before username', '', $my_account->title          
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
add_filter( 'admin_bar_menu', 'replace_howdy',25 );




/**
 * Eradicate the "Send Trackbacks" post meta box
 */
function brazenly_remove_trackback_meta_box() {
	remove_meta_box( 'trackbacksdiv', 'post', 'normal' );
}
add_action('admin_menu','brazenly_remove_trackback_meta_box' );

function brazenly_remove_slug_meta_box() {
	remove_meta_box( 'slugdiv', 'post', 'normal' );
}
add_action('admin_menu','brazenly_remove_slug_meta_box' );