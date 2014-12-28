<?php
function child_scripts_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css', array(), '0.2' );
}
add_action( 'wp_enqueue_scripts', 'child_scripts_styles' );

add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'name' );
  }
  return $title;
}

?>
