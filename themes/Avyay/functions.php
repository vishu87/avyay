<?php 

/********** Custom Navigation Menus ************/

if(function_exists('register_nav_menus')){
	register_nav_menus(
		array(
			'primary-menu' => 'Primary Menu'
		)
	);
}

/******* Thumbnails ********/

add_theme_support( 'post-thumbnails' );
if(!get_option("medium_crop")) add_option("medium_crop", "1");
else update_option("medium_crop", "1");

/******* CSS & JS Files ********/

function theme_css_scripts() {

    /* Theme JS  */
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'owl-carousal', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );

    wp_enqueue_script( 'validation', get_template_directory_uri() . '/js/jquery.validate.js', array(), '1.0.0', true );

	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);

    /* Theme CSS */
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '1.0.0', false );

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', false );

    wp_enqueue_style( 'owl-1', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.0.0', false );

    wp_enqueue_style( 'owl-2', get_template_directory_uri() . '/css/owl.theme.css', array(), '1.0.0', false );
    
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'main', get_template_directory_uri() . '/main.css', array(), '1.0.2', false );
    

}

add_action( 'wp_enqueue_scripts', 'theme_css_scripts' );

?>