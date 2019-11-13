<?php
/**
* dymamic css
*
* @package fashionclaire
* @since fashionclaire 1.1.4
*
*/

function fashionclaire_dynamic_css(){
    $hide_mobile_related_content    =    esc_attr(fashionclaire_get_option('hide_mobile_related_content'));
    $hide_mobile_top_header         =    esc_attr(fashionclaire_get_option('hide_mobile_top_header'));
    $hide_post_date_related         =    esc_attr(fashionclaire_get_option('hide_post_date_related'));
    $hide_mobile_sidebar            =    esc_attr(fashionclaire_get_option('hide_mobile_sidebar'));
    $show_archive_comments          =    esc_attr(fashionclaire_get_option('show_archive_comments'));
    $show_single_comments           =    esc_attr(fashionclaire_get_option('show_single_comments'));
    $show_meta_comments             =    esc_attr(fashionclaire_get_option('show_meta_comments'));
    $show_continue_reading_text     =    esc_attr(fashionclaire_get_option('show_continue_reading_text'));
    $logo_padding_top               =    esc_attr(fashionclaire_get_option('logo_padding_top'));
    $logo_padding_bottom            =    esc_attr(fashionclaire_get_option('logo_padding_bottom'));


$css = '<style id="fashionclaire_dynamic_css">'; ?>
<?php
if (($hide_mobile_related_content)==1) :  {
        $css .= '
            @media screen and ( max-width:768px ){
                .entry-related {
                    display:none!important;
                }
            }
            '."\n";
        }
    endif; 

    if (( $hide_mobile_top_header)==1) :  {
        $css .= '
            @media screen and ( max-width:768px ){
                .top-header-content {
                    display:none!important;
                }
            }
            '."\n";
        }
    endif;

    if (($hide_post_date_related)==1) :  {
        $css .= '
        .entry-item-related .entry-item-related-content > * {
            display:inline-block;
        }
            '."\n";
    }
    endif;

    if (($hide_mobile_sidebar)==1) :  {
        $css .= '
        #secondary.sidebar {
            display:none;
        }
            '."\n";
    }
    endif;

    if (($show_archive_comments)==0) :  {
        $css .= '
                .entry .entry-time a:after  {
                        display:none!important;
                    }
                
            '."\n";
    }   
    endif;

    if (($show_single_comments)==0) :  {
        $css .= '
                .entry .entry-time a:after  {
                        display:none!important;
                    }
                
            '."\n";
    }   
    endif;

    if (($show_meta_comments)==0) :  {
        $css .= '
            .entry-time a::after{
                display:none!important;
            '."\n";
    }   
    endif;

    if (($show_continue_reading_text)==0) :  {
        $css .= '
        .entry{
            padding:0!important;
        }
     
        .entry .entry-content p{
                      margin:0!important;
                    }
                
            '."\n";
    }   
    endif;

   if (($logo_padding_top) || ($logo_padding_bottom)) : {
        if($logo_padding_top) {
            $css .= ".site-branding a.custom-logo-link .custom-logo {padding-top: {$logo_padding_top}px; }"."\n";
        }   
        if($logo_padding_bottom) {
            $css .= ".site-branding a.custom-logo-link .custom-logo {padding-bottom: {$logo_padding_bottom}px; }"."\n";
            } 
    }
    endif;

 $css .= '</style>';
    echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css); 
} 
add_action('wp_enqueue_scripts', 'fashionclaire_dynamic_css');