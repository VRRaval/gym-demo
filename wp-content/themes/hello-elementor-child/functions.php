<?php
function footer_menu_shortcode($atts, $content = null) {
	extract(shortcode_atts(array( 'name' => null, 'class' => null ), $atts));
	return wp_nav_menu( array( 'menu' => $name, 'menu_class' => 'myclass', 'echo' => false ) );
}
add_shortcode('menu', 'footer_menu_shortcode');


function hello_theme_ele_scripts() {
    wp_enqueue_style( 'material-icons', '//fonts.googleapis.com/icon?family=Material+Icons',array(), wp_get_theme()->get( 'Version' ), 'all' );
}
add_action( 'wp_enqueue_scripts', 'hello_theme_ele_scripts' );

/* Custom Post Type Start */
function create_posttype() {
register_post_type( 'portfolio',
// CPT Options
array(
  'labels' => array(
   'name' => __( 'portfolio' ),
   'singular_name' => __( 'Portfolio' )
  ),
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'portfolio'),
 )
);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
/* Custom Post Type End */

/*Custom Post type start*/
function cw_post_type_portfolio() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('portfolio', 'plural'),
'singular_name' => _x('portfolio', 'singular'),
'menu_name' => _x('portfolio', 'admin menu'),
'name_admin_bar' => _x('portfolio', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New portfolio'),
'new_item' => __('New portfolio'),
'edit_item' => __('Edit portfolio'),
'view_item' => __('View portfolio'),
'all_items' => __('All portfolio'),
'search_items' => __('Search portfolio'),
'not_found' => __('No portfolio found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'portfolio'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('portfolio', $args);
}
add_action('init', 'cw_post_type_portfolio');
/*Custom Post type end*/

function create_portfolio_tax() {
	register_taxonomy( 'portfolio_category', 'portfolio', array(
		'label'        => __( 'Portfolio Category', 'textdomain' ),
		'rewrite'      => array( 'slug' => 'portfolio_category' ),
		'hierarchical' => true,
	) );
}
add_action( 'init', 'create_portfolio_tax', 0 );