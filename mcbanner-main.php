<?php
/*
 @wordpress-plugin
 Plugin Name: NameMC Serverbanner
 Author: 1LiterZinalco, Domisiding
 Author URI: https://github.com/1LiterZinalco/WP-Shortcode-NameMC-Serverbanner
 Description: NameMC's server banner as a shortcode.
 Version: 2.0
 Text Domain: mcbanner
 License: GNU General Public License v2
 Domain Path: /languages
*/

if ( ! defined( 'WPINC' ) ) {
    die;
}

// Include and Action
add_action('init', 'mcbanner_shortcodes_init');
add_action('mcbanner_language', 'mcbanner_language');

// Language
function mcbanner_language() {
    load_plugin_textdomain( 'mcbanner', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
// Desciption
array( __('NameMC Serverbanner', 'mcbanner'), __('NameMC\'s server banner as a shortcode.', 'mcbanner') );

// Shortcode
function mcbanner($atts = [], $content = null, $tag = '') {
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    
    $skin_atts = shortcode_atts([
        'server' => 'example.com',
        'width' => '720',
        'height' => '90',
    ], $atts, $tag);
    
    $output = '';
    $output .= '<div class="serverbanner">';
    $output .= '<iframe style="width:'. htmlspecialchars($skin_atts['width']) . 'px;height:'. htmlspecialchars($skin_atts['height']) . 'px;max-width:100%;border:none;display:block;margin:auto" src="https://en.namemc.com/server/'. htmlspecialchars($skin_atts['server']) . '/embed" width="'. htmlspecialchars($skin_atts['width']) . '" height="'. htmlspecialchars($skin_atts['height']) . '"></iframe>';
    
    if (!is_null($content)) {
        $output .= apply_filters('the_content', $content);
        $output .= do_shortcode($content);
    }
    
    $output .= '</div>';
    return $output;
}

// Init
function mcbanner_shortcodes_init() {
    add_shortcode('mcbanner', 'mcbanner');
}
