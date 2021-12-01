<?php

/**
 * Plugin Name: Our Test Plugin
 * Description: A truely amazing plugin.
 * Version: 1.0
 * Author: Brad
 * Author URI: https://www.udemy.com/course/become-a-wordpress-developer-php-javascript/#overview
 */

add_filter('the_content', 'addToEndOfPost');
function addToEndOfPost($content)
{
    // only if signle post, main query
    if (is_page() && is_main_query()) {
        return $content . "<p>from my plugin.</p>";
    }

    return $content;
}
