<?php

// Check if Fertile Grounds Cafe is running in localhost
function fertilegroundscafe_is_localhost() {
	$server_name = strtolower( $_SERVER['SERVER_NAME'] );
	
	return in_array( $server_name, array( 'localhost', '127.0.0.1', 'fertilegrounds.dev' ) );
}
