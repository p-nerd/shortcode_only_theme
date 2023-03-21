<?php
/**
 * Template Name: Shortcode Only
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body>
    <?php
    $content = get_post_field('post_content', get_the_ID());
    echo do_shortcode($content);
    ?>

    <?php wp_footer(); ?>
</body>

</html>