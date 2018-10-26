<?php

function RSCA_purple_theme_setup() {
  
//Menus

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'RSCA_purple' ),
) );

}

add_action('after_setup_theme','RSCA_purple_theme_setup');
?>