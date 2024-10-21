<?php
function neoversity_theme_enqueue_styles() {
    wp_enqueue_style('neoversity-style', get_template_directory_uri() . '/styles.css', array(), '1.0', 'all');
    wp_enqueue_script('neoversity-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'neoversity_theme_enqueue_styles');