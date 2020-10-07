<?php

/**
 * Register a navigation menu.
 */
register_nav_menus( 
    array( //THIS IS AN ASSOCIATIVE ARRAY
        // WE ARE CREATING THEM
        // by registering nac locations if we want the admin to be able to add navs to the site
        // An "ID" for the menu, and the text that appears to admin.
        'main_menu'   => 'Main Menu (Header)',
        'footer_menu' => 'Footer Menu',
        'test_menu'   => 'Test Menu',       
    )
);
