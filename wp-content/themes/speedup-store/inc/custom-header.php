<?php
/**
 * @package speedup-store
 * @subpackage speedup-store
 * @since speedup-store 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses speedup_store_header_style()
*/

function speedup_store_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'speedup_store_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1300,
		'height'                 => 95,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'speedup_store_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'speedup_store_custom_header_setup' );

if ( ! function_exists( 'speedup_store_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see speedup_store_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'speedup_store_header_style' );
function speedup_store_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$speedup_store_custom_css = "
        .middle-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center;
		}";
	   	wp_add_inline_style( 'speedup-store-basic-style', $speedup_store_custom_css );
	endif;
}
endif; // speedup_store_header_style