<?php
/**
 * Plugin Name: LL
 * Plugin URI: https://github.com/imithu/LL-Wordpress
 * Description: LL - Language Localization
 * Version: 2.1.1
 * Author: Mahmudul Hasan Mithu
 * Author URI: https://imithu.com
 */


require 'vendor/autoload.php';
use LL\Lang;




/**
 * set the language in cookie
 * 
 * 
 * @since   2.1.1
 * @version 2.1.1-wordpress-specific-1
 * @author  Mahmudul Hasan Mithu
 */
add_action( 'wp_ajax_LL_lang_set', 'LL_lang_set' );
add_action( 'wp_ajax_nopriv_LL_lang_set', 'LL_lang_set' );
function LL_lang_set(){
    $lang = $_POST['lang'];

    Lang::lang_set( $lang );

    wp_die();
}