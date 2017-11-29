<?php 

add_action( 'login_enqueue_scripts', 'login_theme' );
function login_theme() {
	wp_enqueue_style( 'login-styles', get_template_directory_uri().'/css/login.css');
}

?>