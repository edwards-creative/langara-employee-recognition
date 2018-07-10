<?php
/**
* Twenty Seventeen Child Code Orange functions and definitions
*/

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/**
* Gets the word count of a post's content.
* @return the integer word count
**/
function word_count() {
    ob_start();
    the_content();
    $content = ob_get_clean();
    return sizeof(explode(" ", $content));
}
