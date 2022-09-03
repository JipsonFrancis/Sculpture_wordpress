<?php
	
	$speedup_store_theme_color = get_theme_mod('speedup_store_theme_color');

	$speedup_store_custom_css = '';

	if($speedup_store_theme_color != false){
		$speedup_store_custom_css .='#sidebar .tagcloud a:hover,.top-menu,.main-menu, .account a i, span.cart-value, .categry-title, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, .more-btn a, .product-service, .second-border a:hover, #footer input[type="submit"], .copyright, woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebar h3, #sidebar input[type="submit"], .pagination a:hover, .pagination .current, .woocommerce span.onsale, #footer .tagcloud a:hover, input[type="submit"],#res-sidebar input[type="submit"],#comments a.comment-reply-link ,.tags p a:hover,#sidebar .tagcloud a, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .read-moresec a.button{';
			$speedup_store_custom_css .='background-color: '.esc_attr($speedup_store_theme_color).';';
		$speedup_store_custom_css .='}';
	}
	if($speedup_store_theme_color != false){
		$speedup_store_custom_css .=' #footer .woocommerce a.button:hover, .woocommerce button.button:hover{';
			$speedup_store_custom_css .='background-color: '.esc_attr($speedup_store_theme_color).' !important;';
		$speedup_store_custom_css .='}';
	}
	if($speedup_store_theme_color != false){
		$speedup_store_custom_css .='#footer h3, .woocommerce-message::before, #footer h3,.woocommerce-message::before, .primary-navigation ul ul a, .primary-navigation a:hover, #footer li a:hover,.primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation a:focus,.sf-arrows ul .sf-with-ul:after, .sf-arrows ul li > .sf-with-ul:focus:after,.sf-arrows ul li:hover > .sf-with-ul:after,.sf-arrows .sfHover > .sf-with-ul:after,.primary-navigation li a:hover, .primary-navigation li:hover a,.tags i,.metabox a:hover,#footer a.rsswidget, .primary-navigation ul ul li:hover > a, #sidebar ul li a:hover{';
			$speedup_store_custom_css .='color: '.esc_attr($speedup_store_theme_color).';';
		$speedup_store_custom_css .='}';
	}
	if($speedup_store_theme_color != false){
		$speedup_store_custom_css .='.woocommerce-message, hr.slidehr,.primary-navigation ul ul{';
			$speedup_store_custom_css .='border-top-color: '.esc_attr($speedup_store_theme_color).';';
		$speedup_store_custom_css .='}';
	}
	if($speedup_store_theme_color != false){
		$speedup_store_custom_css .='#footer .tagcloud a:hover, #footer input[type="search"],.primary-navigation ul, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button{';
			$speedup_store_custom_css .='border-color: '.esc_attr($speedup_store_theme_color).';';
		$speedup_store_custom_css .='}';
	}
	if($speedup_store_theme_color != false){
		$speedup_store_custom_css .='nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit{';
			$speedup_store_custom_css .='background-color: '.esc_attr($speedup_store_theme_color).'!important;';
		$speedup_store_custom_css .='}';
	}

	// media
	$speedup_store_custom_css .='@media screen and (max-width:1000px) {';
	if($speedup_store_theme_color){
	$speedup_store_custom_css .='#res-sidebar, .primary-navigation ul ul a,.primary-navigation a:focus, .primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation ul ul ul ul,#contact-info{
	background-image: linear-gradient(-90deg, #000 0%, '.esc_attr($speedup_store_theme_color).' 120%);
		}';
	}
	$speedup_store_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$speedup_store_theme_lay = get_theme_mod( 'speedup_store_theme_options','Default');
    if($speedup_store_theme_lay == 'Default'){
		$speedup_store_custom_css .='body{';
			$speedup_store_custom_css .='max-width: 100%;';
		$speedup_store_custom_css .='}';
		$speedup_store_custom_css .='.page-template-custom-home-page .middle-header{';
			$speedup_store_custom_css .='width: 97.3%';
		$speedup_store_custom_css .='}';
	}else if($speedup_store_theme_lay == 'Container'){
		$speedup_store_custom_css .='body{';
			$speedup_store_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$speedup_store_custom_css .='}';
		$speedup_store_custom_css .='.page-template-custom-home-page .middle-header{';
			$speedup_store_custom_css .='width: 97.7%';
		$speedup_store_custom_css .='}';
	}else if($speedup_store_theme_lay == 'Box Container'){
		$speedup_store_custom_css .='body{';
			$speedup_store_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$speedup_store_custom_css .='}';
		$speedup_store_custom_css .='#header{';
			$speedup_store_custom_css .='right:0';
		$speedup_store_custom_css .='}';
	}

	/*---------------Slider Content Layout -------------------*/
	$speedup_store_theme_lay = get_theme_mod( 'speedup_store_slider_content_alignment','Left');
    if($speedup_store_theme_lay == 'Left'){
		$speedup_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$speedup_store_custom_css .='text-align:left; left:15%; right:45%;';
		$speedup_store_custom_css .='}';
	}else if($speedup_store_theme_lay == 'Center'){
		$speedup_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$speedup_store_custom_css .='text-align:center !important; left:20%; right:20%;';
		$speedup_store_custom_css .='}';
		$speedup_store_custom_css .='hr.slidehr{';
			$speedup_store_custom_css .='margin: 0 auto;';
		$speedup_store_custom_css .='}';
	}else if($speedup_store_theme_lay == 'Right'){
		$speedup_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$speedup_store_custom_css .='text-align:right !important; left:45%; right:15%;';
		$speedup_store_custom_css .='}';
		$speedup_store_custom_css .='hr.slidehr{';
			$speedup_store_custom_css .='margin: 0 0 0 auto;';
		$speedup_store_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$speedup_store_theme_lay = get_theme_mod( 'speedup_store_slider_image_opacity','0.7');
	if($speedup_store_theme_lay == '0'){
		$speedup_store_custom_css .='#slider img{';
			$speedup_store_custom_css .='opacity:0';
		$speedup_store_custom_css .='}';
		}else if($speedup_store_theme_lay == '0.1'){
		$speedup_store_custom_css .='#slider img{';
			$speedup_store_custom_css .='opacity:0.1';
		$speedup_store_custom_css .='}';
		}else if($speedup_store_theme_lay == '0.2'){
		$speedup_store_custom_css .='#slider img{';
			$speedup_store_custom_css .='opacity:0.2';
		$speedup_store_custom_css .='}';
		}else if($speedup_store_theme_lay == '0.3'){
		$speedup_store_custom_css .='#slider img{';
			$speedup_store_custom_css .='opacity:0.3';
		$speedup_store_custom_css .='}';
		}else if($speedup_store_theme_lay == '0.4'){
		$speedup_store_custom_css .='#slider img{';
			$speedup_store_custom_css .='opacity:0.4';
		$speedup_store_custom_css .='}';
		}else if($speedup_store_theme_lay == '0.5'){
		$speedup_store_custom_css .='#slider img{';
			$speedup_store_custom_css .='opacity:0.5';
		$speedup_store_custom_css .='}';
		}else if($speedup_store_theme_lay == '0.6'){
		$speedup_store_custom_css .='#slider img{';
			$speedup_store_custom_css .='opacity:0.6';
		$speedup_store_custom_css .='}';
		}else if($speedup_store_theme_lay == '0.7'){
		$speedup_store_custom_css .='#slider img{';
			$speedup_store_custom_css .='opacity:0.7';
		$speedup_store_custom_css .='}';
		}else if($speedup_store_theme_lay == '0.8'){
		$speedup_store_custom_css .='#slider img{';
			$speedup_store_custom_css .='opacity:0.8';
		$speedup_store_custom_css .='}';
		}else if($speedup_store_theme_lay == '0.9'){
		$speedup_store_custom_css .='#slider img{';
			$speedup_store_custom_css .='opacity:0.9';
		$speedup_store_custom_css .='}';
		}

	/*----------------- Button Settings option-----------------*/
	$speedup_store_button_padding_top_bottom = get_theme_mod('speedup_store_button_padding_top_bottom');
	$speedup_store_button_padding_left_right = get_theme_mod('speedup_store_button_padding_left_right');
	if($speedup_store_button_padding_top_bottom != false || $speedup_store_button_padding_left_right != false){
		$speedup_store_custom_css .='.second-border a, #slider .more-btn a, #comments .form-submit input[type="submit"], .product-page .woocommerce ul.products li.product .button{';
			$speedup_store_custom_css .='padding-top: '.esc_attr($speedup_store_button_padding_top_bottom).'px !important; padding-bottom: '.esc_attr($speedup_store_button_padding_top_bottom).'px !important; padding-left: '.esc_attr($speedup_store_button_padding_left_right).'px !important; padding-right: '.esc_attr($speedup_store_button_padding_left_right).'px !important; display:inline-block;';
		$speedup_store_custom_css .='}';
	}

	$speedup_store_button_border_radius = get_theme_mod('speedup_store_button_border_radius');
	if($speedup_store_button_border_radius != false){
		$speedup_store_custom_css .='.second-border a,#slider .more-btn a, #comments .form-submit input[type="submit"], .product-page .woocommerce ul.products li.product .button{';
			$speedup_store_custom_css .='border-radius: '.esc_attr($speedup_store_button_border_radius).'px;';
		$speedup_store_custom_css .='}';
	}

	/*-----------------------------Responsive Setting --------------------*/
	$speedup_store_stickyheader = get_theme_mod( 'speedup_store_responsive_sticky_header',false);
	if($speedup_store_stickyheader == true && get_theme_mod( 'speedup_store_sticky_header', false) == false){
    	$speedup_store_custom_css .='.fixed-header{';
			$speedup_store_custom_css .='position:static;';
		$speedup_store_custom_css .='} ';
	}
    if($speedup_store_stickyheader == true){
    	$speedup_store_custom_css .='@media screen and (max-width:575px) {';
		$speedup_store_custom_css .='.fixed-header{';
			$speedup_store_custom_css .='position:fixed;';
		$speedup_store_custom_css .='} }';
	}else if($speedup_store_stickyheader == false){
		$speedup_store_custom_css .='@media screen and (max-width:575px) {';
		$speedup_store_custom_css .='.fixed-header{';
			$speedup_store_custom_css .='position:static;';
		$speedup_store_custom_css .='} }';
	}

	$speedup_store_slider = get_theme_mod( 'speedup_store_responsive_slider',false);
	if($speedup_store_slider == true && get_theme_mod( 'speedup_store_slider_hide', false) == false){
    	$speedup_store_custom_css .='#slider{';
			$speedup_store_custom_css .='display:none;';
		$speedup_store_custom_css .='} ';
	}
    if($speedup_store_slider == true){
    	$speedup_store_custom_css .='@media screen and (max-width:575px) {';
		$speedup_store_custom_css .='#slider{';
			$speedup_store_custom_css .='display:block;';
		$speedup_store_custom_css .='} }';
	}else if($speedup_store_slider == false){
		$speedup_store_custom_css .='@media screen and (max-width:575px) {';
		$speedup_store_custom_css .='#slider{';
			$speedup_store_custom_css .='display:none;';
		$speedup_store_custom_css .='} }';
	}

	$speedup_store_scroll = get_theme_mod( 'speedup_store_responsive_scroll',true);
	if($speedup_store_scroll == true && get_theme_mod( 'speedup_store_enable_disable_scroll', true) == false){
    	$speedup_store_custom_css .='#scroll-top{';
			$speedup_store_custom_css .='display:none !important;';
		$speedup_store_custom_css .='} ';
	}
    if($speedup_store_scroll == true){
    	$speedup_store_custom_css .='@media screen and (max-width:575px) {';
		$speedup_store_custom_css .='#scroll-top{';
			$speedup_store_custom_css .='visibility: visible !important;';
		$speedup_store_custom_css .='} }';
	}else if($speedup_store_scroll == false){
		$speedup_store_custom_css .='@media screen and (max-width:575px) {';
		$speedup_store_custom_css .='#scroll-top{';
			$speedup_store_custom_css .='visibility: hidden !important;';
		$speedup_store_custom_css .='} }';
	}

	$advance_ecommerce_ = get_theme_mod( 'speedup_store_responsive_sidebar',true);
    if($advance_ecommerce_ == true){
    	$speedup_store_custom_css .='@media screen and (max-width:575px) {';
		$speedup_store_custom_css .='#sidebar{';
			$speedup_store_custom_css .='display:block;';
		$speedup_store_custom_css .='} }';
	}else if($advance_ecommerce_ == false){
		$speedup_store_custom_css .='@media screen and (max-width:575px) {';
		$speedup_store_custom_css .='#sidebar{';
			$speedup_store_custom_css .='display:none;';
		$speedup_store_custom_css .='} }';
	}

	$speedup_store_loader = get_theme_mod( 'speedup_store_responsive_preloader', true);
	if($speedup_store_loader == true && get_theme_mod( 'speedup_store_preloader_option', true) == false){
    	$speedup_store_custom_css .='#loader-wrapper{';
			$speedup_store_custom_css .='display:none;';
		$speedup_store_custom_css .='} ';
	}
    if($speedup_store_loader == true){
    	$speedup_store_custom_css .='@media screen and (max-width:575px) {';
		$speedup_store_custom_css .='#loader-wrapper{';
			$speedup_store_custom_css .='display:block;';
		$speedup_store_custom_css .='} }';
	}else if($speedup_store_loader == false){
		$speedup_store_custom_css .='@media screen and (max-width:575px) {';
		$speedup_store_custom_css .='#loader-wrapper{';
			$speedup_store_custom_css .='display:none;';
		$speedup_store_custom_css .='} }';
	}

	/*------------------ Skin Option  -------------------*/
	$speedup_store_theme_lay = get_theme_mod( 'speedup_store_background_skin_mode','Transparent Background');
    if($speedup_store_theme_lay == 'With Background'){
		$speedup_store_custom_css .='.page-box,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$speedup_store_custom_css .='background-color: #fff;';
		$speedup_store_custom_css .='}';
	}else if($speedup_store_theme_lay == 'Transparent Background'){
		$speedup_store_custom_css .='#sidebar aside,.slider-category, .page-box-single{';
			$speedup_store_custom_css .='background-color: transparent;';
		$speedup_store_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$speedup_store_top_bottom_product_button_padding = get_theme_mod('speedup_store_top_bottom_product_button_padding', 10);
	if($speedup_store_top_bottom_product_button_padding != false){
		$speedup_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$speedup_store_custom_css .='padding-top: '.esc_attr($speedup_store_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($speedup_store_top_bottom_product_button_padding).'px;';
		$speedup_store_custom_css .='}';
	}

	$speedup_store_left_right_product_button_padding = get_theme_mod('speedup_store_left_right_product_button_padding', 16);
	if($speedup_store_left_right_product_button_padding != false){
		$speedup_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$speedup_store_custom_css .='padding-left: '.esc_attr($speedup_store_left_right_product_button_padding).'px; padding-right: '.esc_attr($speedup_store_left_right_product_button_padding).'px;';
		$speedup_store_custom_css .='}';
	}

	$speedup_store_product_button_border_radius = get_theme_mod('speedup_store_product_button_border_radius', 0);
	if($speedup_store_product_button_border_radius != false){
		$speedup_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$speedup_store_custom_css .='border-radius: '.esc_attr($speedup_store_product_button_border_radius).'px;';
		$speedup_store_custom_css .='}';
	}

	$speedup_store_show_related_products = get_theme_mod('speedup_store_show_related_products',true);
	if($speedup_store_show_related_products == false){
		$speedup_store_custom_css .='.related.products{';
			$speedup_store_custom_css .='display: none;';
		$speedup_store_custom_css .='}';
	}

	$speedup_store_show_wooproducts_border = get_theme_mod('speedup_store_show_wooproducts_border', false);
	if($speedup_store_show_wooproducts_border == true){
		$speedup_store_custom_css .='.products li{';
			$speedup_store_custom_css .='border: 1px solid #767676;';
		$speedup_store_custom_css .='}';
	}

	$speedup_store_top_bottom_wooproducts_padding = get_theme_mod('speedup_store_top_bottom_wooproducts_padding',0);
	if($speedup_store_top_bottom_wooproducts_padding != false){
		$speedup_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$speedup_store_custom_css .='padding-top: '.esc_attr($speedup_store_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($speedup_store_top_bottom_wooproducts_padding).'px !important;';
		$speedup_store_custom_css .='}';
	}

	$speedup_store_left_right_wooproducts_padding = get_theme_mod('speedup_store_left_right_wooproducts_padding',0);
	if($speedup_store_left_right_wooproducts_padding != false){
		$speedup_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$speedup_store_custom_css .='padding-left: '.esc_attr($speedup_store_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($speedup_store_left_right_wooproducts_padding).'px !important;';
		$speedup_store_custom_css .='}';
	}

	$speedup_store_wooproducts_border_radius = get_theme_mod('speedup_store_wooproducts_border_radius',0);
	if($speedup_store_wooproducts_border_radius != false){
		$speedup_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$speedup_store_custom_css .='border-radius: '.esc_attr($speedup_store_wooproducts_border_radius).'px;';
		$speedup_store_custom_css .='}';
	}

	$speedup_store_wooproducts_box_shadow = get_theme_mod('speedup_store_wooproducts_box_shadow',0);
	if($speedup_store_wooproducts_box_shadow != false){
		$speedup_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$speedup_store_custom_css .='box-shadow: '.esc_attr($speedup_store_wooproducts_box_shadow).'px '.esc_attr($speedup_store_wooproducts_box_shadow).'px '.esc_attr($speedup_store_wooproducts_box_shadow).'px #eee;';
		$speedup_store_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$speedup_store_copyright_content_align = get_theme_mod('speedup_store_copyright_content_align');
	if($speedup_store_copyright_content_align != false){
		$speedup_store_custom_css .='.copyright{';
			$speedup_store_custom_css .='text-align: '.esc_attr($speedup_store_copyright_content_align).';';
		$speedup_store_custom_css .='}';
	}

	$speedup_store_footer_content_font_size = get_theme_mod('speedup_store_footer_content_font_size', 16);
	if($speedup_store_footer_content_font_size != false){
		$speedup_store_custom_css .='.copyright p{';
			$speedup_store_custom_css .='font-size: '.esc_attr($speedup_store_footer_content_font_size).'px !important;';
		$speedup_store_custom_css .='}';
	}

	$speedup_store_copyright_padding = get_theme_mod('speedup_store_copyright_padding', 15);
	$speedup_store_custom_css .='.copyright{';
		$speedup_store_custom_css .='padding-top: '.esc_attr($speedup_store_copyright_padding).'px; padding-bottom: '.esc_attr($speedup_store_copyright_padding).'px;';
	$speedup_store_custom_css .='}';

	$speedup_store_footer_widget_bg_color = get_theme_mod('speedup_store_footer_widget_bg_color');
	if($speedup_store_footer_widget_bg_color != false){
		$speedup_store_custom_css .='#footer{';
			$speedup_store_custom_css .='background-color: '.esc_attr($speedup_store_footer_widget_bg_color).';';
		$speedup_store_custom_css .='}';
	}

	$speedup_store_footer_widget_bg_image = get_theme_mod('speedup_store_footer_widget_bg_image');
	if($speedup_store_footer_widget_bg_image != false){
		$speedup_store_custom_css .='#footer{';
			$speedup_store_custom_css .='background: url('.esc_attr($speedup_store_footer_widget_bg_image).');';
		$speedup_store_custom_css .='}';
	}

	// scroll to top
	$speedup_store_scroll_font_size_icon = get_theme_mod('speedup_store_scroll_font_size_icon', 22);
	if($speedup_store_scroll_font_size_icon != false){
		$speedup_store_custom_css .='#scroll-top .fas{';
			$speedup_store_custom_css .='font-size: '.esc_attr($speedup_store_scroll_font_size_icon).'px;';
		$speedup_store_custom_css .='}';
	}

	// Slider Height 
	$speedup_store_slider_image_height = get_theme_mod('speedup_store_slider_image_height');
	$speedup_store_custom_css .='#slider img{';
		$speedup_store_custom_css .='height: '.esc_attr($speedup_store_slider_image_height).'px;';
	$speedup_store_custom_css .='}';

	// Display Blog Post 
	$speedup_store_display_blog_page_post = get_theme_mod( 'speedup_store_display_blog_page_post','In Box');
    if($speedup_store_display_blog_page_post == 'Without Box'){
		$speedup_store_custom_css .='.page-box{';
			$speedup_store_custom_css .='border:none; margin:25px 0;';
		$speedup_store_custom_css .='}';
	}

	// slider overlay
	$speedup_store_slider_overlay = get_theme_mod('speedup_store_slider_overlay', true);
	if($speedup_store_slider_overlay == false){
		$speedup_store_custom_css .='#slider img{';
			$speedup_store_custom_css .='opacity:1;';
		$speedup_store_custom_css .='}';
	} 
	$speedup_store_slider_image_overlay_color = get_theme_mod('speedup_store_slider_image_overlay_color', true);
	if($speedup_store_slider_overlay != false){
		$speedup_store_custom_css .='#slider{';
			$speedup_store_custom_css .='background-color: '.esc_attr($speedup_store_slider_image_overlay_color).';';
		$speedup_store_custom_css .='}';
	}

	// site title and tagline font size option
	$speedup_store_site_title_size_option = get_theme_mod('speedup_store_site_title_size_option', 30);{
	$speedup_store_custom_css .='.logo a, .logo p.site-title a{';
	$speedup_store_custom_css .='font-size: '.esc_attr($speedup_store_site_title_size_option).'px;';
		$speedup_store_custom_css .='}';
	}

	$speedup_store_site_tagline_size_option = get_theme_mod('speedup_store_site_tagline_size_option', 13);{
	$speedup_store_custom_css .='.logo p{';
	$speedup_store_custom_css .='font-size: '.esc_attr($speedup_store_site_tagline_size_option).'px !important;';
		$speedup_store_custom_css .='}';
	}

	// woocommerce product sale settings
	$speedup_store_border_radius_product_sale = get_theme_mod('speedup_store_border_radius_product_sale',0);
	$speedup_store_custom_css .='.woocommerce span.onsale {';
		$speedup_store_custom_css .='border-radius: '.esc_attr($speedup_store_border_radius_product_sale).'px;';
	$speedup_store_custom_css .='}';

	$speedup_store_align_product_sale = get_theme_mod('speedup_store_align_product_sale', 'Right');
	if($speedup_store_align_product_sale == 'Right' ){
		$speedup_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$speedup_store_custom_css .=' left:auto; right:0;';
		$speedup_store_custom_css .='}';
	}elseif($speedup_store_align_product_sale == 'Left' ){
		$speedup_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$speedup_store_custom_css .=' left:0; right:auto;';
		$speedup_store_custom_css .='}';
	}

	$speedup_store_product_sale_font_size = get_theme_mod('speedup_store_product_sale_font_size',14);
	$speedup_store_custom_css .='.woocommerce span.onsale{';
		$speedup_store_custom_css .='font-size: '.esc_attr($speedup_store_product_sale_font_size).'px;';
	$speedup_store_custom_css .='}';

	// preloader background option
	$speedup_store_loader_background_color_settings = get_theme_mod('speedup_store_loader_background_color_settings');
	$speedup_store_custom_css .='#loader-wrapper .loader-section{';
		$speedup_store_custom_css .='background-color: '.esc_attr($speedup_store_loader_background_color_settings).';';
	$speedup_store_custom_css .='} ';







