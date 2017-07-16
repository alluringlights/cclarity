<?php

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'custom-header' );

	register_nav_menu( 'primary', 'Header Navigation' );

	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page();
		acf_add_options_sub_page('Header');
		acf_add_options_sub_page('Footer');
		
	}

function theme_scripts() {

	wp_enqueue_script( 'libraries-js', get_template_directory_uri() . '/js/min/libraries-min.js', '', '', true );

	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/min/custom-min.js', '', '', true );

	wp_enqueue_style( 'master-css', get_template_directory_uri() . '/library/css/master.css' );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css' );

	}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );






$sidebarargs = array(
	'name'          => __( 'Sidebar', 'theme_text_domain' ),
	'id'            => 'sidebar-1',
	'description'   => '',
    'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar( $sidebarargs );


//Footer widget area
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer',
    'id' => 'footer',
    'before_widget' => '<li id="%1$s" class="widget sidebar-widget clearfix">',
	'after_widget'  => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);




// filter out uncategorized category name

function remove_uncategorized_links( $categories ){
 
    foreach ( $categories as $cat_key => $category ){
        if( 1 == $category->term_id ){
            unset( $categories[ $cat_key ] );
        }
    }
 
    return $categories;
     
} add_filter('get_the_categories', 'remove_uncategorized_links', 1);



//Shortens permalink to bit.ly on Tweets.
function getBitly($url) {
$bitly = file_get_contents("http://api.bit.ly/v3/shorten?login=brentonic&apiKey=R_5f27f95674a9466aae9d84fad577da88&longUrl=$url%2F&format=txt");
return $bitly;
}
