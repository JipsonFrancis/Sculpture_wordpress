<?php
//about theme info
add_action( 'admin_menu', 'speedup_store_abouttheme' );
function speedup_store_abouttheme() {    	
	add_theme_page( esc_html__('About Speedup Theme', 'speedup-store'), esc_html__('About Speedup Theme', 'speedup-store'), 'edit_theme_options', 'speedup_store_guide', 'speedup_store_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function speedup_store_admin_theme_style() {
   wp_enqueue_style('speedup-store-custom-admin-style', esc_url(get_template_directory_uri()) .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'speedup_store_admin_theme_style');

//guidline for about theme
function speedup_store_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
 <div class="wrapper-info">
	 <div class="header">
	 	<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" alt="" />
	 	<h2><?php esc_html_e('Welcome to Speedup Store Theme', 'speedup-store'); ?></h2>
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Netnus has got everything that an individual and group need to be successful in their venture.', 'speedup-store'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( SPEEDUP_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'speedup-store'); ?></a>
			<a href="<?php echo esc_url( SPEEDUP_STORE_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'speedup-store'); ?></a>
			<a href="<?php echo esc_url( SPEEDUP_STORE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'speedup-store'); ?></a>
		</div>
	</div>
	<div class="button-bg">
	<button role="tab" class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'speedup-store'); ?></button>
	<button role="tab" class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'speedup-store'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up homepage', 'speedup-store'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( SPEEDUP_STORE_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'speedup-store'); ?></a>
			<a href="<?php echo esc_url( SPEEDUP_STORE_CONTACT ); ?>"><?php esc_html_e('Support', 'speedup-store'); ?></a>
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Start Customizing', 'speedup-store'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'speedup-store'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'speedup-store'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'speedup-store'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'speedup-store'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png" alt="" />	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.png" alt="" />	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'speedup-store'); ?></b> <?php esc_html_e('Set the front page: Go to Setting -> Reading --> Set the front page display static page to home page', 'speedup-store'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>

	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'speedup-store'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( SPEEDUP_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'speedup-store'); ?></a>
			<a href="<?php echo esc_url( SPEEDUP_STORE_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'speedup-store'); ?></a>
			<a href="<?php echo esc_url( SPEEDUP_STORE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'speedup-store'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/screenshot.png" alt="" />
	  			<p><?php esc_html_e( 'The WordPress Speedup theme is robust, reliable, stylish and engaging with seamless use for all types of online stores and ecommerce shops. It does not matter whether you have a small onsite shop or a giant retail online chain, this theme can serve you to its fullest with its ambitious design and amazing layouts. Its dynamic nature can be guessed from the vast variety of layout designs it offers that let you fulfil the requirements of any online trading business without having to write a single line of code. With banners and sliders, impress your visitors by presenting a larger than life image. All the needs of an ecommerce shop are meticulously fulfilled giving a great experience to users. This WordPress Speedup theme has a friendly and interactive frontend and backend interface to help use the site to its maximum potential.', 'speedup-store' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'speedup-store' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Slider with a Number of Slider Images Upload Option Available.', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'speedup-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'speedup-store' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

<script>
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;

	}
	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
</script>
<?php } ?>