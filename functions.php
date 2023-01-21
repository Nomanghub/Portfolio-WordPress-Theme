<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

//*** Theme Title Tag 
add_theme_support( 'title-tag' );

// feature image and background image code
add_theme_support('custom-background');
add_theme_support('post-thumbnails');

//Enable support for Post Formats.
add_theme_support( 'post-formats', array(
	'aside',
	'image',
	'video',
	'quote',
	'link',
	'gallery',
	'audio',
) );

// This theme uses wp_nav_menu() in three locations.
register_nav_menus( array(
		'primary' => __( 'Primary Menu','codersforest' ),
		'lanmenu' => __( 'Language Menu','codersforest' ),
	) );
	
// title short for blog	
function short_title($after = '', $length) {
	$mytitle = get_the_title();
	if ( strlen($mytitle) > $length ) {
	$mytitle = substr($mytitle,0,$length);
	echo $mytitle . $after;
	} else {
	echo $mytitle;
    }
	
}

function wpdocs_custom_excerpt_length( $length ) {
	return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );	


function cf_cat_title(){
	if ( is_category() ) :
		printf( __( '%s', 'codersforest' ),  single_cat_title( '', false ) );
	elseif ( is_author() ) :
		printf( __( '%s', 'codersforest' ),  get_the_author( '', false ) );
	else :
		_e( '', 'codersforest' );

	endif;	
}

function cf_blog_cate(){
	$categories = get_the_category();
	$separator = ' ';
	$output = '';
	if ( ! empty( $categories ) ) {
		foreach( $categories as $category ) {
			$output .= '<a class="post-category-marker" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
		}
		echo trim( $output, $separator );
	}	
}

// for footer widget

function cf_theme_widget(){
	
	register_sidebar(array(
	
	'name' => 'Sidebar',
	'description' => 'you can add sidebar from here',
	'id' => 'pagesidebar',
	'before_widget' => '<div class="list-group list-blog">',
	'after_widget' => '</div>',
	'before_title' => '<p class="list-group-item active">',
	'after_title' => '</p>',
	
	));
	

	
    register_sidebar(array(

	'name' => 'Footer One',
	'description' => 'you can add footer one widgets from here',
	'id' => 'footer1',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
	
	));	
	
	
	register_sidebar(array(
	
	'name' => 'Footer Two',
	'description' => 'you can add footer two widgets from here',
	'id' => 'footer2',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h5>',
	'after_title' => '</h5><hr class="space s">',
	
	));	
	
	
	register_sidebar(array(
	
	'name' => 'Footer Three',
	'description' => 'you can add footer three widgets from here',
	'id' => 'footer3',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h5>',
	'after_title' => '</h5><hr class="space s">',
	
	));	
	
	register_sidebar(array(
	
	'name' => 'Footer Four',
	'description' => 'you can add footer four widgets from here',
	'id' => 'footer4',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h5>',
	'after_title' => '</h5><hr class="space s">',
	
	));	

	
	register_sidebar(array(
	
	'name' => 'Copyright Widget',
	'description' => 'you can add copyright widget from here',
	'id' => 'copyright',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
	
	));	
	
	register_sidebar(array(
	
	'name' => 'Cf Widget',
	'description' => 'you can wsi above footer from here',
	'id' => 'cfwidget',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
	
	));	


}

add_action('widgets_init', 'cf_theme_widget');

// Theme Defult main slider 
function cf_mainslider_custom_post_type(){
    $labels = array(
     'name' => 'Main Slider',
	 'singular_name' => 'Sliders',
	 'add_new' => 'Add Slider',
	 'all_items' => 'All Sliders',
	 'add_new_item' =>'Add Slider',
	 'edit_item' => 'Edit Slider',
	 'new_item' => 'New Slider',
	 'view_item' => 'View Slider',
	 'search_item' => 'Search Slider',
	 'not_found' => ' No Items Found',
	 'not_found_in_trash' => 'No item found in trash',
	 'parent_item_colon' => 'Parent Item'
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
		'has_archive'        => true,
        'publicly_queryable' => true,
        'show_in_menu'       => true,
		'show_in_nav_menus'  => false,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => null,
		'menu_icon' => 'dashicons-laptop',
        'supports'           => array( 'title','editor','thumbnail'),
		'exclude_from_search' => false
    );
 
    register_post_type( 'Mainslide', $args );
}
 
add_action( 'init', 'cf_mainslider_custom_post_type' );


function wporg_register_taxonomy_course() {
	 $labels = array(
		 'name'              => _x( 'Category', 'taxonomy general name' ),
		 'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
		 'search_items'      => __( 'Search Category' ),
		 'all_items'         => __( 'All Category' ),
		 'parent_item'       => __( 'Parent Category' ),
		 'parent_item_colon' => __( 'Parent Category:' ),
		 'edit_item'         => __( 'Edit Category' ),
		 'update_item'       => __( 'Update Category' ),
		 'add_new_item'      => __( 'Add New Category' ),
		 'new_item_name'     => __( 'New Category Name' ),
		 'menu_name'         => __( 'Category' ),
	 );
	 $args   = array(
		 'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
		 'rewrite'           => [ 'slug' => 'sl-category' ],
	 );
	 register_taxonomy( 'slcategory', [ 'mainslide' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_course' );

//Theme css declaration
function theme_enqueue_styles(){
	
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'cf-bootstrap-css', get_template_directory_uri().'/scripts/bootstrap/css/bootstrap.css', array(), '3.3.5' );
	wp_enqueue_style( 'cf-style-css', get_template_directory_uri().'/css/style.css', array(), '1.0.0' );
	wp_enqueue_style( 'cf-content-box-css', get_template_directory_uri().'/css/content-box.css', array(), '1.0.0' );
	wp_enqueue_style( 'cf-image-box-css', get_template_directory_uri().'/css/image-box.css', array(), '1.0.0' );
	wp_enqueue_style( 'cf-animations-css', get_template_directory_uri().'/css/animations.css', array(), '1.0.0' );
	wp_enqueue_style( 'cf-components-css', get_template_directory_uri().'/css/components.css', array(), '1.0.0' );
	wp_enqueue_style( 'cf-flexslider-css', get_template_directory_uri().'/scripts/flexslider/flexslider.css', array(), '2.4.0' );
	wp_enqueue_style( 'cf-magnific-css', get_template_directory_uri().'/scripts/magnific-popup.css', array(), '1.0.0' );
	wp_enqueue_style( 'cf-contact-css', get_template_directory_uri().'/scripts/php/contact-form.css', array(), '0.2.1' );
	wp_enqueue_style( 'cf-social-css', get_template_directory_uri().'/scripts/social.stream.css', array(), '1.0.0' );
	wp_enqueue_style( 'cf-skin-css', get_template_directory_uri().'/css/skin.css', array(), '1.0.0' );
	wp_enqueue_style( 'cf-iconsmind-css', get_template_directory_uri().'/scripts/iconsmind/line-icons.min.css', array(), '1.0.0' );
	
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');  

 //Theme js declaration
 
 function theme_enqueue_scripts(){
	
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'cf-script-js', get_template_directory_uri() . '/scripts/script.js', array(), '1.0.0', true );
	wp_enqueue_script( 'cf-bootstrap-js', get_template_directory_uri() . '/scripts/bootstrap/js/bootstrap.min.js', array(), '3.3.5', true );
	wp_enqueue_script( 'cf-imagesloaded-js', get_template_directory_uri() . '/scripts/imagesloaded.min.js', array(), '3.1.8', true );
	wp_enqueue_script( 'cf-parallax-js', get_template_directory_uri() . '/scripts/parallax.min.js', array(), '1.4.2', true );
	wp_enqueue_script( 'cf-flexslider-js', get_template_directory_uri() . '/scripts/flexslider/jquery.flexslider-min.js', array(), '2.5.0', true );
	wp_enqueue_script( 'cf-isotope-js', get_template_directory_uri() . '/scripts/isotope.min.js', array(), '3.0.2', true );
	wp_enqueue_script( 'cf-progress-js', get_template_directory_uri() . '/scripts/jquery.progress-counter.js', array(), '1.0.0', true );
	wp_enqueue_script( 'cf-accordion-js', get_template_directory_uri() . '/scripts/jquery.tab-accordion.js', array(), '1.0.0', true );
	wp_enqueue_script( 'cf-popover-js', get_template_directory_uri() . '/scripts/bootstrap/js/bootstrap.popover.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'cf-magnific-js', get_template_directory_uri() . '/scripts/jquery.magnific-popup.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'cf-slimscroll-popup-js', get_template_directory_uri() . '/scripts/jquery.slimscroll.min.js', array(), '1.3.8', true );
	wp_enqueue_script( 'cf-custom-js', get_template_directory_uri() . '/scripts/custom.js', array(), '1.0.0', true );
	
	
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');	 


function cf_footer_show_hook(){?>
	<div class="col-md-3 footer-left">
		<?php $ftlogotext=get_theme_mod('cf_footer_logo_text_show_hide'); ?>
		<a class="cf-footer-logo" href="<?php bloginfo('home'); ?>"><img src="<?php echo get_theme_mod('cf_footer_logo'); ?>" alt="<?php bloginfo('name'); ?>" /> <?php if($ftlogotext=='show'){?> <?php echo get_theme_mod('cf_footer_logo_text'); ?> <?php }else{ ?> <?php } ?> </a>
		<hr class="space s" />
		<?php dynamic_sidebar('footer1'); ?>
	</div>
	<div class="col-md-3 footer-center text-left">
	   <?php dynamic_sidebar('footer2'); ?>
	</div>
	<div class="col-md-3 footer-right text-left">
	   <?php dynamic_sidebar('footer3'); ?>
	</div>
	<div class="col-md-3 footer-center text-left">
	   <?php dynamic_sidebar('footer4'); ?>
	</div>	
<?php } 
add_action( 'cf_footer_main', 'cf_footer_show_hook');
 
 
function cf_header_show_hook(){?>
    <header class="fixed-top bg-transparent menu-transparent scroll-change" data-menu-anima="fade-in">
        <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
            <div class="navbar navbar-main">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
						
						<?php $logotext=get_theme_mod('cf_main_logo_text_show_hide'); ?>
                        <a class="navbar-brand cf-logo" href="<?php bloginfo('home'); ?>"><img src="<?php echo get_theme_mod('cf_main_logo'); ?>" alt="<?php bloginfo('name'); ?>" /> <?php if($logotext=='show'){?> <?php echo get_theme_mod('cf_main_logo_text'); ?> <?php }else{ ?> <?php } ?> </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <div class="nav navbar-nav navbar-right">
							<?php wp_nav_menu(array('theme_location' => 'primary','menu_class' => 'nav navbar-nav cf-main-menu','menu_id' => 'cf-main-nav','container' =>'','walker' => new custom_walker(),));?>	
                            <div class="search-box-menu cf-hd-search"><form role="search" method="get" id="cfsearch" class="cf-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="search-box scrolldown"><input type="text" class="form-control" placeholder="<?php esc_attr_e('Search for...', 'codersforest'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s"></div><button type="button" class="btn btn-default btn-search"><span class="fa fa-search"></span></button></form></div>
							<?php wp_nav_menu(array('theme_location' => 'lanmenu','menu_class' => 'nav navbar-nav lan-menu cf-lan-menu','menu_id' => 'cf-lan-menu','container' =>'')) ;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php } 
add_action( 'cf_header_main', 'cf_header_show_hook'); 
 
 
 //conected with internal php file
require_once('inc/custom_walker.php');
require_once('inc/theme-options.php');
require_once('metabox/functions.php');
require_once('metabox/init.php');  
require_once('lib/init.php');
if (defined('WPB_VC_VERSION')) {
	require_once('inc/visual-functions.php');
	require_once('inc/visual-items.php');
}