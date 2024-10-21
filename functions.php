<?php
function neoversity_theme_enqueue_styles() {
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/styles.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'neoversity_theme_enqueue_styles');