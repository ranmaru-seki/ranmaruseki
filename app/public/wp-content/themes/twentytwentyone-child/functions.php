<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('twenty-twenty-one-style'));
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );
function add_google_fonts() {
    wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap', false );
}

function custom_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'custom_mime_types' );

?>
