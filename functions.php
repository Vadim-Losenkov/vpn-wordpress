<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'register_items');
// add_action('widgets_init', 'register_my_widgets');

// add_filter('document_title_separator', 'title_sep');
// add_filter('the_content', 'my_the_content');

function style_theme() {
	wp_register_script('eruda', '//cdn.jsdelivr.net/npm/eruda');
	wp_enqueue_script( 'eruda' );
	
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/style.min.css');
}

function scripts_theme() {
  wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	
  wp_enqueue_script('slider', get_template_directory_uri() . '/assets/js/slick.min.js');
  wp_enqueue_script('popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js');
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}


function register_items() {
  register_nav_menu('top', 'Меню в шапке');
  
  register_nav_menu('footer-menu-1', 'Меню в подвале 1 колонка');
  register_nav_menu('footer-menu-2', 'Меню в подвале 2 колонка');
  register_nav_menu('footer-menu-3', 'Меню в подвале 3 колонка');
  /* 
  add_theme_support('post-thumbnails', array('post'));
  add_image_size('post-thumb', 1300, 500, true);
  
  add_filter( 'excerpt_more', 'new_excerpt_more' );
  function new_excerpt_more( $more ){
  	global $post;
  	return '<a class="more-link" href="' . get_permalink($post) . '"> Read More<i class="fa fa-arrow-circle-o-right"></i></a>';
  }
  add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
  function my_navigation_template( $template, $class ){
  	return '
  	<nav class="navigation %1$s" role="navigation">
  		<div class="nav-links">%3$s</div>
  	</nav>    
  	';
  }
  */
}
/* 
function register_my_widgets() {
  register_sidebar(array(
    'name'          =>'Right Sidebar',
    'id'            =>'right_sidebar',
    'description'   => 'sidebar на обычной странице',
    'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n",
  ));
}

// filters

function title_sep($sep) {
  $sep = ' | ';
  return $sep;
}

function my_the_content($content) {
  $content .= 'Спасибо за прочтение статьи!';
  return $content;
}
*/