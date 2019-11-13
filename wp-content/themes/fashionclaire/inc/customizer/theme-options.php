<?php
/**
 * Theme Options Panel.
 *
 * @package fashionclaire
 * @since fashionclaire 1.2.5
 * 
 */

    $default = fashionclaire_get_default_theme_options();

    // Add panel for theme options
    $wp_customize->add_panel('fashionclaire_theme_panel', array(
        'priority'       =>  180,
        'title'          =>  esc_html__('Themes Options', 'fashionclaire')
    ));
  
    // Show and hide site tile
    $wp_customize->add_setting( 'show_site_title', array(
        'default'           =>  $default['show_site_title'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
    
    $wp_customize->add_control( 'show_site_title', array(
        'label'       =>  esc_html__('Check to show the title below the logo.','fashionclaire'), 
        'section'     =>  'title_tagline',
        'type'        =>  'checkbox',
        'priority'    =>  10,
    ));
    
    // Show and hide tagline
    $wp_customize->add_setting( 'show_site_tagline', array(
        'default'           =>  $default['show_site_tagline'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
    
    $wp_customize->add_control( 'show_site_tagline', array(
        'label'      => esc_html__('Check to show the tagline below the logo.', 'fashionclaire'),
        'section'    => 'title_tagline',
        'type'       => 'checkbox',
        'priority'   => 10,
    ));
  
    // Add padding top to logo
    $wp_customize->add_setting( 'logo_padding_top', array(
        'default'           =>  $default['logo_padding_top'],
        'sanitize_callback' =>  'fashionclaire_sanitize_intval_or_empty'  
    ));
  
    $wp_customize->add_control( 'logo_padding_top', array(
        'label'         =>  esc_html__( 'Logo top padding.', 'fashionclaire' ), 
        'description'   =>  esc_html__('Add some padding in the top of logo.', 'fashionclaire'),
        'section'       =>  'title_tagline',
        'type'          =>  'number',
    ));
  
    // Add padding bottom to logo
    $wp_customize->add_setting( 'logo_padding_bottom', array(
        'default'           =>  $default['logo_padding_bottom'],
        'sanitize_callback' => 'fashionclaire_sanitize_intval_or_empty'  
    ));
  
    $wp_customize->add_control( 'logo_padding_bottom', array(
        'label'     =>  esc_html__('Logo bottom padding.', 'fashionclaire'),
        'description'   =>  esc_html__('Add some padding in the bottom of logo.', 'fashionclaire'),
        'section'   =>   'title_tagline',
        'type'      =>  'number',
    ));
  
       // Section for the Fonts
    $wp_customize->add_section('fashionclaire_section_fonts',array(
        'title'         =>  esc_html__('Fonts', 'fashionclaire'),
        'description'   =>  esc_html__('Settings for the fonts.', 'fashionclaire'),
        'panel'     =>  'fashionclaire_theme_panel',
        'priority'  =>  2
    ));
  
    // Add hesdline font setting and control
    $wp_customize->add_setting( 'heading_font', array(
        'default'           => $default['heading_font'],
        'sanitize_callback' => 'fashionclaire_sanitize_font_choice',
    ));
  
    $wp_customize->add_control('heading_font', array(
        'label'         => __('Select the font family for headings.', 'fashionclaire'),
        'description'   => __('Apply the font for the headings h1, h2, h3, h4, h5, h6. The default font family is PT Serif.', 'fashionclaire'),
        'section'       => 'fashionclaire_section_fonts',
        'type'          => 'select',
        'choices'	 => fashionclaire_get_font_choices(),
        ));
  
    // Add body font setting and control
    $wp_customize->add_setting( 'body_font', array(
        'default'           => $default['body_font'],
        'sanitize_callback' => 'fashionclaire_sanitize_font_choice',
    ));
  
    $wp_customize->add_control('body_font', array(
            'label'         => __('Select the font family for body.', 'fashionclaire'),
            'description'   => __('Apply the font for body. The default font family is PT Serif.', 'fashionclaire'),
            'section'       => 'fashionclaire_section_fonts',
            'type'          => 'select',
            'choices'	 => fashionclaire_get_font_choices(),
    ));


    // Add branding font setting and control
    $wp_customize->add_setting( 'branding_font', array(
        'default'           => $default['branding_font'],
        'sanitize_callback' => 'fashionclaire_sanitize_font_choice',
    ));
  
    $wp_customize->add_control('branding_font', array(
            'label'         => __('Select the font family for branding.', 'fashionclaire'),
            'description'   => __('Apply the font for site title and tagline. The default font family is PT Serif.', 'fashionclaire'),
            'section'       => 'fashionclaire_section_fonts',
            'type'          => 'select',
            'choices'	 => fashionclaire_get_font_choices(),
    ));
  
  
    // Add Social Media Header Section
    $wp_customize->add_section( 'fashionclaire_top_header_section', array(
        'title'         =>  esc_html__('Top Header', 'fashionclaire'),
        'description'   =>  esc_html__('Settings for the site header.', 'fashionclaire'),
        'panel'         =>  'fashionclaire_theme_panel',
        'priority'      =>  10,
    ));
  
     // Show and hide Social media in header
     $wp_customize->add_setting( 'show_top_header', array(
        'default'           =>  $default['show_top_header'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
    $wp_customize->add_control( 'show_top_header', array(
        'label'         =>  esc_html__('Show social media in top header.','fashionclaire'),
        'description'   =>  esc_html__('Check to show the social media in the top of header.', 'fashionclaire'),
        'section'       =>  'fashionclaire_top_header_section',
        'type'          => 'checkbox',
        'priority'      =>  10
    ));
  
    // Add Sidebar Section
    $wp_customize->add_section( 'fashionclaire_layout_section', array(
        'title'         =>  esc_html__('Sidebar Options','fashionclaire'),
        'description'   =>  esc_html__('Settings for sidebar.', 'fashionclaire'),
        'panel'         =>  'fashionclaire_theme_panel',
        'priority'      =>  40,
    ));

    //  Show and hide Sidebar in Single Post
    $wp_customize->add_setting( 'show_single_sidebar', array(
       'default'           =>  $default['show_single_sidebar'],
       'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
   $wp_customize->add_control( 'show_single_sidebar', array(
        'label'       =>  esc_html__('Show sidebar in single post.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show the right sidebar in single post.', 'fashionclaire'),
        'section'     =>  'fashionclaire_layout_section',
        'type'        =>  'checkbox',
    ));

    //  Show and hide sidebar in Page
    $wp_customize->add_setting( 'show_page_sidebar', array(
       'default'           =>  $default['show_page_sidebar'],
       'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
      
   $wp_customize->add_control( 'show_page_sidebar', array(
        'label'       =>  esc_html__('Show sidebar in page.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show the right sidebar in page.', 'fashionclaire'),
        'section'     =>  'fashionclaire_layout_section',
        'type'        =>  'checkbox',
    ));

   // Add archive/blog section
   $wp_customize->add_section( 'fashionclaire_blog_section', array(
        'title'         =>  esc_html__('Archive/blog', 'fashionclaire'),
        'description'   =>  esc_html__('Settings for archive/blog.', 'fashionclaire'),
        'panel'         =>  'fashionclaire_theme_panel',
        'priority'      =>  25,
    ));

    // Show and hide breadcrumb in archive/blog
       $wp_customize->add_setting( 'show_archive_breadcrumb', array(
        'default'           =>  $default['show_archive_breadcrumb'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
    
    $wp_customize->add_control( 'show_archive_breadcrumb', array(
        'label'         =>  esc_html__('Show breadcrumb.','fashionclaire'),
        'description'   =>  esc_html__('Check to show breadcrumb in archive/blog page.', 'fashionclaire'),
        'section'       =>  'fashionclaire_blog_section',
        'type'          =>  'checkbox',  
    ));
  
    // Show and hide excerpt
    $wp_customize->add_setting( 'show_content', array(
        'default'           =>  $default['show_content'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
    $wp_customize->add_control( 'show_content', array(
        'label'     =>  esc_html__('Show the content.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show the content. The excerpt is the default option.', 'fashionclaire'),
        'section'   =>  'fashionclaire_blog_section',
        'type'      =>  'checkbox',
             )
    );
  
    // Add excerpt length in archive/blog
    $wp_customize->add_setting( 'excerpt_length', array(
        'default'           =>  $default['excerpt_length'],
        'sanitize_callback' =>  'fashionclaire_sanitize_number_absint'
    ));
  
    $wp_customize->add_control( 'excerpt_length', array(
        'label'         =>  esc_html__('Enter your excerpt length.','fashionclaire'),
        'description'   =>  esc_html__('The default length of excerpt is 55.', 'fashionclaire'),
        'section'       => 'fashionclaire_blog_section',
        'type'          => 'number',
        'input_attrs'   =>  array(
            'min'       =>  10,
            'max'       =>  200,
            'step'      =>  5,
        ),
    ));
  
    // Add excerpt length text in archive/blog
    $wp_customize->add_setting( 'excerpt_text', array(
        'default'           =>  $default['excerpt_text'],
        'sanitize_callback' =>  'fashionclaire_sanitize_text',
    ));
  
    $wp_customize->add_control( 'excerpt_text', array(
        'description'   =>  esc_html__('Write your text for the excerpt section.', 'fashionclaire'),
        'section'       => 'fashionclaire_blog_section',
        'type'          => 'text',
    ));
  
    // Add changing the read more archive/blog
    $wp_customize->add_setting( 'continue_reading_text', array(
        'default'           =>  $default['continue_reading_text'],
        'sanitize_callback' =>  'fashionclaire_sanitize_text'
    ));
  
    $wp_customize->add_control( 'continue_reading_text', array(
        'label'         =>  esc_html__('Button', 'fashionclaire'),
        'description'   =>  esc_html__('Write the text for continue reading in archive/blog page.', 'fashionclaire'),
        'section'       =>  'fashionclaire_blog_section',
        'type'          =>  'text',
    ));
  
    // Show and hide read more text in archive/blog
    $wp_customize->add_setting( 'show_continue_reading_text', array(
        'default'           =>  $default['show_continue_reading_text'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
    $wp_customize->add_control( 'show_continue_reading_text', array(
        'label'         =>  esc_html__('Show the continue reading.', 'fashionclaire'),
        'description'   =>  esc_html__('Check to show the continue reading in archive/blog page.', 'fashionclaire'),
        'section'       =>  'fashionclaire_blog_section',
        'type'          =>  'checkbox',
    ));
  
    // Show and hide categories in archive/blog
       $wp_customize->add_setting( 'show_archive_category', array(
        'default'           =>  $default['show_archive_category'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
    $wp_customize->add_control( 'show_archive_category', array(
        'label'       =>  esc_html__('Show the categories.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show the categories in archive/blog page.', 'fashionclaire'),
        'section'     =>  'fashionclaire_blog_section',
        'type'        =>  'checkbox',
    ));

     // Show and hide date in archive/blog
     $wp_customize->add_setting( 'show_archive_date', array(
        'default'           =>  $default['show_archive_date'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
    $wp_customize->add_control( 'show_archive_date', array(
        'label'       =>  esc_html__('Show the published date.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show the published date in archive/blog page.', 'fashionclaire'),
        'section'     =>  'fashionclaire_blog_section',
        'type'        =>  'checkbox',
    ));

     // Show and hide count comments in archive/blog 
     $wp_customize->add_setting( 'show_archive_comments', array(
        'default'           =>  $default['show_archive_comments'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
    $wp_customize->add_control( 'show_archive_comments', array(
        'label'       =>  esc_html__('Show the count of comments.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show the count of comments in archive/blog page.', 'fashionclaire'),
        'section'     =>  'fashionclaire_blog_section',
        'type'        =>  'checkbox',
    ));

      // Show And Hide Featured Image in archive/blog 
      $wp_customize->add_setting( 'show_archive_featured_image', array(
        'default'           =>  $default['show_archive_featured_image'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
    $wp_customize->add_control( 'show_archive_featured_image', array(
        'label'       =>  esc_html__('Show the featured image.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show the featured image in archive/blog page.', 'fashionclaire'),
        'section'     =>  'fashionclaire_blog_section',
        'type'        =>  'checkbox',
    ));


    // Add single post section
    $wp_customize->add_section('fashionclaire_single_post_section', array(
        'title'         =>  esc_html__('Single Posts','fashionclaire'),
        'description'   =>  esc_html__('Settings for the single posts.', 'fashionclaire'),
        'panel'         =>  'fashionclaire_theme_panel',
        'priority'      =>  35,
    ));

    // Show and hide breadcrumb in single psot
      $wp_customize->add_setting( 'show_single_breadcrumb', array(
        'default'           =>  $default['show_single_breadcrumb'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
    
    $wp_customize->add_control( 'show_single_breadcrumb', array(
        'label'         =>  esc_html__('Show breadcrumb.', 'fashionclaire'),
        'description'   =>  esc_html__('Check to show the breadcrumb in single post.', 'fashionclaire'),
        'section'       =>  'fashionclaire_single_post_section',
        'type'          =>  'checkbox',  
    ));
  
    // Show and hide categories in single post
    $wp_customize->add_setting( 'show_single_category', array(
        'default'           =>  $default['show_single_category'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
    $wp_customize->add_control( 'show_single_category', array(
        'label'       =>  esc_html__('Show the categories.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show the categories in single post.', 'fashionclaire'),
        'section'     =>  'fashionclaire_single_post_section',
        'type'        =>  'checkbox',
    ));
  
     // Show and hide date in single post
     $wp_customize->add_setting( 'show_single_date', array(
        'default'           =>  $default['show_single_date'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
    $wp_customize->add_control( 'show_single_date', array(
        'label'       =>  esc_html__('Show the published date.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show the published date in single post.', 'fashionclaire'),
        'section'     =>  'fashionclaire_single_post_section',
        'type'        =>  'checkbox',
    ));
  
    // Show and hide cound comments in single post
    $wp_customize->add_setting( 'show_single_comments', array(
        'default'           =>  $default['show_single_comments'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
    $wp_customize->add_control( 'show_single_comments', array(
            'label'       =>  esc_html__('Show the count of comments.', 'fashionclaire'),
            'description' =>  esc_html__('Check to show the count of comments in single post.', 'fashionclaire'),
            'section'     =>  'fashionclaire_single_post_section',
            'type'        =>  'checkbox',
    ));
  
    // Show and hide tags in single post
    $wp_customize->add_setting( 'show_single_tags', array(
        'default'           =>  $default['show_single_tags'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
    $wp_customize->add_control( 'show_single_tags', array(
        'label'       =>  esc_html__('Show the tags.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show tags in single post.', 'fashionclaire'),
        'section'     =>  'fashionclaire_single_post_section',
        'type'        =>  'checkbox',
    ));
  
    // Show and hide Author bio in single post
   $wp_customize->add_setting( 'show_single_author', array(
        'default'           =>  $default['show_single_author'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
    $wp_customize->add_control( 'show_single_author', array(
        'label'       =>  esc_html__('Show the author biography.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show the author biography in single post.', 'fashionclaire'),
        'section'     =>  'fashionclaire_single_post_section',
        'type'        =>  'checkbox',
    ));

    // Show and hide pagination in single post
   $wp_customize->add_setting( 'show_single_pagination', array(
        'default'           =>  $default['show_single_pagination'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
    $wp_customize->add_control( 'show_single_pagination', array(
        'label'       =>  esc_html__('Show the pagination.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show the pagination in single post.', 'fashionclaire'),
        'section'     =>  'fashionclaire_single_post_section',
        'type'        =>  'checkbox',
    ));

    // Add page section
   $wp_customize->add_section( 'fashionclaire_page_section', array(
    'title'         =>  esc_html__('Page', 'fashionclaire'),
    'description'   =>  esc_html__('Settings for the page.', 'fashionclaire'),
    'panel'         =>  'fashionclaire_theme_panel',
    'priority'      =>  37,
    ));

    // Show and hide breadcrumb in page
    $wp_customize->add_setting( 'show_page_breadcrumb', array(
        'default'           =>  $default['show_page_breadcrumb'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
    
    $wp_customize->add_control( 'show_page_breadcrumb', array(
        'label'         =>  esc_html__('Show breadcrumb.', 'fashionclaire'),
        'description'   =>  esc_html__('Check to show breadcrumb in page.', 'fashionclaire'),
        'section'       =>  'fashionclaire_page_section',
        'type'          =>  'checkbox',  
    ));

    // Show and hide featured image in page
      $wp_customize->add_setting( 'show_page_featured_image', array(
        'default'           =>  $default['show_page_featured_image'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
  
    $wp_customize->add_control( 'show_page_featured_image', array(
        'label'       =>  esc_html__('Show featured image.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show featured image in page.', 'fashionclaire'),
        'section'     =>  'fashionclaire_page_section',
        'type'        =>  'checkbox',
    ));

    // Add related section
    $wp_customize->add_section('fashionclaire_related_section',array(
        'title'         =>  esc_html__('Related Posts', 'fashionclaire'),
        'description'   =>  esc_html__('Settings for the related posts.', 'fashionclaire'),
        'panel'         =>  'fashionclaire_theme_panel',
        'priority'      =>  40,
    ));
  
    // Change related text 
    $wp_customize->add_setting( 'change_related_title', 
        array(
            'default'           =>  $default['change_related_title'],
            'sanitize_callback' =>  'fashionclaire_sanitize_text', 
    ));
    
    $wp_customize->add_control( 'change_related_title', array(
        'label'       =>  esc_html__('Related posts section title.', 'fashionclaire'),
        'description' =>  esc_html__('Change the title of related posts section.', 'fashionclaire'),
        'section'     =>  'fashionclaire_related_section',
        'type'        =>  'text',
    ));
  
    // Show and hide date on related posts section 
    $wp_customize->add_setting( 'show_related_date', array(
        'default'           =>  $default['show_related_date'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
    
    $wp_customize->add_control( 'show_related_date', array(
        'label'       =>  esc_html__('Show the date.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show the date of related post.', 'fashionclaire'),
        'section'     =>  'fashionclaire_related_section',
        'type'        =>  'checkbox',
    ));
  
    // Show and hide the related posts section 
    $wp_customize->add_setting( 'show_related_content', array(
        'default'           =>  $default['show_related_content'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
    
    $wp_customize->add_control( 'show_related_content', array(
        'label'       =>  esc_html__('Show the related posts section.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show the section of related posts.', 'fashionclaire'),
        'section'     =>  'fashionclaire_related_section',
        'type'        =>  'checkbox',
    ));
  
    // Add extra section
    $wp_customize->add_section('fashionclaire_extra_options', array(
        'title'         =>  esc_html__('Extra Options', 'fashionclaire'),
        'description'   =>  esc_html__('Extra settings, like widgets.', 'fashionclaire'),
        'panel'         =>  'fashionclaire_theme_panel',
        'priority'      =>  65,
    ));
  
    // Show and hide date on widget section
    $wp_customize->add_setting( 'show_entry_date_widget', array(
        'default'           =>  $default['show_entry_date_widget'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
    
    $wp_customize->add_control( 'show_entry_date_widget', array(
        'label'       =>  esc_html__('Show the date of posts widgets.', 'fashionclaire'),
        'description' =>  esc_html__('Check to show the date of posts in widget section.', 'fashionclaire'),
        'section'     =>  'fashionclaire_extra_options',
        'type'        =>  'checkbox',
    ));
  
    // Add footer section
    $wp_customize->add_section('fashionclaire_footer_section', array(
        'title'         =>  esc_html__('Footer', 'fashionclaire'),
        'description'   =>  esc_html__('Settings for the footer.', 'fashionclaire'),
        'panel'         =>  'fashionclaire_theme_panel',
        'priority'      =>  90,
    ));
    
    // Write copyright to footer
    $wp_customize->add_setting( 'copyright_text', array(
        'default'           => $default['copyright_text'],
        'sanitize_callback' =>  'fashionclaire_sanitize_text',
    ));
  
    $wp_customize->add_control( 'copyright_text', array(
        'label'       =>  esc_html__('Footer Copyright.', 'fashionclaire'),
        'description' =>  esc_html__('Write your text for copyright.', 'fashionclaire'), 
        'section'     =>  'fashionclaire_footer_section',
        'type'        =>  'text',
    ));
  
    // Add Responsive section
    $wp_customize->add_section('fashionclaire_responsive_section',array(
        'title'         =>  esc_html__('Responsive Options', 'fashionclaire'),
        'description'   =>  esc_html__('These options apply only for mobile devices (max-width:768px).', 'fashionclaire'),
        'panel'         =>  'fashionclaire_theme_panel',
    ));
  
    // Show and hide total bar section in mobile view
    $wp_customize->add_setting( 'hide_mobile_top_header', array(
        'default'           =>  $default['hide_mobile_top_header'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
    
    $wp_customize->add_control( 'hide_mobile_top_header', array(
        'label'     =>  esc_html__('Check to hide the top header section.', 'fashionclaire'),
        'section'   =>  'fashionclaire_responsive_section',
        'type'      =>  'checkbox',
    ));
  
    // Show and hide related section of posts in mobile view
    $wp_customize->add_setting( 'hide_mobile_related_content', array(
        'default'           =>  $default['hide_mobile_related_content'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
    
    $wp_customize->add_control( 'hide_mobile_related_content', array(
        'label'       =>    esc_html__('Check to hide the related posts section.', 'fashionclaire'),
        'section'     =>    'fashionclaire_responsive_section',
        'type'        =>    'checkbox',
    ));

    // Show And Hide Sidebar Section of Posts In Mobile View
    $wp_customize->add_setting( 'hide_mobile_sidebar', array(
        'default'           =>  $default['hide_mobile_sidebar'],
        'sanitize_callback' =>  'fashionclaire_sanitize_checkbox',
    ));
    
    $wp_customize->add_control( 'hide_mobile_sidebar', array(
        'label'       =>    esc_html__('Check to hide the sidebar.', 'fashionclaire'),
        'section'     =>    'fashionclaire_responsive_section',
        'type'        =>    'checkbox',
    ));