<?php

// Disable Gutenberg Editor on Post Type (pages)
add_filter('use_block_editor_for_post_type', function ($current_status, $post_type) {
    if ($post_type === 'page') return false; // Disable on pages
    return $current_status;
}, 10, 2);






