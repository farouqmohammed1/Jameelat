<?php
if (!function_exists('fashionclaire_get_default_theme_options')):

    /**
    * Get default theme options
    *
    * @package fashionclaire
    * @since fashionclaire 1.1.4
    * @return array Default customizer options.
    */

    function fashionclaire_get_default_theme_options() {

        $defaults = array();

        $defaults['show_site_title']                =  1;
        $defaults['show_site_tagline']              =  1;
        $defaults['logo_padding_top']               =  12;
        $defaults['logo_padding_bottom']            =  12;
        $defaults['heading_font']                   =  'PT Serif';
        $defaults['body_font']                      =  'PT Serif';
        $defaults['branding_font']                  =  'PT Serif';
        $defaults['show_top_header']                =  1;

        // Archive/Blog
        $defaults['show_content']                   =  0;
        $defaults['excerpt_length']                 =  55;
        $defaults['excerpt_text']                   =  esc_html__('[...]', 'fashionclaire');
        $defaults['continue_reading_text']          =  esc_html__('Continue Reading', 'fashionclaire');
        $defaults['show_continue_reading_text']     =  1;
        $defaults['show_archive_breadcrumb']        =  1;
        $defaults['show_archive_category']          =  1;
        $defaults['show_archive_date']              =  1;
        $defaults['show_archive_comments']          =  1;
        $defaults['show_archive_tags']              =  1;
        $defaults['show_archive_featured_image']    =  1;
     
        // Single Posts
        $defaults['show_single_breadcrumb']         =  1;
        $defaults['show_single_category']           =  1;
        $defaults['show_single_date']               =  1;
        $defaults['show_single_comments']           =  1;
        $defaults['show_single_tags']               =  1;
        $defaults['show_single_author']             =  1;
        $defaults['show_single_pagination']         =  1;

        // Sidebar
        $defaults['show_single_sidebar']            =  1;
        $defaults['show_page_sidebar']              =  1;

        // Page
        $defaults['show_page_breadcrumb']           =  1;
        $defaults['show_page_featured_image']       =  1;
       
        // Related Content
        $defaults['change_related_title']           =  esc_html__('Related Posts', 'fashionclaire');
        $defaults['show_related_date']              =  1;
        $defaults['show_related_content']           =  1;
        $defaults['show_entry_date_widget']         =  1;

        // Footer
        $defaults['copyright_text']                 =  esc_html__('Copyright &copy; All rights reserved.', 'fashionclaire');

        // Responsive section
        $defaults['hide_mobile_top_header']         =  0;
        $defaults['hide_mobile_related_content']    =  0; 
        $defaults['hide_mobile_sidebar']            =  0; 

        // Top Header
        $defaults['top_header_background']          =  '#fafafa';

        // Content
        $defaults['title_color']                    =  '#333333';
        $defaults['tagline_color']                  =  '#333333';
        $defaults['background_color']               =  '#ffffff';
        $defaults['body_color']                     =  '#333333';
        $defaults['headings_color']                 =  '#151515';
        $defaults['secondary_color']                =  '#8e710b';
        $defaults['link_hover_color']               =  '#8e710b';

        // Buttons
        $defaults['button_color']                   =  '#ffffff';
        $defaults['button_background_color']        =  '#8e710b';
        $defaults['button_border_color']            =  '#8e710b';

        $defaults['button_hover_color']             =  '#8e710b';
        $defaults['button_hover_background_color']  =  '#ffffff';
        $defaults['button_hover_border_color']      =  '#8e710b';

        // Paging
        $defaults['paging_color']                   =  '#8e710b';
        $defaults['paging_background_color']        =  '#ffffff';
        $defaults['paging_border_color']            =  '#8e710b';

        // Hover Paging
        $defaults['paging_hover_color']             =  '#ffffff';
        $defaults['paging_hover_background_color']  =  '#8e710b';
        $defaults['paging_hover_border_color']      =  '#8e710b';
        
        // Hover Paging
        $defaults['paging_current_color']             =  '#ffffff';
        $defaults['paging_current_background_color']  =  '#8e710b';
        $defaults['paging_current_border_color']      =  '#8e710b';
        
        // Breadcrumb
        $defaults['breadcrumb_background']          =  '#fafafa';
    
        // Author
        $defaults['author_background']              =  '#fafafa';

        // Footer
        $defaults['footer_background']              =  '#fafafa';
      
        $defaults = apply_filters('fashionclaire_filter_default_theme_options', $defaults);
        return $defaults;
    }
endif;