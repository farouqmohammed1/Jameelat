<?php
/**
 * Sanitize Theme Customizer
 * 
* @package fashionclaire
* @since fashionclaire 1.1.4
*
*/

function fashionclaire_sanitize_font_choice( $value ) {
	if ( '0' == $value ) {
		return '0';
	} else if ( array_key_exists( $value, fashionclaire_get_font_choices() ) ) {
		return $value;
	} else {
		return 'Open Sans';
	}
}

function fashionclaire_sanitize_select ( $input, $setting ){
  // Ensure input is a slug
 $input = sanitize_key( $input );
  //Get list of choices from the control associated with the settiubg
  $choices = $setting->manager->get_control($setting->id)->choices;
  //If the input is a valid key, return it. Otherwise, return the default;
 return (array_key_exists( $input, $choices ) ? $input : $setting->default);
}

function fashionclaire_sanitize_hex_color( $hex_color, $setting ) {
	// Sanitize $input as a hex value without the hash prefix.
	$hex_color = sanitize_hex_color( $hex_color );
	
	// If $input is a valid hex value, return it; otherwise, return the default.
	return ( ! is_null( $hex_color ) ? $hex_color : $setting->default );
}

function fashionclaire_sanitize_checkbox ( $checked ) {
  return ( (isset( $checked ) && true == $checked) ? true : false);
}

 // Function for url
function fashionclaire_sanitize_url ( $url ){
   return esc_url_raw( $url );
}

function fashionclaire_sanitize_number_absint( $number, $setting ) {
  // Ensure $number is an absolute integer (whole number, zero or greater).
  $number = absint( $number );
  // If the input is an absolute integer, return it; otherwise, return the default
  return ( $number ? $number : $setting->default );
}

function fashionclaire_sanitize_text( $input ) {
  return wp_kses_post( force_balance_tags( $input ) );
}

 /**
  * Sanitize integer input while differentiatinf zero from empty string
  * 
  * @param int|string $input Input value to sanitize
  * @return int|string Integer value, 0 or an empty string otherwise.
  */

  function fashionclaire_sanitize_intval_or_empty ( $input ){
    if ( $input === false || $input === '' ){
      return '';
    }
    if ( $input == 0 ) {
      return 0;
    }
    return intval ( $input );
  }