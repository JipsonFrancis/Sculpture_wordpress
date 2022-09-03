<?php
/* This file is part of shopping mall child theme.
 * Note: this function loads the parent stylesheet before, then child theme stylesheet, leave it in place unless you know what you are doing.
 */
	

//add new settings
require_once  get_stylesheet_directory().'/inc/default-settings.php';

require_once   get_stylesheet_directory().'/inc/advanced-recent-posts.php';

//sub menu
require_once  get_stylesheet_directory().'/inc/admin-page.php';

/*
 * get_parent theme settings and override with child theme settings
 */
$shopping_mall_option = wp_parse_args(  get_option( 'ecommerce_star_option', array() ) , ecommerce_star_settings());

add_action( 'wp_enqueue_scripts', 'shopping_mall_styles' );

function shopping_mall_styles() {
	//enqueue parent styles
	wp_enqueue_style( 'shopping-mall-parent-styles', get_template_directory_uri().'/style.css' );
} 

/* 
 * allowed html tags 
 */
$shopping_mall_allowed_html = array(
		'a'          => array(
			'href'  => true,
			'title' => true,
			'class'  => true,			
		),
		'option'          => array(
			'selected'  => true,
			'value' => true,
			'class'  => true,			
		),		
		'p'          => array(
			'class'  => true,
		),		
		'abbr'       => array(
			'title' => true,
		),
		'acronym'    => array(
			'title' => true,
		),
		'b'          => array(),
		'blockquote' => array(
			'cite' => true,
		),
		'cite'       => array(),
		'code'       => array(),
		'del'        => array(
			'datetime' => true,
		),
		'em'         => array(),
		'i'          => array(),
		'q'          => array(
			'cite' => true,
		),
		's'          => array(),
		'strike'     => array(),
		'strong'     => array(),
	);

/* 
 * wp body open 
 */
function shopping_mall_body_open(){
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}
}

add_action('shopping_mall_wp_body_open', 'shopping_mall_body_open');


/*
 * override parent theme custom css
 */
function ecommerce_star_custom_css(){
	require_once  get_stylesheet_directory().'/inc/custom-styles.php';
}

ecommerce_star_custom_css();

/*
 * header_background 
 */

add_action( 'customize_register', 'shopping_mall_customizer_settings' );

/*
 * load customizer control 
 */
if ( class_exists( 'WP_Customize_Control' ) ) {
	// Inlcude the Alpha Color Picker control file.
	require_once get_template_directory().'/inc/color-picker/alpha-color-picker.php';
}

function shopping_mall_customizer_settings( $wp_customize ) {

	//widgets section	
	$wp_customize->add_section( 'home_widgets' , array(
		'title'      => __( 'Home Header Widgets', 'shopping-mall' ),
		'priority'   => 1,
		'panel' => 'theme_options',
	) );	
	
	//top banner
	$wp_customize->add_setting('ecommerce_star_option[top_widgets]' , array(
		'default'    => 'col-sm-12',
		'sanitize_callback' => 'ecommerce_star_sanitize_select',
		'type'=>'option',

	));

	$wp_customize->add_control('ecommerce_star_option[top_widgets]' , array(
		'label' => __('Select Number of Widgets', 'shopping-mall' ),
		'section' => 'home_widgets',
		'type'=>'select',
		'choices'=>array(
			'col-sm-12'=> __('1 Widgets', 'shopping-mall' ),
			'col-sm-6'=> __('2 Widgets', 'shopping-mall' ),
			'col-sm-4'=> __('3 Widgets', 'shopping-mall' ),
			'col-sm-3'=> __('4 Widgets', 'shopping-mall' ),
			'col-sm-2'=> __('6 Widgets', 'shopping-mall' ),
		),
	) );


}



 
//add child theme widget area

function shopping_mall_widgets_init(){

	/* header sidebar */
	global $shopping_mall_option;

	register_sidebar(
		array(
			'name'          => __( 'Home Header Widgets', 'shopping-mall' ),
			'id'            => 'header-banner',
			'description'   => __( 'Add widgets to appear in Header.', 'shopping-mall' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s '.$shopping_mall_option['top_widgets'].' text-center">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'shopping_mall_widgets_init' );

 
/**
 * Return rgb value of a $hex - hexadecimal color value with given $a - alpha value
 * Ex:- ecommerce_star_rgba('#11ffee',15) // return rgba(17,255,238,15)
**/
 
function shopping_mall_rgba($hex,$a){
 
	$r = hexdec(substr($hex,1,2));
	$g = hexdec(substr($hex,3,2));
	$b = hexdec(substr($hex,5,2));
	$result = 'rgba('.$r.','.$g.','.$b.','.$a.')';
	
	return $result;
}

