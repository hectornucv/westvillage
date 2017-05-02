<?php 
function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyAVP5QwWp9NU2acObo2PUxLaUzAp4dEoBU';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

?>