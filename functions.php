<?php

/**
 * Register a navigation menu.
 */
register_nav_menus( 
    array( //THIS IS AN ASSOCIATIVE ARRAY
        // WE ARE CREATING THEM
        // by registering nac locations if we want the admin to be able to add navs to the site
        // An "ID" for the menu (can be anything), and the text that appears to admin.
        'main_menu'   => 'Main Menu (Header)',
        'footer_menu' => 'Footer Menu',
        'test_menu'   => 'Test Menu',       
    )
);

/**
 * Enqueue theme stylesheets and scripts.
 */

// This is our OWN function that we're going to run in conjunction with WP functions.
// Note: we are making an anonymous function but we can make function Name(); if were going to use the Name function elsewhere.
add_action( 'wp_enqueue_scripts', function () 
{
    // Enqueue is a JavaScript! It needs the following parameters
    wp_enqueue_script(
        // An ID / name for our script (can be anything)
        'techcareers-theme-scripts',
        // The "public" path to the script file.
        get_theme_file_uri( '/assets/js/scripts.js' ), // note: ur'I' = instrument (Note: the version number of the file will alter the get_theme_uri by doing '/assets/js/scripts,js?version=4' -> '/assets/js/scripts,js?version=5')
        // Dependencies (jQuery, Bootstrap, etc.)
        array(),
        // Version number of the file. (based on time to fight browser cache!)
        strftime( get_theme_file_uri( '/assets/js/scripts.js' ) ), // String representation for the last time the file was saved
        // Should we output this script in the wp_footer.php?
        FALSE // this will be a boolean

        /**
         * 1) ID
         * 2) Public Path to script file
         * 3) Dependencies (IF WE HAVE ANY)
         * 4) Version number
         * 5) Boolean
         */
    );
    // Enqueue our Stylesheet!
    wp_enqueue_style(
        'techcareers-theme-main-styles',
        get_theme_file_uri( '/assets/css/main.css' ),
        strftime( get_theme_file_uri( '/assets/css/main.css' ) ),
        // The type of medio we're targeting (media queries label.)
        'all'
    );
} ); 
