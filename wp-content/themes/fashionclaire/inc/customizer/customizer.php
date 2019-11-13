<?php 
/**
 * customizer
 * 
 * @package fashionclaire
 * @since fashionclaire 1.1.4
 */

// customizer core option
require get_template_directory() . '/inc/customizer/customizer-core.php';

// customizer
require get_template_directory() . '/inc/customizer/default.php';

/**
* @param WP_Customize_Manager
*/
function fashionclaire_customize_register_options ( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
   $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
   
   if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'fashionclaire_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'fashionclaire_customize_partial_blogdescription',
		) );
	}

   //sanitization functions
   require get_template_directory() . '/inc/customizer/sanitization-functions.php';

   //theme options
   require get_template_directory() . '/inc/customizer/theme-options.php';
  
   //color options
   require get_template_directory() . '/inc/customizer/color-options.php';

}
add_action ( 'customize_register', 'fashionclaire_customize_register_options');

/**
 * Render the site title for the selective refresh partial
 */
 function fashionclaire_customize_partial_blogname(){
    bloginfo('name');
 }

 /**
  * Render the site description for the selective refresh partial
  */
 function fashionclaire_customize_partial_blogdescription(){
  bloginfo('description');
}

/** 
 * Binds JS for Theme Customizer 
 */
function fashionclaire_customize_live_preview(){
   wp_enqueue_script('fashionclaire-customize-preview', get_template_directory_uri() . '/js/customizer-preview.js', array('jquery', 'customize-preview' ), '', true);
}
add_action('customize_preview_init', 'fashionclaire_customize_live_preview'); 