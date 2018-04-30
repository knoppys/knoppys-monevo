<?php
/*
Plugin Name:       Knoppys Monevo Integration
Plugin URI:        https://github.com/knoppys/knoppys-monevo.git
Description:       This plugin places a form into a page or post and allows the submission of data to Monevo (previously Pingtree). Options available in the customiser. For help and support, please contact coda@knoppys.co.uk
Version:           1
Author:            Knoppys Digital Limited
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/knoppys/knoppys-monevo.git
GitHub Branch:     master
*/

/***************************
*Load Native & Custom wordpress functionality plugin files. 
****************************/
include 'knoppys-monevo-loader.php';
include 'knoppys-monevo-functions.php';


/***************************
* Load SCP Scripts
****************************/
function elegant_scripts() {    	  

	wp_register_style( 'cssCore', plugin_dir_url( __FILE__ ) . 'css/core.css', false, '1.0.0' );
	wp_enqueue_style( 'cssCore' );  
    wp_enqueue_script( 'jsCore', plugin_dir_url( __FILE__ ) . 'js/core.js', array(), '1.0.0', true );
    
}
add_action( 'admin_enqueue_scripts', 'elegant_scripts' );