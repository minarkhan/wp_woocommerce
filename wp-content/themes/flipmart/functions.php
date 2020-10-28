<?php 


add_action( 'after_setup_theme', 'flipmart_setup_theme' );
function flipmart_setup_theme(){
	add_theme_support( 'title_tag' );
	add_theme_support( 'post_thumbnails' );

}


















































add_action( 'wp_enqueue_scripts', 'enquee_style_script' );
function enquee_style_script(){

	wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '3.2.0');
	wp_enqueue_style( 'blue-style', get_template_directory_uri().'/assets/css/main.css', array(), '3.2.0');
	wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri().'/assets/css/blue.css', array(), '3.2.0');
	wp_enqueue_style( 'owl-transitions-style', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '3.2.0');
	wp_enqueue_style( 'animate-style', get_template_directory_uri().'/assets/css/owl.transitions.css', array(), '3.2.0');
	wp_enqueue_style( 'animate-min-style', get_template_directory_uri().'/assets/css/animate.min.css.css', array(), '3.2.0');
	wp_enqueue_style( 'rateit-style', get_template_directory_uri().'/assets/css/rateit.css', array(), '3.2.0');
	wp_enqueue_style( 'bootstrap-select-style', get_template_directory_uri().'/assets/css/bootstrap-select.min.css', array(), '3.2.0');

	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.css', array(), '3.2.0');

	wp_enqueue_style( 'roboto-family', 'http://fonts.googleapis.com/css?family=Roboto:300,400,500,700', array(), '3.2.0');
	wp_enqueue_style( 'roboto-family', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800', array(), '3.2.0');
	wp_enqueue_style( 'roboto-family', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', array(), '3.2.0');
	wp_enqueue_style( 'theme-style', get_stylesheet_uri());


    wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/js/jquery-1.11.1.min.js', array(), '1.11.1' true);
    wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.11.1' );
    wp_enqueue_script( 'bootstrap-hover-dropdown.min', get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.min.js', array(), '1.11.1' );
    wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.11.1' );
    wp_enqueue_script( 'echo.min.js', get_template_directory_uri() . '/assets/js/echo.min.js', array(), '1.11.1' );
    wp_enqueue_script( 'jquery.easing-1.3.min.js', get_template_directory_uri() . '/assets/js/jquery.easing-1.3.min.js', array(), '1.11.1' );
    wp_enqueue_script( 'bootstrap-slider.min', get_template_directory_uri() . '/assets/js/bootstrap-slider.min.js', array(), '1.11.1' );
    wp_enqueue_script( 'jquery.rateit.min', get_template_directory_uri() . '/assets/js/jquery.rateit.min.js', array(), '1.11.1' );
    wp_enqueue_script( 'lightbox.min', get_template_directory_uri() . '/assets/js/lightbox.min.js', array(), '1.11.1' );
    wp_enqueue_script( 'bootstrap-select.min', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', array(), '1.11.1' );
    wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.11.1' );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.11.1' );
	



}









