<?php
function mystarter_scripts() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/mystyle.css' );
}
add_action ( 'wp_enqueue_scripts', 'mystarter_scripts' );
