    <footer>
    <h4><?php bloginfo( 'title' ); ?></h4>
        <p>
            &copy; 
            <?php date( 'Y' ); ?>
            <a href="<?php echo site_url(); ?>">
                <?php bloginfo( 'title' ); ?>
            </a>
            All Rights Reserved.
        </p>
    </footer>
    <?php
        // Similiar to wp_head(), but for footer scripts
        // and output.
        wp_footer();
    ?>
</body>
</html>