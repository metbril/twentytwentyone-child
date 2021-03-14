<?php

add_action( 'wp_enqueue_scripts', 'twentytwentyone_child_enqueue_styles' );

function twentytwentyone_child_enqueue_styles() {
    wp_enqueue_style( 'twentytwentyone-child-style', get_stylesheet_uri(),
        array( 'twenty-twenty-one-style' ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}

?>