<?php

// import files
// add_action(<name for execute timing>, <function name>);
add_action('wp_enqueue_scripts', 'guidance_files');
function guidance_files()
{
    // wp_enqueue_style(<some name>, <file url>)
    wp_enqueue_style('guidance-main-style', get_stylesheet_uri());
}
