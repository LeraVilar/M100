<?php 


add_action( 'wp_enqueue_scripts', 'Test' );



function Test() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
}
