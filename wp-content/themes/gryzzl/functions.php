<?php

function gryzzl_files()
{
    wp_enqueue_style('gryzzl_main_styles', get_theme_file_uri('/build/style.css'));
}

add_action('wp_enqueue_scripts', 'gryzzl_files');
