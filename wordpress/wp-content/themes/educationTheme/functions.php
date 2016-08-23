<?php
function scripts_enqueue()
{
	wp_enqueue_style('body',get_template_directory_uri().'/css/styling.css',array(),'1.0.0 ','all');
}
add_action('wp_enqueue_scripts','scripts_enqueue');
function theme_setup()
{
    add_theme_support('menus');
}
add_action('init','theme_setup');
register_nav_menu('Main Menu','Main menu');
register_nav_menu('Footer Menu','footer menu');

function my_custom_background_setup() {
 /*$args = array(
    'default-color' => 'red',
    'default-image' => '',
  );*/
  add_theme_support( 'custom-background'/*, $args */);
}
add_action( 'after_setup_theme', 'my_custom_background_setup' );
?>
