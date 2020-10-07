    <footer>
    <h4><?php bloginfo( 'title' ); ?> Footer</h4>
        <p>
            &copy; 
            <?php date( 'Y' ); ?>
            <a href="<?php echo site_url(); ?>">
                <?php bloginfo( 'title' ); ?>
            </a>
            All Rights Reserved.
        </p>
        <nav>
            <h2>Footer Navigation</h2>
            <?php
            
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer_menu' // Remember its what we defined in functions.php
                    )
                );
            ?>
        </nav>
    </footer>
    <?php
        // Similiar to wp_head(), but for footer scripts
        // and output.
        wp_footer();
    ?>
</body>
</html>