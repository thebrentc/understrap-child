<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    
    /* mods by thebrentc */
	wp_enqueue_style( 'fullpage-style', get_stylesheet_directory_uri() . '/css/fullpage.min.css', array(), $the_theme->get( 'Version' ) );  // TODO gruntify
    
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

/* mods by thebrentc */
class ThemeB {

	function themeb_widgets_init() {	
		register_sidebar( array(
			'name'          => 'Header Widget Area',
			'id'            => 'header-widgets',
			'before_widget' => '<div class="header-widgets">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="header-widgets-title">',
			'after_title'   => '</h2>',
		) );
	}
	
}

add_action( 'widgets_init', 'ThemeB::themeb_widgets_init' );
