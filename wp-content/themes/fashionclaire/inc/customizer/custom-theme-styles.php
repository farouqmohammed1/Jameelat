<?php
function fashionclaire_custom_theme_styles(){

    $background_color                   = fashionclaire_get_option('background_color');
    $title_color                        = fashionclaire_get_option('title_color');
    $tagline_color                      = fashionclaire_get_option('tagline_color');
    $top_header_background              = fashionclaire_get_option('top_header_background');
    $breadcrumb_background              = fashionclaire_get_option('breadcrumb_background');
    $body_color                         = fashionclaire_get_option('body_color');
    $headings_color                     = fashionclaire_get_option('headings_color');
    $secondary_color                    = fashionclaire_get_option('secondary_color');
    $link_hover_color                   = fashionclaire_get_option('link_hover_color');
    $tag_color                          = fashionclaire_get_option('tag_color');

    $button_color                       = fashionclaire_get_option('button_color');
    $button_background_color            = fashionclaire_get_option('button_background_color');
    $button_border_color                = fashionclaire_get_option('button_border_color');
    $button_hover_color                 = fashionclaire_get_option('button_hover_color');
    $button_hover_background_color      = fashionclaire_get_option('button_hover_background_color');
    $button_hover_border_color          = fashionclaire_get_option('button_hover_border_color');

    $paging_color                       = fashionclaire_get_option('paging_color');
    $paging_background_color            = fashionclaire_get_option('paging_background_color');
    $paging_border_color                = fashionclaire_get_option('paging_border_color');

    $paging_hover_color                 = fashionclaire_get_option('paging_hover_color');
    $paging_hover_background_color      = fashionclaire_get_option('paging_hover_background_color');
    $paging_hover_border_color          = fashionclaire_get_option('paging_hover_border_color');

    $paging_current_color               = fashionclaire_get_option('paging_current_color');
    $paging_current_background_color    = fashionclaire_get_option('paging_current_background_color');
    $paging_current_border_color        = fashionclaire_get_option('paging_current_border_color');

    $author_background                  = fashionclaire_get_option('author_background');
    $footer_background                  = fashionclaire_get_option('footer_background');

    $heading_font                       = esc_attr(fashionclaire_get_option('heading_font'));
    $body_font                          = esc_attr(fashionclaire_get_option('body_font'));
    $branding_font                      = esc_attr(fashionclaire_get_option('branding_font'));

    // Font family for heading
    if ( $heading_font != 'PT Serif' ) :
        ?>
        <style>
            h1.entry-title a,
            h1.entry-title-widget a,
            h3.widget-title{
                font-family: <?php echo esc_html($heading_font); ?>
            }
        </style>
    <?php endif; 

  //  Font family for body
    if ( $body_font != 'PT Serif' ) :
        ?>
        <style>
        .entry-meta,
            .entry-content p{
                font-family: <?php echo esc_html($body_font); ?>
            }
        </style>
    <?php endif; 

      //  Font family for branding
      if ( $branding_font != 'PT Serif' ) :
        ?>
        <style>
        h1.site-title, 
        p.site-tagline{
                font-family: <?php echo esc_html($branding_font); ?>
            }
        </style>
    <?php endif; 

    // Background Color 
    if ( $background_color != '#ffffff' ) :
        ?>
        <style>
            body.custom-background{
                background-color : <?php echo esc_html($background_color); ?>
            }
        </style>
    <?php endif; 

    // title Color 
    if ( $title_color != '#333333' ) :
        ?>
        <style>
            .site-title a{
                color : <?php echo esc_html($title_color); ?>
            }
        </style>
    <?php endif; 

      // tagline Color 
    if ( $tagline_color != '#333333' ) :
        ?>
        <style>
            p.site-tagline {
                color : <?php echo esc_html($tagline_color); ?>
            }
        </style>
    <?php endif; 

    // Header Background Color 
    if ( $top_header_background != '#fafafa' ) :
        ?>
        <style>
            .top-header-content{
                background-color : <?php echo esc_html($top_header_background); ?>
            }
        </style>
    <?php endif; 

      // Header Background Color 
      if ( $breadcrumb_background != '#fafafa' ) :
        ?>
        <style>
            .breadcrumb{
                background-color : <?php echo esc_html($breadcrumb_background); ?>
            }
        </style>
    <?php endif;
    
    //  Body Color 
    if ( $body_color != '#333333' ) : 
    ?>
        <style>
            .author-content p,
            .entry-content p {
                color : <?php echo esc_html($body_color); ?>
            }
        </style>
    <?php endif; 

    //  Heading Color 
    if ( $headings_color != '#151515' ) : 
    ?>
        <style>
           .entry h1.entry-title a,
            h1.entry-title-widget a {
                color : <?php echo esc_html($headings_color); ?>
            }
        </style>
    <?php endif; 


    // Secondary Color 
    if ($secondary_color != '#8e710b' ) :
    ?>
        <style>
             a.tag-cloud-link,
            .widget_categories a,
            .entry-time-widget a,
            h1.entry-title-widget a,
            #respond form#commentform p.logged-in-as a,
            .entry .entry-content p a,
            .breadcrumb .breadcrumb-trail ul a,
            .entry .entry-meta, 
            .entry .entry-meta a{
                    color : <?php echo esc_html($secondary_color); ?>
                }

            .main-navigation .menu ul ul a,
            .wp-block-quote:not(.is-large):not(.is-style-large){
                border-color:<?php echo esc_html($secondary_color); ?>
            }
           
            .entry-related h3.section-title::before,h3.widget-title::before, hr {
                border-width:1px;
                border-style:solid;
                border-color: <?php echo esc_html($secondary_color); ?>;
            }
            #respond h3#reply-title{
                border-top-width:1px;
                border-top-style:solid;
                border-top-color: <?php echo esc_html($secondary_color); ?>;
            }
           
        </style>
    <?php endif;

        // Hover Links  
    if ($link_hover_color != '#8e710b' ) :
    ?>
        <style>
            .nav-links a:hover,
            a.tag-cloud-link:hover,
            .widget_categories a:hover,
            .entry-time-widget a:hover,
            h1.entry-item-title a:hover,
            h1.entry-title-widget a:hover,
            .entry h1.entry-title a:hover,
            .entry-content a:hover,
            .breadcrumb .breadcrumb-trail ul a:hover,
            .entry .entry-meta a:hover{
                    color : <?php echo esc_html($link_hover_color); ?>
                }

            .main-navigation .menu ul ul a:hover{
                background-color:<?php echo esc_html($link_hover_color); ?>
            }
        </style>
    <?php endif;

    // Button Color  
    if ($button_color != '#ffffff' ) :
    ?>
        <style>
            #comments .post-comments.group ol#comment-list .reply a.comment-reply-link 
            .entry a.read-more,
            input[type="submit"],
            form.search-form input[type="submit"].search-submit,
            .entry-tags a{
                    color : <?php echo esc_html($button_color); ?>
                }
        </style>
    <?php endif;

    // Button Background Color  
    if ($button_background_color != '#8e710b' ) :
    ?>
        <style>
            #comments .post-comments.group ol#comment-list .reply a.comment-reply-link, 
            .entry a.read-more,
            input[type="submit"],
            form.search-form input[type="submit"].search-submit,
            .entry-tags a{
                    background-color : <?php echo esc_html($button_background_color); ?>
                }
        </style>
    <?php endif;

       // Button Border Color  
    if ($button_border_color != '#8e710b' ) :
    ?>
        <style>
            #comments .post-comments.group ol#comment-list .reply a.comment-reply-link, 
            .entry a.read-more,
            input[type="submit"],
            form.search-form input[type="submit"].search-submit,
            .entry-tags a{
                border-width:1px;
                border-style:solid;
                border-color: <?php echo esc_html($button_border_color); ?>;
                }
        </style>
    <?php endif;

      // Button Hover Color  
      if ($button_hover_color != '#8e710b' ) :
        ?>
            <style>
                #comments .post-comments.group ol#comment-list .reply a.comment-reply-link:hover,
                .entry a.read-more:hover,
                input[type="submit"]:hover,
                form.search-form input[type="submit"].search-submit:hover,
                .entry-tags a:hover{
                        color : <?php echo esc_html($button_hover_color); ?>
                    }
            </style>
        <?php endif;
    
        // Button Hvoer Background Color  
        if ($button_hover_background_color != '#ffffff' ) :
        ?>
            <style>
                #comments .post-comments.group ol#comment-list .reply a.comment-reply-link:hover,
                .entry a.read-more:hover,
                input[type="submit"]:hover,
                form.search-form input[type="submit"].search-submit:hover,
                .entry-tags a:hover{
                        background-color : <?php echo esc_html($button_hover_background_color); ?>
                    }
            </style>
        <?php endif;
    
           // Button Hover Border Color  
        if ($button_hover_border_color != '#8e710b' ) :
        ?>
            <style>
                #comments .post-comments.group ol#comment-list .reply a.comment-reply-link:hover,
                .entry a.read-more:hover,
                input[type="submit"]:hover,
                form.search-form input[type="submit"].search-submit:hover,
                .entry-tags a:hover{
                    border-width:1px;
                    border-style:solid;
                    border-color: <?php echo esc_html($button_hover_border_color); ?>;
                    }
            </style>
        <?php endif;


        // Paging Color  
        if ($paging_color != '#8e710b' ) :
        ?>
            <style>
                a.page-numbers, span.page-numbers{
                    color:<?php echo esc_html($paging_color); ?>;
                    }
            </style>
        <?php endif;

        // Paging background Color  
        if ($paging_background_color != '#ffffff' ) :
        ?>
            <style>
                a.page-numbers, span.page-numbers{
                    background-color:<?php echo esc_html($paging_background_color); ?>;
                    }
            </style>
        <?php endif;

        // Paging Color  
        if ($paging_border_color != '#8e710b' ) :
            ?>
                <style>
                    a.page-numbers, span.page-numbers{
                        border-width:1px;
                        border-style:solid;
                        border-color: <?php echo esc_html($paging_border_color); ?>;
                        }
                </style>
            <?php endif;

        // Paging Hover  
        if ($paging_hover_color != '#ffffff' ) :
            ?>
                <style>
                    a:hover.page-numbers{
                        color: <?php echo esc_html($paging_hover_color); ?>;
                        }
                </style>
            <?php endif;

        // Paging Background Color Hover  
        if ($paging_hover_background_color != '#8e710b' ) :
            ?>
                <style>
                    a:hover.page-numbers{
                        background-color: <?php echo esc_html($paging_hover_background_color); ?>;
                        }
                </style>
            <?php endif;

        // Paging Hover Border Hover  
        if ($paging_hover_border_color != '#8e710b' ) :
            ?>
                <style>
                    a:hover.page-numbers{
                        border-width:1px;
                        border-style:solid;
                        border-color: <?php echo esc_html($paging_hover_border_color); ?>;
                        }
                </style>
            <?php endif;

        // Paging Current Color  
        if ($paging_current_color != '#ffffff' ) :
            ?>
                <style>
                    .paging-navigation .current{
                        color: <?php echo esc_html($paging_current_color); ?>;
                        }
                </style>
            <?php endif;

               // Paging Current background Color  
        if ($paging_current_background_color != '#8e710b' ) :
            ?>
                <style>
                    .paging-navigation .current{
                        background-color: <?php echo esc_html($paging_current_background_color); ?>;
                        }
                </style>
            <?php endif;

            // Paging Current border Color  
        if ($paging_current_border_color != '#8e710b' ) :
            ?>
                <style>
                    .paging-navigation .current{
                        border-width:1px;
                        border-style:solid;
                        border-color: <?php echo esc_html($paging_current_border_color); ?>;
                        }
                </style>
            <?php endif;


    // Author Section
    if ($author_background != '#fafafa' ) :
    ?>
        <style>
            .author-info{
                background-color: <?php echo esc_html($author_background); ?>
        }
        </style>
    <?php endif; 

    //Footer Section
    if ($footer_background != '#fafafa' ) :
    ?>
        <style>
            footer.site-footer {
                background-color : <?php echo esc_html($footer_background); ?>
        }
        </style>
    <?php endif; 

}
add_action ('wp_head', 'fashionclaire_custom_theme_styles');
?>