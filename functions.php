<?php


// Navigation menus

register_nav_menus( array(
	'Header Nav' => 'Main Header Navigation'
) );

// Sidebar

register_sidebar(array(
  'name' => __( 'Sidebar' ),
  'id' => 'sidebar',
  'description' => __( 'Widgets in this area will be shown in the sidebar.' ),
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));

?>