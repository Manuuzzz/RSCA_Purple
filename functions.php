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
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

}


add_action('after_setup_theme','RSCA_purple_theme_setup');
?>

<?php

function loadMyScripts() {

wp_register_script('custom-js','./scripts/front.js');
wp_enqueue_script('custom-js');
$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
//after wp_enqueue_script
wp_localize_script( 'custom-js', 'object_name', $translation_array );

}

add_action( 'wp_enqueue_scripts', 'loadMyScripts' );

?>

