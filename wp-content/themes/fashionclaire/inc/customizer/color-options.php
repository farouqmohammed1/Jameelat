<?php
/**
 * Color Options Panel.
 * 
 * @package fashionclaire
 * @since fashionclaire 1.2.5
 */

    $default = fashionclaire_get_default_theme_options();

    $wp_customize->get_control( 'background_color'  )->section   = 'fashionclaire_content_colors';
    

    // Add Panel for Color Options*/
    $wp_customize->add_panel( 'fashionclaire_colors_panel', array(
        'priority'       =>  190,
        'title'          =>  esc_html__('Color Options', 'fashionclaire')
    ));

    //General Color Section
    $wp_customize->add_section('fashionclaire_branding_colors', array(
        'title'     => esc_html__( 'Branding section', 'fashionclaire' ),
        'panel'     => 'fashionclaire_colors_panel',
    ));

    //Site-Title Color
      $wp_customize->add_setting( 'title_color' , array(
        'default'           =>  $default['title_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_color', array(
        'label'         => esc_html__( 'Site title color', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the color of site title.', 'fashionclaire'),
        'section'       => 'fashionclaire_branding_colors',
        'type'          =>  'color',
    )));

     //Site-tagline Color
     $wp_customize->add_setting( 'tagline_color' , array(
        'default'           =>  $default['tagline_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
      
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tagline_color', array(
        'label'         => esc_html__( 'Site tagline color', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the color of site tagline.', 'fashionclaire'),
        'section'       => 'fashionclaire_branding_colors',
        'type'          =>  'color',
    )));

    //Top Header Color Section
    $wp_customize->add_section( 'fashionclaire_top_header_background', array(
        'title'     => esc_html__( 'Top header section', 'fashionclaire' ),
        'panel'     => 'fashionclaire_colors_panel',
    ));

    //Top Header Background Color
    $wp_customize->add_setting( 'top_header_background', array(
        'default'           =>  $default['top_header_background'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
        
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_header_background', array(
        'label'         =>  esc_html__( 'Top header', 'fashionclaire' ),
        'description'   =>  esc_html__( 'Change the background color of top header in social media section.', 'fashionclaire'),
        'section'       =>  'fashionclaire_top_header_background',  
        'type'          =>  'color',
    )));

    //Breadcrumb Color Section
       $wp_customize->add_section('fashionclaire_breadcrumb_colors', array(
        'title'     => esc_html__( 'Breadcrumb section', 'fashionclaire' ),
        'panel'     => 'fashionclaire_colors_panel',
    ));
    
      //Breadcrumb Background Color
      $wp_customize->add_setting( 'breadcrumb_background', array(
        'default'           =>  $default['breadcrumb_background'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
        
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumb_background', array(
        'label'         =>  esc_html__( 'Breadcrumb background color', 'fashionclaire' ),
        'description'   =>  esc_html__( 'Change the background color of breadcrumb.', 'fashionclaire'),
        'section'       =>  'fashionclaire_breadcrumb_colors',  
        'type'          =>  'color',
    )));

    //Content Color Section
    $wp_customize->add_section('fashionclaire_content_colors', array(
        'title'     => esc_html__( 'Content section', 'fashionclaire' ),
        'panel'     => 'fashionclaire_colors_panel',
    ));

    //Body Color
    $wp_customize->add_setting( 'body_color', array(
        'default'           =>  $default['body_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_color', array(
        'label'         => esc_html__( 'Body color', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the main color of body.', 'fashionclaire'),
        'section'       =>  'fashionclaire_content_colors',
        'type'          =>  'color',
    )));

     //Headings Color
     $wp_customize->add_setting( 'headings_color', array(
        'default'           =>  $default['headings_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'headings_color', array(
        'label'         => esc_html__( 'Headings color', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the color of H1,H2,H3,H4,H5,H6.', 'fashionclaire'),
        'section'       =>  'fashionclaire_content_colors',
        'type'          =>  'color',
    )));

    //Link Color
    $wp_customize->add_setting( 'secondary_color', array(
        'default'           => $default['secondary_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
        'label'         =>  esc_html__( 'Link color', 'fashionclaire' ),
        'description'   =>  esc_html__( 'Change the color of breadcrumb, titles, links,  categories, dropdown menu.', 'fashionclaire'),
        'section'       =>  'fashionclaire_content_colors',
        'type'          =>  'color',
    )));

     //Link hover Color
     $wp_customize->add_setting( 'link_hover_color', array(
        'default'           => $default['link_hover_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_color', array(
        'label'         =>  esc_html__( 'Link color on Hover', 'fashionclaire' ),
        'description'   =>  esc_html__( 'Change the color on hover of breadcrumb, titles, widgets, categories, dropdown menu.', 'fashionclaire'),
        'section'       =>  'fashionclaire_content_colors',
        'type'          =>  'color',
    )));

     // Buttons Color Section
     $wp_customize->add_section('fashionclaire_button_colors', array(
        'title'     => esc_html__( 'Buttons section', 'fashionclaire' ),
        'description'   =>  esc_html__('These options apply only of tag, continue reading, submit and reply button.', 'fashionclaire'),
        'panel'     => 'fashionclaire_colors_panel',
    ));

    // Button Color
    $wp_customize->add_setting( 'button_color', array(
        'default'           =>  $default['button_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_color', array(
        'label'         => esc_html__( 'Button color', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the color of button.', 'fashionclaire'),
        'section'       =>  'fashionclaire_button_colors',
        'type'          =>  'color',
    )));

      // Button Background Color
      $wp_customize->add_setting( 'button_background_color', array(
        'default'           =>  $default['button_background_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_background_color', array(
        'label'         => esc_html__( 'Background color', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the background color of button.', 'fashionclaire'),
        'section'       =>  'fashionclaire_button_colors',
        'type'          =>  'color',
    )));

      // Border Color
      $wp_customize->add_setting( 'button_border_color', array(
        'default'           =>  $default['button_border_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_border_color', array(
        'label'         => esc_html__( 'Border color', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the border color of button.', 'fashionclaire'),
        'section'       =>  'fashionclaire_button_colors',
        'type'          =>  'color',
    )));

    // Button Hover Color
    $wp_customize->add_setting( 'button_hover_color', array(
        'default'           =>  $default['button_hover_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_hover_color', array(
        'label'         => esc_html__( 'Button color on hover', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the color of button on hover.', 'fashionclaire'),
        'section'       =>  'fashionclaire_button_colors',
        'type'          =>  'color',
    )));

      // Button Hover Background Color
      $wp_customize->add_setting( 'button_hover_background_color', array(
        'default'           =>  $default['button_hover_background_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_hover_background_color', array(
        'label'         => esc_html__( 'Background color on hover', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the background color of button on hover.', 'fashionclaire'),
        'section'       =>  'fashionclaire_button_colors',
        'type'          =>  'color',
    )));

      // Border Hover Color
      $wp_customize->add_setting( 'button_hover_border_color', array(
        'default'           =>  $default['button_hover_border_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_hover_border_color', array(
        'label'         => esc_html__( 'Border color on hover', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the border color of button on hover.', 'fashionclaire'),
        'section'       =>  'fashionclaire_button_colors',
        'type'          =>  'color',
    )));

    // Pagination Color Section
     $wp_customize->add_section('fashionclaire_paging_colors', array(
        'title'     => esc_html__( 'Pagination section', 'fashionclaire' ),
        'description'   =>  esc_html__('These options apply only for pagination.', 'fashionclaire'),
        'panel'     => 'fashionclaire_colors_panel',
    ));

    // Paging Color
    $wp_customize->add_setting( 'paging_color', array(
        'default'           =>  $default['paging_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paging_color', array(
        'label'         => esc_html__( 'Pagination color', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the pagination color.', 'fashionclaire'),
        'section'       =>  'fashionclaire_paging_colors',
        'type'          =>  'color',
    )));

     // Paging background color
    $wp_customize->add_setting( 'paging_background_color', array(
        'default'           =>  $default['paging_background_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paging_background_color', array(
        'label'         => esc_html__( 'Pagination background color', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the pagination background color.', 'fashionclaire'),
        'section'       =>  'fashionclaire_paging_colors',
        'type'          =>  'color',
    )));

    // Paging border  color
    $wp_customize->add_setting( 'paging_border_color', array(
        'default'           =>  $default['paging_border_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paging_border_color', array(
        'label'         => esc_html__( 'Pagination border color', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the pagination border color.', 'fashionclaire'),
        'section'       =>  'fashionclaire_paging_colors',
        'type'          =>  'color',
    )));

     // Paging Hover Color
     $wp_customize->add_setting( 'paging_hover_color', array(
        'default'           =>  $default['paging_hover_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paging_hover_color', array(
        'label'         => esc_html__( 'Pagination color on hover', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the pagination color on hover.', 'fashionclaire'),
        'section'       =>  'fashionclaire_paging_colors',
        'type'          =>  'color',
    )));

      // Paging Hover Background Color
      $wp_customize->add_setting( 'paging_hover_background_color', array(
        'default'           =>  $default['paging_hover_background_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paging_hover_background_color', array(
        'label'         => esc_html__( 'Pagination Background color on hover', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the pagination background color on hover.', 'fashionclaire'),
        'section'       =>  'fashionclaire_paging_colors',
        'type'          =>  'color',
    )));

        // Paging Hover Border Color
      $wp_customize->add_setting( 'paging_hover_border_color', array(
        'default'           =>  $default['paging_hover_border_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paging_hover_border_color', array(
        'label'         => esc_html__( 'Pagination border color on hover', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the pagination border color on hover.', 'fashionclaire'),
        'section'       =>  'fashionclaire_paging_colors',
        'type'          =>  'color',
    )));

        // Paging Current Color
      $wp_customize->add_setting( 'paging_current_color', array(
        'default'           =>  $default['paging_current_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paging_current_color', array(
        'label'         => esc_html__( 'Paging current color', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the current pagination color.', 'fashionclaire'),
        'section'       =>  'fashionclaire_paging_colors',
        'type'          =>  'color',
    )));

          // Paging Current background Color
      $wp_customize->add_setting( 'paging_current_background_color', array(
        'default'           =>  $default['paging_current_background_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paging_current_background_color', array(
        'label'         => esc_html__( 'Paging current background color', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the pagination background color in current page.', 'fashionclaire'),
        'section'       =>  'fashionclaire_paging_colors',
        'type'          =>  'color',
    )));

          // Paging Current border Color
      $wp_customize->add_setting( 'paging_current_border_color', array(
        'default'           =>  $default['paging_current_border_color'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paging_current_border_color', array(
        'label'         => esc_html__( 'Paging current border color', 'fashionclaire' ),
        'description'   => esc_html__( 'Change the pagination border color in current page.', 'fashionclaire'),
        'section'       =>  'fashionclaire_paging_colors',
        'type'          =>  'color',
    )));

    // Author Section
    $wp_customize->add_section( 'fashionclaire_author_background', array(
        'title'    => esc_html__( 'Author section', 'fashionclaire' ),
        'panel'    => 'fashionclaire_colors_panel',
    ));

    // Author background
    $wp_customize->add_setting( 'author_background', array(
        'default'           =>  $default['author_background'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
        
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'author_background', array(
        'label'         =>  esc_html__( 'Author background', 'fashionclaire' ),
        'description'   =>  esc_html__( 'Change the background color of author section.', 'fashionclaire'),
        'section'       =>  'fashionclaire_author_background',  
        'type'          =>  'color',
    )));

    // Footer Section
    $wp_customize->add_section( 'fashionclaire_footer_background', array(
        'title'    => esc_html__( 'Footer section', 'fashionclaire' ),
        'panel'    => 'fashionclaire_colors_panel',
    ));

    // Footer background
    $wp_customize->add_setting( 'footer_background', array(
        'default'           =>  $default['footer_background'],
        'sanitize_callback' =>  'fashionclaire_sanitize_hex_color',  
    ));
        
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background', array(
        'label'         =>  esc_html__( 'Footer background', 'fashionclaire' ),
        'description'   =>  esc_html__( 'Change the background color of footer.', 'fashionclaire'),
        'section'       =>  'fashionclaire_footer_background',  
        'type'          =>  'color',
    )));