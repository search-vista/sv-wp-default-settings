<?php
/*
Plugin Name: SearchVista Default Settings
Description: Some useful default configuration settings
Version: 0.1
Author: SearchVista
Author URI: https://searchvista.co.uk
See: https://codex.wordpress.org/Option_Reference
*/

if (!defined('ABSPATH')) {
    exit;
}

function sv_wordpress_defaults() {
    $options = [
        'blog_public' => 0,
        'close_comments_days_old' => 1,
        'close_comments_for_old_posts' => 1,
        'comment_max_links' => 1,
        'comment_moderation' => 1,
        'comment_registration' => 1,
        'comments_notify' => 0,
        'moderation_notify' => 0,
        'date_format' => 'd/m/Y',
        'default_comment_status' => 'closed',
        'default_ping_status' => 'closed',
        'default_pingback_flag' => 0,
        'gzipcompression' => 1,
        'permalink_structure' => '/%postname%/',
        'require_name_email' => 1,
        'show_avatars' => 0,
        'use_smilies' => 0,
        'use_trackback' => 0,
    ];

    foreach($options as $key => $value) {
        update_option($key, $value);
    }

    // Ensure permalink changes are applied immediately after activation.
    flush_rewrite_rules();

    $default_post = get_post(1);

    if ($default_post instanceof WP_Post && $default_post->post_title === 'Hello world!') {
        wp_delete_post(1, TRUE);
    }

    wp_delete_comment(1);
    return;
}

register_activation_hook(__FILE__, 'sv_wordpress_defaults');
