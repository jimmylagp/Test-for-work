<?php

function longitud_excerpt($length) {
    return 35;
}
add_filter('excerpt_length', 'longitud_excerpt');

add_theme_support( 'post-thumbnails' );
?>