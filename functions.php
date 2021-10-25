<?php
//load stylesheets 
function load_stylesheets()
{	
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 1, 'all');
	wp_enqueue_style('bootstrap');
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all');
	wp_enqueue_style('style');
	wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
	wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');
function wpbootstrap_enqueue_styles() 
{        
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' );
}
add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');

//load scripts 
function addjs()
{
    wp_register_script('scripts',get_template_directory_uri(). '/js/script.js', array(),1,1,1);
    wp_enqueue_script('scripts');    
}
add_action('wp_enqueue_scripts', 'addjs');
//Menu support
add_theme_support('menus');
//Register Menu
function register_all_my_menus(){
	register_nav_menus([
		"primary-menu" => "Primary Menu",
		"footer-menu" => "Footer Menu",
		"right-side" => "Right Side",
		"left-side" => "Left Side"
	]);
}
add_action("init","register_all_my_menus");
//Footer menu widget
function footer_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'strappress' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'strappress' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'strappress' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer copy', 'strappress' ),
		'id'            => 'footer-copy',
		'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Social Nav', 'strappress' ),
		'id'            => 'social-nav',
		'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'footer_widgets_init' );