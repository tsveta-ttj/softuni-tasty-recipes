<?php

/**
 * Function that changes the default excerpt length 
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function new_excerpt_length($length) {

    return 10;
}
add_filter('excerpt_length', 'new_excerpt_length', 999);

