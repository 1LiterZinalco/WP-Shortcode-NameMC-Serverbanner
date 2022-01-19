<?php
/*
 @wordpress-plugin
 Plugin Name: Serverbanner - NameMc
 Author: Domisiding
 Author URI: https://domisiding.de
 Description: Serverbanner einbindung von NameMc durch Shortcodes
 Version: 1.0
 Text Domain: mcbanner
 License: GNU General Public License v2
 Domain Path: /languages
 */
//////////////////////////// Schutz //////////////////////////
if ( ! defined( 'WPINC' ) ) {
    die;
}
//////////////////////////// Include and Action //////////////////////////
add_action('init', 'mcbanner_shortcodes_init');
add_action('mcbanner_language', 'mcbanner_sprache');
//////////////////////////// Sprachen //////////////////////////
function mcbanner_sprache() {
    load_plugin_textdomain( 'mcbanner', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
//////////////////////////// Beschreibung //////////////////////////
array( __('Minecraft Serverbanner - NameMc', 'mcbanner'), __('Serverbanner einbindung von NameMc durch Shortcodes.', 'mcbanner') );
//////////////////////////// Shortcodes //////////////////////////
function mcbanner($atts = [], $content = null, $tag = '') {
    
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    
    $skin_atts = shortcode_atts([
        'server' => 'beispiel.de',
        'width' => '728',
        'height' => '90',
    ], $atts, $tag);
    
    $ausgabe = '';
    
    $ausgabe .= '<div class="serverbanner">';
    
    $ausgabe .= '<iframe style="width:'. htmlspecialchars($skin_atts['width']) . 'px;height:'. htmlspecialchars($skin_atts['height']) . 'px;max-width:100%;border:none;display:block;margin:auto" src="https://de.namemc.com/server/'. htmlspecialchars($skin_atts['server']) . '/embed" width="'. htmlspecialchars($skin_atts['width']) . '" height="'. htmlspecialchars($skin_atts['height']) . '"></iframe>';
    
    if (!is_null($content)) {
        $ausgabe .= apply_filters('the_content', $content);
        $ausgabe .= do_shortcode($content);
    }
    
    $ausgabe .= '</div>';
    
    return $ausgabe;
    
}
//////////////////////////// Init //////////////////////////
function mcbanner_shortcodes_init()
{
    add_shortcode('mcbanner', 'mcbanner');
}