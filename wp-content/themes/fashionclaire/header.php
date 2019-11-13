<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'fashionclaire'); ?></a>
        <header id="masthead" class="site-header" role="banner">
            <?php if((fashionclaire_get_option('show_top_header'))==1) :?>
                <div class="top-header-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-sm-12">
                                <?php if( is_active_sidebar( 'header' ) ) {
                                    dynamic_sidebar('header'); 
                                } ?>
                            </div>
                         </div>
                    </div>
                </div>

            <?php endif;?> 
            <div class="container">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="site-branding">
                                    <?php if (function_exists('the_custom_logo') ) {
                                        the_custom_logo();
                                    }?>

                                    <?php if((fashionclaire_get_option('show_site_title'))==1) :  ?>
                                        <h1 class="site-title">
                                            <a href="<?php echo esc_url(home_url( '/' ) ); ?>">
                                                <?php bloginfo('name'); ?>
                                            </a>
                                        </h1>
                                <?php endif;?>
                                <?php if((fashionclaire_get_option('show_site_tagline'))==1) :  ?>
                                     <p class="site-tagline">
                                            <?php bloginfo('description'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 end-md end-xs">
                             <button class="menu-toggle" aria-controls="main-navigation" aria-expanded="false" type="button">
                                <span aria-hidden="true"><?php _e( 'Menu', 'fashionclaire' ); ?></span>
                                    <span class="dashicons" aria-hidden="true"></span>
                            </button>
                                <nav id="main-navigation" class="site-navigation primary-navigation" role="navigation">
                                        <?php 
                                            wp_nav_menu(array(
                                                'theme_location' => 'primary',
                                                'container' => 'ul',
                                                'menu_id' => 'primary-menu',
                                                'menu_class' => 'primary-menu menu',
                                                ));
                                        ?>
                                </nav>
                        </div>
                    </div>
                </div>
        </header>
<main id="content" class="main" role="main">