<?php
/**
 * Template functions or fashionclaire theme
 *
 * @package fashionclaire
 * @since fashionclaire 1.1.4
 * 
 */

    if ( ! function_exists( 'fashionclaire_excerpt_length' ) ) :
        /**
         * excerpt length
         * 
         * @return excerpt length value
         */
        function fashionclaire_excerpt_length( $length ){
            if ( is_admin() ) {
                return $length;
            }
    
            $length = fashionclaire_get_option( 'excerpt_length', 55 );
            return absint( $length );
        }
    endif;
    add_filter( 'excerpt_length', 'fashionclaire_excerpt_length', 999 );


    if ( ! function_exists( 'fashionclaire_excerpt_more' ) ) :
 
        function fashionclaire_excerpt_more( $more ){
            if ( is_admin() ) {
                return $more;
            }
    
            $more = fashionclaire_get_option( 'excerpt_text', '[...]' );
            return wp_kses_post( $more );
        }
    endif;
    add_filter( 'excerpt_more', 'fashionclaire_excerpt_more', 999 );