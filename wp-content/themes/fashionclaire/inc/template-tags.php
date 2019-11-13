<?php
/**
 * Custom template tags for fashionclaire theme
 * 
 * @package fashionclaire
 * @since fashionclaire 1.1.4
 * 
 */
    // function for posted date
    if ( !function_exists ( 'fashionclaire_posted_on') ) :
        /**
         * Prints HTML with media information for the current post-date/time.
         */
        function fashionclaire_posted_on () {
            $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
            $time_string = sprintf ( $time_string,
            esc_attr( get_the_date ( get_option('date_format'))),
            esc_html( get_the_date ( get_option('date_format')))
        );

        $posted_on = sprintf(
            esc_html( '%s', 'post_date' ),
            '<a class="entry-date-widget" href="' . esc_url( get_month_link(esc_html(get_the_time('Y')), esc_html(get_the_time('m')))) . '" rel="bookmark">' . $time_string. '</a>'
        );
        echo wp_kses_post( $posted_on );
        }
    endif;

    // function for tags
    function fashionclaire_post_tag() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'fashionclaire' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'TAGS %1$s ', 'fashionclaire' ) . '</span>',  wp_kses_post( $tags_list )); // WPCS: XSS OK.
			}
		}
    }