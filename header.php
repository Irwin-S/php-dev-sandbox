<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- WP has a built in function "bloginfo()" (Note: It has a built in echo function) -->
    <title><?php bloginfo( 'title' ); ?></title>

    <?php
        // "wp_head()" will output any scripts, styles, meta, and more
        // that our theme / plugin needs.
        wp_head(); // THIS IS MANDATORY!
    ?>

</head>
<body>
    <h1><?php bloginfo( 'title' ); ?></h1>