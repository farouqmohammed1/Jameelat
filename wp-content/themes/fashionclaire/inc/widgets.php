<?php
/** 
 * Widgets Areas
 * 
 * @package fashionclaire
 * @since fashionclaire 1.1.4
 * 
 */

function fashionclaire_widgets_init(){
    register_sidebar( array ( 
        'name'          =>  esc_html_x('Top Header', 'widget area', 'fashionclaire' ),
        'id'            =>  'header',
        'description'   =>  esc_html__( 'Add widgets for Top Header.', 'fashionclaire'),
        'before_widget' =>  '<aside id="%1$s" class="widget group %2$s">',
        'after_widget'  =>  '</aside>',
        'before_title'  =>  '<h3 class="widget-title">',
        'after_title'   =>  '</h3>',
    ) );

    register_sidebar( array ( 
        'name'          =>  esc_html_x('Sidebar', 'widget area', 'fashionclaire' ),
        'id'            =>  'sidebar-1',
        'description'   =>  esc_html__( 'Add widgets for sidebar.', 'fashionclaire'),
        'before_widget' =>  '<aside id="%1$s" class="widget group %2$s">',
        'after_widget'  =>  '</aside>',
        'before_title'  =>  '<h3 class="widget-title">',
        'after_title'   =>  '</h3>',
    ) );

    register_sidebar( array (
        'name'          =>  esc_html_x('Footer - Column 1', 'widget area', 'fashionclaire'),
        'id'            =>  'footer-1',
        'description'   =>  esc_html__('This is the first column on footer', 'fashionclaire'),
        'before_widget' =>  '<aside id="%1$s" class="widget group %2$s">',
        'after_widget'  =>  '</aside>',
        'before_title'  =>  '<h3 class="widget-title">',
        'after_title'   =>  '</h3>',  
    ) );

    register_sidebar( array (
        'name'          =>  esc_html_x('Footer - Column 2', 'widget-area', 'fashionclaire'),
        'id'            =>  'footer-2',
        'description'   =>  esc_html__('This is the second column on footer', 'fashionclaire'),
        'before_widget' =>  '<aside id="%1$s" class="widget group %2$s">',
        'after_widget'  =>  '</aside>',
        'before_title'  =>  '<h3 class="widget-title">',
        'after_title'   =>  '</h3>',
    ) );

    register_sidebar( array(
        'name'          =>  esc_html_x('Footer - Column 3', 'widget-area', 'fashionclaire'),
        'id'            =>  'footer-3',
        'description'   =>  esc_html__('This is the third column on footer', 'fashionclaire'),
        'before_widget' =>  '<aside id="%1$s" class="widget group %2$s">',
        'after_widget'  =>  '</aside>',
        'before_title' =>  '<h3 class="widget-title">',
        'after_title'  =>  '</h3>',
    ) );

    register_sidebar( array(
        'name'          =>  esc_html_x('Footer - Column 4', 'widget-area', 'fashionclaire'),
        'id'            =>  'footer-4',
        'description'   =>  esc_html__('This is the fourth column on footer', 'fashionclaire'),
        'before_widget' =>  '<aside id="%1$s" class="widget group %2$s">',
        'after_widget'  =>  '</aside>',
        'before_title' =>  '<h3 class="widget-title">',
        'after_title'  =>  '</h3>',
    ) );
}
add_action ( 'widgets_init', 'fashionclaire_widgets_init');