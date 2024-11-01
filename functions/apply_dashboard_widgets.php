<?php
function tidy_dashboard()
{
  global $wp_meta_boxes, $current_user;
  // Fjern inkommnede linker for noen brukere
  if(in_array('author', $current_user->roles) || in_array('editor', $current_user->roles))
  {
    unset($wp_meta_boxes['dashboard']['normal ']['core']['dashboard_incoming_links']);
	}
    
	
  // Fjern widgets fra alle brukerene
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  
}
add_action('wp_dashboard_setup', 'tidy_dashboard');

//Fjerner velkomstpanelet
add_action( 'load-index.php', 'remove_welcome_panel' );
function remove_welcome_panel()
{
    remove_action('welcome_panel', 'wp_welcome_panel');
    $user_id = get_current_user_id();
    if (0 !== get_user_meta( $user_id, 'show_welcome_panel', true ) ) {
        update_user_meta( $user_id, 'show_welcome_panel', 0 );
    }
}

//Legger til RSS widget
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
function my_custom_dashboard_widgets() {
global $wp_meta_boxes, $current_user;
if(in_array('author', $current_user->roles) || in_array('editor', $current_user->roles) || in_array('administrator', $current_user->roles)|| is_super_admin($current_user->ID))
{
    wp_add_dashboard_widget('es_help_widget', __("News", LANG_DOMAIN), 'custom_dashboard_help');
}
}
function custom_dashboard_help() {
echo '<div class="rss-widget">';  
     wp_widget_rss_output(array(  
          'url' => HF_RSS_STREAM,  
          'title' => __("News", LANG_DOMAIN),  
          'items' => 4, 
          'show_summary' => 1,  
          'show_author' => 0,  
          'show_date' => 1  
     ));  
     echo "</div>";  
}



