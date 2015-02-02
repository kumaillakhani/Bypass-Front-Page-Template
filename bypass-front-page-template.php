<?php
/**
 * Plugin Name: Bypass Front Page Template
 * Plugin URI: http://www.itlogics.net
 * Description: When activated, disables the front-page.php template in the theme.
 * Version: 1.0
 * Author: Kumail Raza Lakhani
 * Author URI: http://www.itlogics.net
 * License: GPL2
 */


function bypass_front_page_template( $template ) {

	if( is_front_page() && 'page' == get_option( 'show_on_front' )  ) {
//		$new_template = locate_template( array( 'page.php' ) );
		$new_template = locate_template( array( 'front-page-clone.php' ) );
		if ( '' != $new_template ) {
			return $new_template ;
		}
	}

	return $template;
}

add_filter( 'template_include', 'bypass_front_page_template', 99 );

?>
