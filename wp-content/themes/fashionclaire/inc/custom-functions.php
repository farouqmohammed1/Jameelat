<?php
/**
 * Custom functions that are not template related for fashionclaire theme
 *
 * @package fashionclaire
 * @since fashionclaire 1.2.1
 */

  
if ( ! function_exists( 'fashionclaire_footer_top_section' ) ) :

function fashionclaire_footer_top_section() {
    $footer_sidebar_data = fashionclaire_footer_sidebar_class();
    $footer_sidebar    = $footer_sidebar_data['active_sidebar'];
    $footer_class      = $footer_sidebar_data['class'];
    if ( empty( $footer_sidebar ) ) {
      return;
    }      ?>
    <div class="footer-widgets-area page-section <?php echo esc_attr( $footer_class ); ?>">
        <div class="wrapper">
          <?php
            for ( $i = 1; $i <= 4 ; $i++ ) {
              if ( is_active_sidebar( 'footer-' . $i ) ) {
              ?>
                <div class="hentry">
                  <?php dynamic_sidebar( 'footer-' . $i ); ?>
                </div>
                <?php
              }
            }
          ?>
          </div>
        
    </div> 
  <?php
}
endif;

add_action( 'fashionclaire_action_footer', 'fashionclaire_footer_top_section', 10 );


if ( ! function_exists( 'fashionclaire_footer_section' ) ) :
  function fashionclaire_footer_section() { ?>
  <div class="container">
    <div class="row">
          <div class="site-footer">
              <?php 
                  $copyright_footer = fashionclaire_get_option('copyright_text'); 
                  if ( ! empty( $copyright_footer ) ) {
                  $copyright_footer = wp_kses_data( $copyright_footer );
                  }
                  $powered_by_text = sprintf( __( ' Theme fashionclaire by %s', 'fashionclaire' ), '<a target="_blank" rel="designer" href="http://vbaimas.com/">vbaimas</a>' );
              ?>
                <?php echo esc_html($copyright_footer);?><?php echo $powered_by_text;?>
          </div> 
    </div>    
  </div>
    <?php }
endif;
add_action( 'fashionclaire_action_footer', 'fashionclaire_footer_section', 20 );

if ( ! function_exists( 'fashionclaire_footer_sidebar_class' ) ) :
/**
 * Count the number of footer sidebars to enable dynamic classes for the footer
 */
function fashionclaire_footer_sidebar_class() {
  $data = array();
  $active_sidebar = array();
    $count = 0;

    if ( is_active_sidebar( 'footer-1' ) ) {
      $active_sidebar[]   = 'footer-1';
        $count++;
    }

    if ( is_active_sidebar( 'footer-2' ) ){
      $active_sidebar[]   = 'footer-2';
        $count++;
  }

    if ( is_active_sidebar( 'footer-3' ) ){
      $active_sidebar[]   = 'footer-3';
        $count++;
    }

    if ( is_active_sidebar( 'footer-4' ) ){
      $active_sidebar[]   = 'footer-4';
        $count++;
    }

    $class = '';

    switch ( $count ) {
        case '1':
          $class = 'col-1';
          break;
        case '2':
          $class = 'col-2';
          break;
        case '3':
          $class = 'col-3';
          break;
          case '4':
          $class = 'col-4';
          break;
    }

  $data['active_sidebar'] = $active_sidebar;
  $data['class']        = $class;

    return $data;
}
endif;



if ( ! function_exists( 'fashionclaire_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 * Based on paging nav function from Twenty Fourteen
 */

function fashionclaire_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $GLOBALS['wp_query']->max_num_pages,
		'current'  => $paged,
		'mid_size' => 3,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&larr; Previous', 'fashionclaire' ),
		'next_text' => __( 'Next &rarr;', 'fashionclaire' ),
		'type'      => 'list',
	) );

	if ( $links ) :

	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'fashionclaire' ); ?></h1>
			<?php echo $links; ?>
	</nav>
	<?php
	endif;
}
endif;

?>
