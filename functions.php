<?php

function enqueue_styles() {

    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' );
    wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_styles');
function enqueue_scripts() {

    //wp_enqueue_script( 'jqslim', get_template_directory_uri() . '/libs/jquery-3.4.1.slim.min.js' );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/libs/popper.min.js' );
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts');

function customsidebar_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar Widget Title', '' ),
        'id' => 'dysidebar',
        'description' => __( 'demo description', '' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'customsidebar_widgets_init' );

function register_navwalker(){
	require_once get_template_directory() . '/libs/navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function my_menu_function(){
    register_nav_menus( array(
      'primary' => 'Primary Navigation'
    ));
}
add_action( 'init', 'my_menu_function' );

