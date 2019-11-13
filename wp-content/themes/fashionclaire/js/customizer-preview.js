/**
 * Theme Customizer enhanements for a better user experience
 * Contines handlers to make Theme Customizer preview reload changes asynchronously.
 */
( function( $ ) {
     wp.customize ('blogname', function ( value ) {
         value.bind( function ( to )  {
             $ ( '.site-title a').text ( to );
         } );
     } ); 

     wp.customize ( 'blogdescription', function ( value) {
            value.bind (function (to) {
                $('.site-description').text (to);
        });
    } ) ;
    
     // background color for body
    wp.customize( 'background_color', function( value ) {
		value.bind( function( to ) {
			$( 'body').css( {
				'background-color':to
			});
		} );
    });
} )( jQuery );