<?php

/* Enqueue Scripts and Styles
-------------------------------------------------------------- */

function theme_name_scripts() {
	
	wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'slick.css', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'animate.css', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css' );
	
	wp_enqueue_script( 'jquery.js', get_template_directory_uri() . '/js/jquery.min.js' );
	wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script( 'tweenmax.js', get_template_directory_uri() . '/js/TweenMax.min.js' );
	wp_enqueue_script( 'scrollmagic.js', get_template_directory_uri() . '/js/ScrollMagic.min.js' );
	wp_enqueue_script( 'animation.gsap.js', get_template_directory_uri() . '/js/animation.gsap.min.js' );
	wp_enqueue_script( 'slick.js', get_template_directory_uri() . '/js/slick.min.js' );
	wp_enqueue_script( 'jquery.center.js', get_template_directory_uri() . '/js/jquery.center.js' );
	wp_enqueue_script( 'matchheight.js', get_template_directory_uri() . '/js/jquery.matchHeight-min.js' );
 	wp_enqueue_script( 'scripts.js', get_template_directory_uri() . '/js/scripts.js' );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

/* Register Nav-Menus
-------------------------------------------------------------- */

register_nav_menus( array(
	'main' => 'Main',
	'mobile' => 'Mobile',
	'practiceareas' => 'Practice Areas',
) );

/* Dynamic Sidebars
-------------------------------------------------------------- */

if(function_exists('register_sidebars')){
	register_sidebar(array(
		'name'          => 'Main',
		'id'            => 'main',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name'          => 'Blog',
		'id'            => 'blog',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>'
	));
/*
	register_sidebar(array(
		'name'          => 'Practice Areas',
		'id'            => 'practice-areas',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>'
	));
*/
}

/* Add Options Page
-------------------------------------------------------------- */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Firm Info',
		'menu_title'	=> 'Firm Info',
		'menu_slug' 	=> 'firm_info',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

/* Add Theme Support SVG
-------------------------------------------------------------- */

function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

/* Add Theme Support Page Thumbnails
-------------------------------------------------------------- */

add_theme_support( 'post-thumbnails' );

/* Modify the_excerpt()
-------------------------------------------------------------- */

remove_filter('get_the_excerpt', 'wp_trim_excerpt');

function nb_html_excerpt($text) {
    global $post;
    if ( '' == $text ) {
        $text = get_the_content('');
        $text = apply_filters('the_content', $text);
        $text = str_replace('\]\]\>', ']]&gt;', $text);
        $text = strip_tags($text, '<p>');
        $excerpt_length = 145;
        $words = explode(' ', $text, $excerpt_length + 1);
        if (count($words)> $excerpt_length) {
            array_pop($words);
            array_push($words, '[...]');
            $text = implode(' ', $words);
        }
    }
    return $text;
}

add_filter('get_the_excerpt', 'nb_html_excerpt');

/* Modify the_excerpt() " read more "
-------------------------------------------------------------- */

function new_excerpt_more($more) {
   global $post;
   return '... <a href="'. get_permalink($post->ID) . '">' . 'read more' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');

/* Add Page Slug to Body Class
-------------------------------------------------------------- */

function add_slug_body_class( $classes ) {
global $post;
    if ( isset( $post ) ) { $classes[] = $post->post_type . '-' . $post->post_name;}
    return $classes;}
add_filter( 'body_class', 'add_slug_body_class' );


/* Remove WP Version
-------------------------------------------------------------- */

add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

function sdt_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

/* Enable shortcodes in text widgets
-------------------------------------------------------------- */

add_filter('widget_text','do_shortcode');