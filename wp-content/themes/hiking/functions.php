<?php

function hiking_theme_styles() {

	wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'hiking_theme_styles');

?>