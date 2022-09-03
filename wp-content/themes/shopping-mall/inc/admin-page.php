<?php
if(!function_exists('ecommerce_star_submenu_page_callback')){
function ecommerce_star_submenu_page_callback() {
 ?>
<div class="wrap" >

	<div class="welcome-panel">
	
	<h2><?php esc_html_e("We have created a guide to get you started:", 'shopping-mall'); ?> </h2>
	
	<div class="welcome-panel-column">
	
	<h2 id="getting-started"><?php esc_html_e('Getting Started', 'shopping-mall'); ?> </h2>
	
	<br />
	<a class="button button-primary" href="<?php echo shopping_mall_THEME_DOC; ?>" target="_blank"><?php esc_html_e('See Tutorials & FREE DEMO', 'shopping-mall'); ?></a>

	
	<h3><?php echo esc_html__('Set Home Page :-', 'shopping-mall'); ?></h3>
	<p><?php echo esc_html__('Settings -> Reading -> Select a static page, select home page and save settings.', 'shopping-mall'); ?> </p>

	
	<h3><?php echo esc_html__('Create Menus :-', 'shopping-mall'); ?></h3>
	<p><?php echo esc_html__('Appearance > Menu and Click View all locations. Theme has 2 menu areas called Top and Footer. Create and assign menus. Click save.', 'shopping-mall'); ?> </p>			
	
	<h3><?php echo esc_html__('Add Wishlist, Compare support :-', 'shopping-mall'); ?></h3>
	<p><?php echo esc_html__('Install YITH WishList, YITH quick view and YITH Compare plugins.', 'shopping-mall'); ?> </p>
	
	</div>
	
	
	
	<div class="welcome-panel-column">
	
	<h2><?php esc_html_e('Next Steps', 'shopping-mall'); ?> </h2>
	
	<h3><?php echo esc_html__('Add Header Contact and Social links :-', 'shopping-mall'); ?></h3>
	<p><?php echo esc_html__('Customizer  -> Theme Options -> Header, Add phone, email, Work Hours Edit My Account Link', 'shopping-mall'); ?> </p>

	<h3><?php echo esc_html__('Add sub header with Image :-', 'shopping-mall'); ?></h3>
	<p><?php echo esc_html__('Customizer  -> Theme Options -> Sub Header.', 'shopping-mall'); ?> </p>
	
	<h3><?php echo esc_html__('Enable / Disable WooCommerce popup cart | my account :-', 'shopping-mall'); ?></h3>
	<p><?php echo esc_html__('Customizer  -> Theme Options -> Popup cart.', 'shopping-mall'); ?> </p>		
	
	<h3><?php echo esc_html__('Change site layout / Sidebar positions :-', 'shopping-mall'); ?></h3>
	<p><?php echo esc_html__('Customizer  -> Theme Options -> Layout', 'shopping-mall'); ?> </p>
	
	<h3><?php echo esc_html__('Format UI elements :-', 'shopping-mall'); ?></h3>
	<p><?php echo esc_html__('Customizer  -> Theme Options -> Buttons and UI elements', 'shopping-mall'); ?> </p>		

	
	<h3><?php echo esc_html__('Change Fonts :-', 'shopping-mall'); ?></h3>
	<p><?php echo esc_html__('Customizer  -> Theme Options -> Fonts. Change fonts', 'shopping-mall'); ?> </p>

	
	<h3><?php echo esc_html__('Change Footer Credits / Colours :-', 'shopping-mall'); ?></h3>
	<p><?php echo esc_html__('Customizer  -> Theme Options -> Footer. Edit text.', 'shopping-mall'); ?> </p>
	
	</div>
	
	
	<div class="welcome-panel-column">
		<h2><?php esc_html_e('More Actions', 'shopping-mall'); ?> </h2>
		
		<h3><?php echo esc_html__('Change Header style to Storefront / Sticky etc: :-', 'shopping-mall'); ?></h3>
		<p><?php echo esc_html__('Edit page. Righ hand side, you will find page options Select desired header style from page options.', 'shopping-mall'); ?> </p>
		
		<h3><?php echo esc_html__('Creating Product pages :-', 'shopping-mall'); ?></h3>
		<p><?php echo esc_html__('Add shortcode widget and use product shortcodes', 'shopping-mall'); echo esc_html__(' https://docs.woocommerce.com/document/woocommerce-shortcodes/', 'shopping-mall'); ?> </p>			
		
		<a class="button button-primary button-hero" href="<?php echo ECOMMERCE_STAR_THEME_URI; ?>" target="_blank"><?php esc_html_e('See Premium Features', 'shopping-mall'); ?></a>		
	</div>	
	

	</div>

</div> 
 <?php
 }
}
