<?php
/**
 * Description: Creates a link element to Studentportalen by shortcode
 * Plugin Name: Web21 CMS plugin
 */

add_shortcode('web_21', 'web_21_shortcode');
function web_21_shortcode( $atts = [], $content = null) {
    
    return `<a href='https://studentportal.nackademin.se/course/view.php?id=3861' target='_blank'>" 
        . $content 
        . "</a>`;
}

?>