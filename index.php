<?php

//wev~v1
register_rest_route( 'wp_json', '/third_party_accept', array(
'methods'  => 'POST',//Can be any GET , POST , REQUEST
'callback' => 'some_function'
) );
		
		
function some_function(){
	/*
	Do some stuff
	*/
	
}

// post to URL : https://www.site_url.com/wp-json/wp_json/some_function
