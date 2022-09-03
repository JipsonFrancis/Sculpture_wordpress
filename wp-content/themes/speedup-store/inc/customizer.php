<?php
/**
 * Speedup Store Theme Customizer
 *
 * @package speedup-store
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function speedup_store_customize_register($wp_customize) {

	//add home page setting pannel
	$wp_customize->add_panel('speedup_store_panel_id', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Settings', 'speedup-store'),
		'description'    => __('Description of what this panel does.', 'speedup-store'),
	));

	// font array
	$speedup_store_font_array = array(
        '' =>'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' =>'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' =>'Architects Daughter',
        'Arimo' => 'Arimo', 
        'Arsenal' =>'Arsenal',
        'Arvo' =>'Arvo',
        'Alegreya' =>'Alegreya',
        'Alfa Slab One' =>'Alfa Slab One',
        'Averia Serif Libre' =>'Averia Serif Libre', 
        'Bangers' =>'Bangers', 
        'Boogaloo' =>'Boogaloo', 
        'Bad Script' =>'Bad Script',
        'Bitter' =>'Bitter', 
        'Bree Serif' =>'Bree Serif', 
        'BenchNine' =>'BenchNine',
        'Cabin' =>'Cabin',
        'Cardo' =>'Cardo', 
        'Courgette' =>'Courgette', 
        'Cherry Swash' =>'Cherry Swash',
        'Cormorant Garamond' =>'Cormorant Garamond', 
        'Crimson Text' =>'Crimson Text',
        'Cuprum' =>'Cuprum', 
        'Cookie' =>'Cookie',
        'Chewy' =>'Chewy',
        'Days One' =>'Days One',
        'Dosis' =>'Dosis',
        'Droid Sans' =>'Droid Sans', 
        'Economica' =>'Economica', 
        'Fredoka One' =>'Fredoka One',
        'Fjalla One' =>'Fjalla One',
        'Francois One' =>'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' =>'Gloria Hallelujah',
        'Great Vibes' =>'Great Vibes', 
        'Handlee' =>'Handlee', 
        'Hammersmith One' =>'Hammersmith One',
        'Inconsolata' =>'Inconsolata',
        'Indie Flower' =>'Indie Flower', 
        'IM Fell English SC' =>'IM Fell English SC',
        'Julius Sans One' =>'Julius Sans One',
        'Josefin Slab' =>'Josefin Slab',
        'Josefin Sans' =>'Josefin Sans',
        'Kanit' =>'Kanit',
        'Lobster' =>'Lobster',
        'Lato' => 'Lato',
        'Lora' =>'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather',
        'Monda' =>'Monda',
        'Montserrat' =>'Montserrat',
        'Muli' =>'Muli',
        'Marck Script' =>'Marck Script',
        'Noto Serif' =>'Noto Serif',
        'Open Sans' =>'Open Sans',
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>'Overpass Mono',
        'Oxygen' =>'Oxygen',
        'Orbitron' =>'Orbitron',
        'Patua One' =>'Patua One',
        'Pacifico' =>'Pacifico',
        'Padauk' =>'Padauk',
        'Playball' =>'Playball',
        'Playfair Display' =>'Playfair Display',
        'PT Sans' =>'PT Sans',
        'Philosopher' =>'Philosopher',
        'Permanent Marker' =>'Permanent Marker',
        'Poiret One' =>'Poiret One',
        'Quicksand' =>'Quicksand',
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' =>'Raleway',
        'Rubik' =>'Rubik',
        'Rokkitt' =>'Rokkitt',
        'Russo One' => 'Russo One', 
        'Righteous' =>'Righteous', 
        'Slabo' =>'Slabo', 
        'Source Sans Pro' =>'Source Sans Pro',
        'Shadows Into Light Two' =>'Shadows Into Light Two',
        'Shadows Into Light' =>  'Shadows Into Light',
        'Sacramento' =>'Sacramento',
        'Shrikhand' =>'Shrikhand',
        'Tangerine' => 'Tangerine',
        'Ubuntu' =>'Ubuntu',
        'VT323' =>'VT323',
        'Varela Round' =>'Varela Round',
        'Vampiro One' =>'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' =>'Volkhov',
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );

	//Typography
	$wp_customize->add_section( 'speedup_store_typography', array(
    	'title'      => __( 'Typography', 'speedup-store' ),
		'priority'   => 30,
		'panel' => 'speedup_store_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'speedup_store_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'speedup_store_paragraph_color', array(
		'label' => __('Paragraph Color', 'speedup-store'),
		'section' => 'speedup_store_typography',
		'settings' => 'speedup_store_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('speedup_store_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'speedup_store_paragraph_font_family', array(
	    'section'  => 'speedup_store_typography',
	    'label'    => __( 'Paragraph Fonts','speedup-store'),
	    'type'     => 'select',
	    'choices'  => $speedup_store_font_array,
	));

	$wp_customize->add_setting('speedup_store_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','speedup-store'),
		'section'	=> 'speedup_store_typography',
		'setting'	=> 'speedup_store_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'speedup_store_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'speedup_store_atag_color', array(
		'label' => __('"a" Tag Color', 'speedup-store'),
		'section' => 'speedup_store_typography',
		'settings' => 'speedup_store_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('speedup_store_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'speedup_store_atag_font_family', array(
	    'section'  => 'speedup_store_typography',
	    'label'    => __( '"a" Tag Fonts','speedup-store'),
	    'type'     => 'select',
	    'choices'  => $speedup_store_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'speedup_store_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'speedup_store_li_color', array(
		'label' => __('"li" Tag Color', 'speedup-store'),
		'section' => 'speedup_store_typography',
		'settings' => 'speedup_store_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('speedup_store_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'speedup_store_li_font_family', array(
	    'section'  => 'speedup_store_typography',
	    'label'    => __( '"li" Tag Fonts','speedup-store'),
	    'type'     => 'select',
	    'choices'  => $speedup_store_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'speedup_store_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'speedup_store_h1_color', array(
		'label' => __('H1 Color', 'speedup-store'),
		'section' => 'speedup_store_typography',
		'settings' => 'speedup_store_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('speedup_store_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'speedup_store_h1_font_family', array(
	    'section'  => 'speedup_store_typography',
	    'label'    => __( 'H1 Fonts','speedup-store'),
	    'type'     => 'select',
	    'choices'  => $speedup_store_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('speedup_store_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_h1_font_size',array(
		'label'	=> __('H1 Font Size','speedup-store'),
		'section'	=> 'speedup_store_typography',
		'setting'	=> 'speedup_store_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'speedup_store_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'speedup_store_h2_color', array(
		'label' => __('H2 Color', 'speedup-store'),
		'section' => 'speedup_store_typography',
		'settings' => 'speedup_store_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('speedup_store_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'speedup_store_h2_font_family', array(
	    'section'  => 'speedup_store_typography',
	    'label'    => __( 'H2 Fonts','speedup-store'),
	    'type'     => 'select',
	    'choices'  => $speedup_store_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('speedup_store_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_h2_font_size',array(
		'label'	=> __('H2 Font Size','speedup-store'),
		'section'	=> 'speedup_store_typography',
		'setting'	=> 'speedup_store_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'speedup_store_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'speedup_store_h3_color', array(
		'label' => __('H3 Color', 'speedup-store'),
		'section' => 'speedup_store_typography',
		'settings' => 'speedup_store_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('speedup_store_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'speedup_store_h3_font_family', array(
	    'section'  => 'speedup_store_typography',
	    'label'    => __( 'H3 Fonts','speedup-store'),
	    'type'     => 'select',
	    'choices'  => $speedup_store_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('speedup_store_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_h3_font_size',array(
		'label'	=> __('H3 Font Size','speedup-store'),
		'section'	=> 'speedup_store_typography',
		'setting'	=> 'speedup_store_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'speedup_store_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'speedup_store_h4_color', array(
		'label' => __('H4 Color', 'speedup-store'),
		'section' => 'speedup_store_typography',
		'settings' => 'speedup_store_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('speedup_store_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'speedup_store_h4_font_family', array(
	    'section'  => 'speedup_store_typography',
	    'label'    => __( 'H4 Fonts','speedup-store'),
	    'type'     => 'select',
	    'choices'  => $speedup_store_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('speedup_store_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_h4_font_size',array(
		'label'	=> __('H4 Font Size','speedup-store'),
		'section'	=> 'speedup_store_typography',
		'setting'	=> 'speedup_store_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'speedup_store_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'speedup_store_h5_color', array(
		'label' => __('H5 Color', 'speedup-store'),
		'section' => 'speedup_store_typography',
		'settings' => 'speedup_store_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('speedup_store_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'speedup_store_h5_font_family', array(
	    'section'  => 'speedup_store_typography',
	    'label'    => __( 'H5 Fonts','speedup-store'),
	    'type'     => 'select',
	    'choices'  => $speedup_store_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('speedup_store_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_h5_font_size',array(
		'label'	=> __('H5 Font Size','speedup-store'),
		'section'	=> 'speedup_store_typography',
		'setting'	=> 'speedup_store_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'speedup_store_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'speedup_store_h6_color', array(
		'label' => __('H6 Color', 'speedup-store'),
		'section' => 'speedup_store_typography',
		'settings' => 'speedup_store_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('speedup_store_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'speedup_store_h6_font_family', array(
	    'section'  => 'speedup_store_typography',
	    'label'    => __( 'H6 Fonts','speedup-store'),
	    'type'     => 'select',
	    'choices'  => $speedup_store_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('speedup_store_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_h6_font_size',array(
		'label'	=> __('H6 Font Size','speedup-store'),
		'section'	=> 'speedup_store_typography',
		'setting'	=> 'speedup_store_h6_font_size',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('speedup_store_background_skin_mode',array(
        'default' => 'Transparent Background',
        'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control('speedup_store_background_skin_mode',array(
        'type' => 'select',
        'label' => __('Background Type','speedup-store'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','speedup-store'),
            'Transparent Background' => __('Transparent Background','speedup-store'),
        ),
	) );

  	// woocommerce section
	$wp_customize->add_setting('speedup_store_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','speedup-store'),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_setting('speedup_store_show_wooproducts_border',array(
       'default' => false,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','speedup-store'),
       'section' => 'woocommerce_product_catalog',
    ));

    $wp_customize->add_setting( 'speedup_store_wooproducts_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'speedup_store_sanitize_choices',
	) );
	$wp_customize->add_control( 'speedup_store_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'speedup-store' ),
		'section'  => 'woocommerce_product_catalog',
		'type'     => 'select',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	)  );

	$wp_customize->add_setting('speedup_store_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	));	
	$wp_customize->add_control('speedup_store_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','speedup-store'),
		'section'	=> 'woocommerce_product_catalog',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'speedup_store_top_bottom_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	));
	$wp_customize->add_control( 'speedup_store_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','speedup-store' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'speedup_store_left_right_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	));
	$wp_customize->add_control( 'speedup_store_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','speedup-store' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'speedup_store_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'speedup_store_sanitize_number_range',
	));
	$wp_customize->add_control('speedup_store_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','speedup-store' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting( 'speedup_store_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'speedup_store_sanitize_number_range',
	));
	$wp_customize->add_control('speedup_store_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','speedup-store' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_section('speedup_store_product_button_section', array(
		'title'    => __('Product Button Settings', 'speedup-store'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting( 'speedup_store_top_bottom_product_button_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	));
	$wp_customize->add_control('speedup_store_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','speedup-store' ),
		'section' => 'speedup_store_product_button_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'speedup_store_left_right_product_button_padding',array(
		'default' => 16,
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	));
	$wp_customize->add_control('speedup_store_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','speedup-store' ),
		'section' => 'speedup_store_product_button_section',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'speedup_store_product_button_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'speedup_store_sanitize_number_range',
	));
	$wp_customize->add_control('speedup_store_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','speedup-store' ),
		'section' => 'speedup_store_product_button_section',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
	),));

	$wp_customize->add_section('speedup_store_product_sale_section', array(
		'title'    => __('Product Sale Button Settings', 'speedup-store'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('speedup_store_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control('speedup_store_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','speedup-store'),
        'section' => 'speedup_store_product_sale_section',
        'choices' => array(
            'Right' => __('Right','speedup-store'),
            'Left' => __('Left','speedup-store'),
        ),
	) );

	$wp_customize->add_setting( 'speedup_store_border_radius_product_sale',array(
		'default' => 0,
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	));
	$wp_customize->add_control('speedup_store_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','speedup-store'),
        'section'  => 'speedup_store_product_sale_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('speedup_store_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'speedup_store_sanitize_float'
	));
	$wp_customize->add_control('speedup_store_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','speedup-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'speedup_store_product_sale_section',
		'type'=> 'number'
	));

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'speedup_store_theme_color_option', array( 
		'panel' => 'speedup_store_panel_id', 
		'title' => esc_html__( 'Theme Color Option', 'speedup-store' ) 
	) );

  	$wp_customize->add_setting( 'speedup_store_theme_color', array(
	    'default' => '#000000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'speedup_store_theme_color', array(
  		'label' => 'Color Option',
	    'description' => __('One can change complete theme color on just one click.', 'speedup-store'),
	    'section' => 'speedup_store_theme_color_option',
	    'settings' => 'speedup_store_theme_color',
  	)));

	//Layouts
	$wp_customize->add_section('speedup_store_left_right', array(
		'title'    => __('Layout Settings', 'speedup-store'),
		'panel'    => 'speedup_store_panel_id',
	));

	$wp_customize->add_setting('speedup_store_preloader_option',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','speedup-store'),
       'section' => 'speedup_store_left_right'
    ));

    $wp_customize->add_setting( 'speedup_store_loader_background_color_settings', array(
	    'default' => '#222',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'speedup_store_loader_background_color_settings', array(
  		'label' => __('Preloader Background Color', 'speedup-store'),
	    'section' => 'speedup_store_left_right',
	    'settings' => 'speedup_store_loader_background_color_settings',
  	)));

	$wp_customize->add_setting( 'speedup_store_sticky_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('speedup_store_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','speedup-store' ),
        'section' => 'speedup_store_left_right'
    ));

    $wp_customize->add_setting( 'speedup_store_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('speedup_store_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Woocommerce Page Sidebar','speedup-store'),
		'section' => 'speedup_store_left_right'
    ));

	$wp_customize->add_setting( 'speedup_store_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('speedup_store_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','speedup-store'),
		'section' => 'speedup_store_left_right'
    ));

	$wp_customize->add_setting('speedup_store_layout_options', array(
		'default'           => 'Right Sidebar', 
		'sanitize_callback' => 'speedup_store_sanitize_choices',
	));
	$wp_customize->add_control('speedup_store_layout_options',array(
		'type'           => 'radio',
		'label' => __('Change Layouts', 'speedup-store'),
		'section'       => 'speedup_store_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'speedup-store'),
			'Right Sidebar' => __('Right Sidebar', 'speedup-store'),
			'One Column'    => __('One Column', 'speedup-store'),
			'Three Columns' => __('Three Columns', 'speedup-store'),
			'Four Columns'  => __('Four Columns', 'speedup-store'),
			'Grid Layout'   => __('Grid Layout', 'speedup-store')
		),
	));

	$wp_customize->add_setting('speedup_store_single_page_sidebar_layout', array(
		'default'           => 'One Column', 
		'sanitize_callback' => 'speedup_store_sanitize_choices',
	));
	$wp_customize->add_control('speedup_store_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'speedup-store'),
		'section'        => 'speedup_store_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'speedup-store'),
			'Right Sidebar' => __('Right Sidebar', 'speedup-store'),
			'One Column'    => __('One Column', 'speedup-store'),
		),
	));

	$wp_customize->add_setting('speedup_store_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar', 
		'sanitize_callback' => 'speedup_store_sanitize_choices',
	));
	$wp_customize->add_control('speedup_store_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'speedup-store'),
		'section'        => 'speedup_store_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'speedup-store'),
			'Right Sidebar' => __('Right Sidebar', 'speedup-store'),
			'One Column'    => __('One Column', 'speedup-store'),
		),
	));

	$wp_customize->add_setting('speedup_store_theme_options',array(
        'default' => 'Default',
	    'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control('speedup_store_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','speedup-store'),
        'description' => __('Here you can change the Width layout. ','speedup-store'),
        'section' => 'speedup_store_left_right',
        'choices' => array(
            'Default' => __('Default','speedup-store'),
            'Container' => __('Container','speedup-store'),
            'Box Container' => __('Box Container','speedup-store'),
        ),
	) );

	// Button
	$wp_customize->add_section( 'speedup_store_theme_button', array(
		'title' => __('Button Option','speedup-store'),
		'panel' => 'speedup_store_panel_id',
	));

	$wp_customize->add_setting('speedup_store_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	));
	$wp_customize->add_control('speedup_store_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','speedup-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'speedup_store_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('speedup_store_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	));
	$wp_customize->add_control('speedup_store_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','speedup-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'speedup_store_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'speedup_store_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	) );
	$wp_customize->add_control( 'speedup_store_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','speedup-store' ),
		'section'     => 'speedup_store_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Slider
	$wp_customize->add_section( 'speedup_store_slider' , array(
    	'title'      => __( 'Slider Settings', 'speedup-store' ),
		'priority'   => null,
		'panel' => 'speedup_store_panel_id'
	) );

	$wp_customize->add_setting('speedup_store_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','speedup-store'),
       'section' => 'speedup_store_slider',
    ));

    $wp_customize->add_setting('speedup_store_slider_title_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_slider_title_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','speedup-store'),
       'section' => 'speedup_store_slider'
    ));

    $wp_customize->add_setting('speedup_store_slider_content_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_slider_content_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','speedup-store'),
       'section' => 'speedup_store_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'speedup_store_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'speedup_store_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'speedup_store_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'speedup-store' ),
			'section'  => 'speedup_store_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('speedup_store_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','speedup-store'),
		'description'    => __('This option will add colors over the slider.','speedup-store'),
       'section' => 'speedup_store_slider'
    ));

    $wp_customize->add_setting('speedup_store_slider_image_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'speedup_store_slider_image_overlay_color', array(
		'label'    => __('Home Page Slider Overlay Color', 'speedup-store'),
		'section'  => 'speedup_store_slider',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','speedup-store'),
		'settings' => 'speedup_store_slider_image_overlay_color',
	)));

	//content layout
    $wp_customize->add_setting('speedup_store_slider_content_alignment',array(
    'default' => 'Left',
        'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control('speedup_store_slider_content_alignment',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','speedup-store'),
        'section' => 'speedup_store_slider',
        'choices' => array(
            'Center' => __('Center','speedup-store'),
            'Left' => __('Left','speedup-store'),
            'Right' => __('Right','speedup-store'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'speedup_store_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	) );
	$wp_customize->add_control( 'speedup_store_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','speedup-store' ),
		'section'     => 'speedup_store_slider',
		'type'        => 'number',
		'settings'    => 'speedup_store_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('speedup_store_slider_image_opacity',array(
      'default'              => 0.7,
      'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control( 'speedup_store_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','speedup-store' ),
	'section'     => 'speedup_store_slider',
	'type'        => 'select',
	'settings'    => 'speedup_store_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','speedup-store'),
		'0.1' =>  esc_attr('0.1','speedup-store'),
		'0.2' =>  esc_attr('0.2','speedup-store'),
		'0.3' =>  esc_attr('0.3','speedup-store'),
		'0.4' =>  esc_attr('0.4','speedup-store'),
		'0.5' =>  esc_attr('0.5','speedup-store'),
		'0.6' =>  esc_attr('0.6','speedup-store'),
		'0.7' =>  esc_attr('0.7','speedup-store'),
		'0.8' =>  esc_attr('0.8','speedup-store'),
		'0.9' =>  esc_attr('0.9','speedup-store')
	),
	));

	$wp_customize->add_setting( 'speedup_store_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'    => 'speedup_store_sanitize_number_range',
	));
	$wp_customize->add_control( 'speedup_store_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','speedup-store' ),
		'section' => 'speedup_store_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('speedup_store_slider_image_height',array(
		'default'=> __('550','speedup-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_slider_image_height',array(
		'label'	=> __('Slider Image Height','speedup-store'),
		'section'=> 'speedup_store_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('speedup_store_slider_button',array(
		'default'=> __('READ MORE','speedup-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_slider_button',array(
		'label'	=> __('Slider Button','speedup-store'),
		'section'=> 'speedup_store_slider',
		'type'=> 'text'
	));

	//Products Service
	$wp_customize->add_section( 'speedup_store_services_section' , array(
    	'title'      => __( 'Product Services', 'speedup-store' ),
		'priority'   => null,
		'panel' => 'speedup_store_panel_id'
	) );

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
	if($i==0){
	$default = $category->slug;
	$i++;
	}
	$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('speedup_store_product_service',array(
		'default'	=> 'select',
		'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control('speedup_store_product_service',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Services','speedup-store'),
		'section' => 'speedup_store_services_section',
	));

	//New Arrivals
	$wp_customize->add_section( 'speedup_store_products' , array(
    	'title'      => __( 'New Arrivals', 'speedup-store' ),
		'priority'   => null,
		'panel' => 'speedup_store_panel_id'
	) );

	$wp_customize->add_setting('speedup_store_section_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('speedup_store_section_title', array(
		'label'   => __('Section Title', 'speedup-store'),
		'section' => 'speedup_store_products',
		'type'    => 'text',
	));

	$wp_customize->add_setting( 'speedup_store_product_page', array(
		'default'           => '',
		'sanitize_callback' => 'speedup_store_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'speedup_store_product_page', array(
		'label'    => __( 'Select Page', 'speedup-store' ),
		'section'  => 'speedup_store_products',
		'type'     => 'dropdown-pages'
	));

	//404 Page Setting
	$wp_customize->add_section('speedup_store_404_page_setting',array(
		'title'	=> __('404 Page','speedup-store'),
		'panel' => 'speedup_store_panel_id',
	));	

	$wp_customize->add_setting('speedup_store_title_404_page',array(
		'default'=> __('404 Not Found', 'speedup-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_title_404_page',array(
		'label'	=> __('404 Page Title','speedup-store'),
		'section'=> 'speedup_store_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('speedup_store_content_404_page',array(
		'default'=> __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.', 'speedup-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_content_404_page',array(
		'label'	=> __('404 Page Content','speedup-store'),
		'section'=> 'speedup_store_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('speedup_store_button_404_page',array(
		'default'=> __('Back to Home Page','speedup-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_button_404_page',array(
		'label'	=> __('404 Page Button','speedup-store'),
		'section'=> 'speedup_store_404_page_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('speedup_store_responsive_setting',array(
		'title'	=> __('Responsive Settings','speedup-store'),
		'panel' => 'speedup_store_panel_id',
	));

    $wp_customize->add_setting('speedup_store_responsive_sticky_header',array(
       'default' => false,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_responsive_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Sticky Header','speedup-store'),
       'section' => 'speedup_store_responsive_setting'
    ));

    $wp_customize->add_setting('speedup_store_responsive_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_responsive_slider',array(
       'type' => 'checkbox',
       'label' => __('Slider','speedup-store'),
       'section' => 'speedup_store_responsive_setting'
    ));

    $wp_customize->add_setting('speedup_store_responsive_scroll',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_responsive_scroll',array(
       'type' => 'checkbox',
       'label' => __('Scroll To Top','speedup-store'),
       'section' => 'speedup_store_responsive_setting'
    ));

    $wp_customize->add_setting('speedup_store_responsive_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_responsive_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Sidebar','speedup-store'),
       'section' => 'speedup_store_responsive_setting'
    ));

    $wp_customize->add_setting('speedup_store_responsive_preloader',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_responsive_preloader',array(
       'type' => 'checkbox',
       'label' => __('Preloader','speedup-store'),
       'section' => 'speedup_store_responsive_setting'
    ));

	//Blog Post
	$wp_customize->add_section('speedup_store_blog_post',array(
		'title'	=> __('Blog Page Settings','speedup-store'),
		'panel' => 'speedup_store_panel_id',
	));	

	$wp_customize->add_setting('speedup_store_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','speedup-store'),
       'section' => 'speedup_store_blog_post'
    ));

    $wp_customize->add_setting('speedup_store_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','speedup-store'),
       'section' => 'speedup_store_blog_post'
    ));

    $wp_customize->add_setting('speedup_store_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','speedup-store'),
       'section' => 'speedup_store_blog_post'
    ));

    $wp_customize->add_setting('speedup_store_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','speedup-store'),
       'section' => 'speedup_store_blog_post'
    ));

    $wp_customize->add_setting('speedup_store_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','speedup-store'),
       'section' => 'speedup_store_blog_post'
    ));

    $wp_customize->add_setting('speedup_store_blog_post_description_option',array(
    	'default'   => 'Excerpt Content',
        'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control('speedup_store_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','speedup-store'),
        'section' => 'speedup_store_blog_post',
        'choices' => array(
            'No Content' => __('No Content','speedup-store'),
            'Excerpt Content' => __('Excerpt Content','speedup-store'),
            'Full Content' => __('Full Content','speedup-store'),
        ),
	) );

    $wp_customize->add_setting( 'speedup_store_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	) );
	$wp_customize->add_control( 'speedup_store_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','speedup-store' ),
		'section'     => 'speedup_store_blog_post',
		'type'        => 'number',
		'settings'    => 'speedup_store_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'speedup_store_post_suffix_option', array(
		'default'   => __('...','speedup-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'speedup_store_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','speedup-store' ),
		'section'     => 'speedup_store_blog_post',
		'type'        => 'text',
		'settings'    => 'speedup_store_post_suffix_option',
	) );

	$wp_customize->add_setting('speedup_store_button_text',array(
		'default'=> __('Read More','speedup-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_button_text',array(
		'label'	=> __('Add Button Text','speedup-store'),
		'section'=> 'speedup_store_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'speedup_store_metabox_separator_blog_post', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'speedup_store_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','speedup-store' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'speedup-store' ),
        ),
		'section'     => 'speedup_store_blog_post',
		'type'        => 'text',
		'settings'    => 'speedup_store_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('speedup_store_display_blog_page_post',array(
        'default' => 'In Box',
        'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control('speedup_store_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','speedup-store'),
        'section' => 'speedup_store_blog_post',
        'choices' => array(
            'In Box' => __('In Box','speedup-store'),
            'Without Box' => __('Without Box','speedup-store'),
        ),
	) );

	$wp_customize->add_setting('speedup_store_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','speedup-store'),
       'section' => 'speedup_store_blog_post'
    ));

    $wp_customize->add_setting( 'speedup_store_show_related_post',array(
		'default' => true,
      	'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ) );
    $wp_customize->add_control('speedup_store_show_related_post',array(
    	'type' => 'checkbox',
        'label' => __( 'Related Post','speedup-store' ),
        'section' => 'speedup_store_blog_post'
    ));

    $wp_customize->add_setting('speedup_store_related_posts_taxanomies_options',array(
        'default' => 'categories',
        'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control('speedup_store_related_posts_taxanomies_options',array(
        'type' => 'radio',
        'label' => __('Related Post Taxonomies','speedup-store'),
        'section' => 'speedup_store_blog_post',
        'choices' => array(
            'categories' => __('Categories','speedup-store'),
            'tags' => __('Tags','speedup-store'),
        ),
	) );

	$wp_customize->add_setting('speedup_store_related_post_title',array(
		'default'=> __('Related Posts','speedup-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_related_post_title',array(
		'label'	=> __('Related Post Title','speedup-store'),
		'section'=> 'speedup_store_blog_post',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('speedup_store_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	));
	$wp_customize->add_control('speedup_store_related_posts_number',array(
		'label'	=> __('Related Post Number','speedup-store'),
		'section'=> 'speedup_store_blog_post',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//no Result Found
	$wp_customize->add_section('speedup_store_noresult_found',array(
		'title'	=> __('No Result Found','speedup-store'),
		'panel' => 'speedup_store_panel_id',
	));	

	$wp_customize->add_setting('speedup_store_nosearch_found_title',array(
		'default'=> __('Nothing Found','speedup-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','speedup-store'),
		'section'=> 'speedup_store_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('speedup_store_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','speedup-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('speedup_store_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','speedup-store'),
		'section'=> 'speedup_store_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('speedup_store_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
    ));
    $wp_customize->add_control('speedup_store_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','speedup-store'),
       'section' => 'speedup_store_noresult_found'
    ));

	//footer
	$wp_customize->add_section('speedup_store_footer_section', array(
		'title'       => __('Footer Text', 'speedup-store'),
		'priority'    => null,
		'panel'       => 'speedup_store_panel_id',
	));

	$wp_customize->add_setting('speedup_store_footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'speedup_store_sanitize_choices',
    ));
    $wp_customize->add_control('speedup_store_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'speedup-store'),
        'section'     => 'speedup_store_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'speedup-store'),
        'choices' => array(
            '1'     => __('One', 'speedup-store'),
            '2'     => __('Two', 'speedup-store'),
            '3'     => __('Three', 'speedup-store'),
            '4'     => __('Four', 'speedup-store')
        ),
    ));

    $wp_customize->add_setting('speedup_store_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'speedup_store_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'speedup-store'),
		'section'  => 'speedup_store_footer_section',
	)));

	$wp_customize->add_setting('speedup_store_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'speedup_store_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','speedup-store'),
        'section' => 'speedup_store_footer_section'
	)));

	$wp_customize->add_setting('speedup_store_footer_copy', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('speedup_store_footer_copy', array(
		'label'   => __('Copyright Text', 'speedup-store'),
		'section' => 'speedup_store_footer_section',
		'type'    => 'text',
	));

	$wp_customize->add_setting('speedup_store_copyright_content_align',array(
        'default' => 'center',
        'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control('speedup_store_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','speedup-store'),
        'section' => 'speedup_store_footer_section',
        'choices' => array(
            'left' => __('Left','speedup-store'),
            'right' => __('Right','speedup-store'),
            'center' => __('Center','speedup-store'),
        ),
	) );

	$wp_customize->add_setting('speedup_store_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	));
	$wp_customize->add_control('speedup_store_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','speedup-store' ),
		'section'=> 'speedup_store_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('speedup_store_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	));
	$wp_customize->add_control('speedup_store_copyright_padding',array(
		'label'	=> __('Copyright Padding','speedup-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'speedup_store_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('speedup_store_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'speedup_store_sanitize_checkbox'
	));
	$wp_customize->add_control('speedup_store_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','speedup-store'),
      	'section' => 'speedup_store_footer_section',
	));

	$wp_customize->add_setting('speedup_store_scroll_setting',array(
        'default' => 'Right',
        'sanitize_callback' => 'speedup_store_sanitize_choices'
	));
	$wp_customize->add_control('speedup_store_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','speedup-store'),
        'section' => 'speedup_store_footer_section',
        'choices' => array(
            'Left' => __('Left','speedup-store'),
            'Right' => __('Right','speedup-store'),
            'Center' => __('Center','speedup-store'),
        ),
	) );

	$wp_customize->add_setting('speedup_store_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'	=> 'speedup_store_sanitize_float',
	));
	$wp_customize->add_control('speedup_store_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','speedup-store'),
		'section'=> 'speedup_store_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	) );
	
}
add_action('customize_register', 'speedup_store_customize_register');

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Speedup_Store_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if (is_null($instance)) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action('customize_register', array($this, 'sections'));

		// Register scripts and styles for the controls.
		add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_control_scripts'), 0);
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections($manager) {

		// Load custom sections.
		load_template(trailingslashit(get_template_directory()).'/inc/section-pro.php');

		// Register custom section types.
		$manager->register_section_type('Speedup_Store_Customize_Section_Pro');

		// Register sections.
		$manager->add_section(
			new Speedup_Store_Customize_Section_Pro(
				$manager,
				'speedup_store_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__('Speedup Pro', 'speedup-store'),
					'pro_text' => esc_html__('Go Pro', 'speedup-store'),
					'pro_url'  => esc_url(' https://netnus.com/product/speedup-pro/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script('speedup-store-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/js/customize-controls.js', array('customize-controls'));

		wp_enqueue_style('speedup-store-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');
	}
}

// Doing this customizer thang!
Speedup_Store_Customize::get_instance();