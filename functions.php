<?php
/**
 * All our theme functions etc.
 *
 * @package Falcon
 */

/**
 * Set theme up, also note here what we support feature wise.
 */
function falcon_setup() {

	// We don't supply a title tag in header.php
	add_theme_support( 'title-tag' );

	// Default posts/comments RSS feed links to head.
    // Note, comments might not be supported so could need updating
	add_theme_support( 'automatic-feed-links' );

	// Plan to add support for post thumbnails...
	// add_theme_support( 'post-thumbnails' );

	// Header uses wp_nav_menu() at two points.
	register_nav_menus( array(
		'primary_nav'   => esc_html__( 'Primary Menu', 'falcon' ),
		'external_nav'  => esc_html__( 'External/Social Menu', 'falcon' ),
	) );

	/*
	 * Use HTML5 standard markup for...
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Plan to support WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'falcon_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
add_action( 'after_setup_theme', 'falcon_setup' );

/**
 * Register our only widget area
 */
function falcon_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Home Sidebar', 'falcon' ),
		'id'            => 'home-breakout-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'falcon_widgets_init' );

/**
 * Load our theme styles.
 */
function falcon_scripts() {
	wp_enqueue_style( 'oppan-falcon-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'falcon_scripts' );


function falcon_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date( 'd M Y') )
	);

	$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';

	echo '<span class="posted-on">' . $posted_on . '</span>';
}
