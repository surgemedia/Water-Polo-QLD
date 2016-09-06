<?php 
function theme_endpoints() {
    register_rest_route( 'rest/', '/clubs', array(
        'methods' => 'GET',
        'callback' => 'all_club_endpoint',
    ) );
    register_rest_route( 'rest/', '/club/(?P<name>[a-z0-9\-]+)', array(
        'methods' => 'GET',
        'callback' => 'club_endpoint',
    ) );
  
} 
add_action( 'rest_api_init', 'theme_endpoints');
 ?>