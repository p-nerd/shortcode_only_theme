<?php
/**
 * Template Name: Shortcode Only
 */

wp_head();

$content = get_post_field('post_content', get_the_ID());

echo do_shortcode($content);

wp_footer();