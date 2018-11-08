<?php

function RSCA_purple_theme_setup() {
  
//Menus

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'RSCA_purple' ),
	'secondary' => __( 'Secondary Menu', 'RSCA_purple' ),
) );


// Thumbnail
add_theme_support('post-thumbnails');

//Excerpt length
function custom_excerpt_length( $length ) {
	return 4;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

}


add_action('after_setup_theme','RSCA_purple_theme_setup');
?>



