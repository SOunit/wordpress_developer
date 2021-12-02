<?php

// import files
// add_action(<name for execute timing>, <function name>);
add_action('wp_enqueue_scripts', 'guidance_files');
function guidance_files()
{
    // import js
    wp_enqueue_script('main-guidance-js', get_theme_file_uri('/js/index.js'), array('jquery'), '1.0', true);
    // wp_enqueue_style(<some name>, <file url>)
    // get_stylesheet_uri : for importing default style.css
    // get_theme_file_uri : get theme file uri
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Architects+Daughter&display=swap');
    wp_enqueue_style('font-awesome', '//pro.fontawesome.com/releases/v5.10.0/css/all.css');
    wp_enqueue_style('guidance-main-style', get_theme_file_uri('/css/main.css'));
    wp_enqueue_style('guidance-main-style', get_theme_file_uri('/css/main.css'));
}

add_action('after_setup_theme', 'guidance_features');
function guidance_features()
{
    add_theme_support('title-tag');
}
