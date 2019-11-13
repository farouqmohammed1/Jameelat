<?php
/**
 * Core functions
 * 
 * @package fashionclaire
 * @since fashionclaire 1.1.4
 */

 if ( !function_exists ('fashionclaire_get_option') ) :
    /**
     * Get theme option.
     * @param string $key Option key.
     * @return mixed Option value.
     */

     function fashionclaire_get_option ( $key ) {
         if ( empty ( $key )) {
             return;
         }

         $value='';

         $default = fashionclaire_get_default_theme_options();
         $default_value = null;

         if ( is_array ( $default ) && isset ( $default [ $key ]) ) {
             $default_value = $default [ $key ];
         }

         if (null != $default_value ) {
             $value = get_theme_mod ( $key, $default_value );
         }
         else {
             $value = get_theme_mod ( $key );
         }

         return $value;
     }

    endif;