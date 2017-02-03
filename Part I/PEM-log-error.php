<?php
	/*
        Plugin Name: 02 - PEM - Réécriture d'erreur_log
        Plugin URI: https://github.com/Birnou/WP-Plugin-Base
        Description: Permet d'écrire aussi bien des objets que des chaînes de caractères
        Author:Birnou
        Author URI: http://www.puce-et-media.com
        Version 0.0.1
        License: MIT
    */

	if (!function_exists('write_log')) {
	  function write_log ( $log )  {
	    if ( true === WP_DEBUG ) {
	      if ( is_array( $log ) || is_object( $log ) ) {
	        error_log( print_r( $log, true ) );
	      } else {
	        error_log( $log );
	      }
	    }
	  }
	}
?>