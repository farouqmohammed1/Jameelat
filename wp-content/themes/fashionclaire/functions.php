<?php
/**
 * Functions for fashionclaire theme
 * @package fashionclaire
 * @since fashionclaire 1.2.1
 * 
 */

if ( !function_exists ('fashionclaire_setup') ) : 
    function fashionclaire_setup(){
        if ( ! defined('FASHIONCLAIRE')){
            define ('FASHIONCLAIRE', 'fashionclaire');
        }

        load_theme_textdomain('fashionclaire', get_template_directory() . '/languages');


        add_theme_support('title-tag');
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_theme_support(
            'html5', 
            array(
                'comment-form',
                'search-form',
                'comments-list',
                'gallery',
                'caption',
            ) 
        );
    
        add_theme_support ( 'custom-logo', array (
            'height'        =>  90,
            'width'         =>  220,
            'flex-height'   =>  false,
            'flex-width'    =>  false,
        ));
    
        add_theme_support( 'custom-background', apply_filters( 'fashionclaire_custom_background_args', array(
            'default-color' =>  'ffffff',
            'default-image' =>  '',
        )));

        add_theme_support( 'title-tag' );
    
        add_theme_support(
            'post-formats',
                array(
                    'audio',
                    'video',
                    'gallery',
                    'quote',
                    'link',
                    'aside',
                    'image',
                )
        );

        //Add sypport Block Styles
        add_theme_support ('wp-block-styles');

        //Add support editor styles
        add_theme_support('editor-styles');

        add_editor_style('css/editor-style.css');

        add_theme_support (
            'editor-color-palette', array(
            array(
                'name'  =>  esc_html__('White', 'fashionclaire' ),
                'slug'  =>  'white',
                'color' =>  '#ffffff', 
            ),

            array(
                'name'  =>  esc_html__('Light Grey', 'fashionclaire' ),
                'slug'  =>  'grey-200',
                'color' =>  '#e6e6e6', 
            ),

            array(
                'name'  =>  esc_html__('Medium Grey', 'fashionclaire' ),
                'slug'  =>  'grey-500',
                'color' =>  '#919191', 
            ),

            array(
                'name'  =>  esc_html__('Primary', 'fashionclaire' ),
                'slug'  =>  'primary',
                'color' =>  apply_filters('fashionclaire_primary_color', '#333333'), 
            ),

            array(
                'name'  =>  esc_html__('Gold', 'fashionclaire' ),
                'slug'  =>  'gold',
                'color' =>  '#8e710b', 
            ),

        ));
    
        // Enable support for Post Thubnails on Posts and Pages
        add_image_size('fashionclaire-xsmall', 300, 230, true);
        add_image_size('fashionclaire-large', 9999, 520, false);
        add_image_size('fashionclaire-full', 1200, 560, true);
            
        // Navigation Menu.
        register_nav_menus (array(
            'primary' => esc_html__( 'Primary Menu', 'fashionclaire')
        ));
    }
    endif; //End of fashionclaire_setup
    add_action ('after_setup_theme', 'fashionclaire_setup');

/**
 * Load special font CSS file.
 *
 * @since fashionclaire 1.2.1
 */
function fashionclaire_custom_header_fonts() {
	$font_url = fashionclaire_get_font_url();
	if ( ! empty( $font_url ) )
		wp_enqueue_style( 'fashionclaire-fonts', esc_url_raw( $font_url ), array(), null );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'fashionclaire_custom_header_fonts' );


function fashionclaire_get_font_url() {
	$font_url = '';
	$font = str_replace( ' ', '+', fashionclaire_get_option( 'body_font' ) );
    $heading_font = str_replace( ' ', '+', fashionclaire_get_option( 'heading_font' ) );
    $branding_font = str_replace( ' ', '+', fashionclaire_get_option( 'branding_font' ) );
    
	if ( 'PT Serif' == $font && 'PT Serif' == $heading_font) 
		return $font_url;
		
	if ( 'PT Serif' != $font && 'PT Serif' != $heading_font )
        $font .= '%7C' . $heading_font;
        
    if ( 'PT Serif' == $heading_font && 'PT Serif' == $branding_font) 
		return $font_url;
		
	if ( 'PT Serif' != $heading_font && 'PT Serif' != $branding_font )
		$font .= '%7C' . $branding_font;

	/* translators: If there are characters in your language that are not supported
	 * by PT Serif fonts, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'PT Serif font: on or off', 'fashionclaire' ) ) {
		$subsets = 'latin,latin-ext';
		$family = $font . ':400,700';

		/* translators: To add an additional PT Serif character subset specific to your language,	
		 * translate this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language.
		 */
		$subset = _x( 'no-subset', 'Font: add new subset (greek, cyrillic, vietnamese)', 'fashionclaire' );

		if ( 'cyrillic' == $subset ) {
			$subsets .= ',cyrillic,cyrillic-ext';
		}
		if ( 'greek' == $subset ) {
			$subsets .= ',greek,greek-ext';
		}
		elseif ( 'vietnamese' == $subset ) {
			$subsets .= ',vietnamese';
		}

		$query_args = array(
			'family' => $family,
			'subset' => $subsets,
		);
		$font_url = "//fonts.googleapis.com/css?family=" . $family . '&' . $subsets;
		
	}

	return $font_url;
}

    function fashionclaire_scripts() {
        global $wp_styles;

        $font_url = fashionclaire_get_font_url();
        if ( ! empty( $font_url ) )
            wp_enqueue_style( 'fashionclaire-fonts', esc_url_raw( $font_url ), array(), null );

        wp_enqueue_style( 'fashionclaire-style', get_stylesheet_uri() );

        wp_enqueue_style ('style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style ('font-awesome', get_template_directory_uri() . '/fonts/icomoon.css');
        wp_enqueue_style ('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
        
   
        wp_enqueue_script( 'jquery.magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), true );
        wp_enqueue_script( 'jquery.fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array('jquery'), true);
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.2.2', true );
        wp_enqueue_script( 'accessible-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20190715', true );

            
        if (is_singular() && comments_open() && get_option( 'thread_comments' ) ){
        wp_enqueue_script('comment-reply');
        }

        wp_localize_script( 'accessible-navigation', 'accessibleNavigationScreenReaderText', array(
		'expandMain'   => __( 'Open the main menu', 'fashionclaire' ),
		'collapseMain' => __( 'Close the main menu', 'fashionclaire' ),
		'expandChild'   => __( 'expand submenu', 'fashionclaire' ),
		'collapseChild' => __( 'collapse submenu', 'fashionclaire' ),
	) );
    }
    add_action('wp_enqueue_scripts', 'fashionclaire_scripts');


    // Include Template Functions.
    require get_template_directory() . '/inc/widgets.php';
    require get_template_directory() . '/inc/template-functions.php';
    require get_template_directory() . '/inc/template-tags.php';
    require get_template_directory() . '/inc/custom-functions.php';
    require get_template_directory() . '/inc/breadcrumbs.php';

    // Customizer
    require get_template_directory() . '/inc/customizer/customizer.php';
    require get_template_directory() . '/inc/customizer/custom-theme-styles.php';
    require get_template_directory() . '/inc/customizer/dynamic-css.php';
    require get_template_directory() . '/inc/customizer/gfonts.php';

    // Widgets
    function fashionclaire_register_widgets(){
        require get_template_directory() . '/inc/widgets/widget-popular-posts.php';
        require get_template_directory() . '/inc/widgets/widget-featured-posts.php';
        require get_template_directory() . '/inc/widgets/widget-social-networks.php';
    }
    add_action ('widgets_init', 'fashionclaire_register_widgets');

    add_action ('after_setup_theme', 'fashionclaire_content_width',0);
    function fashionclaire_content_width(){
        $GLOBALS['content_width'] = apply_filters('fashionclaire_content_width', 770);
    }